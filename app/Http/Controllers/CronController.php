<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CronController extends Controller
{
    /**
     * The access token used for Spotify Requests.
     *
     * @var string
     */
    private $accessToken;

    public function __construct()
    {
        $this->middleware(['cron.key']);
    }

    /**
     * Fetches and stores relevant Spotify information.
     *
     * @return \Illuminate\Http\Response
     */
    public function spotify()
    {
        // Get app access token.
        $this->fetchSpotifyAccessToken();

        // Fetch album data from Colbydude.
        $albumsJson = $this->spotifyRequest('/v1/artists/' . config('services.spotify.artist_id') . '/albums', [
            'country' => 'US',
            'limit' => 50,
        ]);

        // Fetch additional albums.
        foreach (config('music.albums') as $albumId) {
            $albumJson = $this->spotifyRequest('/v1/albums/' . $albumId);

            array_push($albumsJson->items, $albumJson);
        }

        // Sort by release date, then flip to have the newest release at the top.
        $albumsJson = Arr::sort($albumsJson->items, function ($album) {
            return $album->release_date;
        });
        $albumsJson = array_reverse($albumsJson);

        // Store albums.
        Storage::put('music/albums.json', json_encode($albumsJson));

        // Fetch top track data and store.
        $topTracksJson = $this->spotifyRequest('/v1/artists/' . config('services.spotify.artist_id') . '/top-tracks', [
            'country' => 'US',
        ]);

        Storage::put('music/top-tracks.json', json_encode($topTracksJson->tracks));

        return response()->json(['message' => 'OK'], 200);
    }

    /**
     * Fetches the access token to use for Spotify API requests.
     *
     * @return string
     */
    private function fetchSpotifyAccessToken()
    {
        $url = 'https://accounts.spotify.com/api/token';

        $client = new Client;
        $response = $client->request('POST', $url, [
            'form_params' => [
                'grant_type' => 'client_credentials',
            ],
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode(config('services.spotify.client_id') . ':' . config('services.spotify.client_secret')),
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
        ]);

        $responseBody = json_decode((string) $response->getBody());

        $this->accessToken = $responseBody->access_token;

        return $responseBody->access_token;
    }

    /**
     * Fetches a response from the Spotify API.
     *
     * @return object
     */
    private function spotifyRequest($url, $params = [], $method = 'GET')
    {
        $baseUri = 'https://api.spotify.com';

        $client = new Client(['base_uri' => $baseUri]);
        $response = $client->request($method, $url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->accessToken,
            ],
            'query' => $params,
        ]);

        return json_decode((string) $response->getBody());
    }
}