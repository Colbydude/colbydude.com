<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

class SpotifyApiService
{
    /**
     * The authentication token to be used for requests.
     */
    private string $accessToken;

    /**
     * The Base URI of the Spotify API.
     */
    private string $baseUri = 'https://api.spotify.com';

    /**
     * The app client ID obtained from the Spotify Developer portal.
     */
    private string $clientId;

    /**
     * The app client secret obtained from the Spotify Developer portal.
     */
    private string $clientSecret;

    public function __construct()
    {
        $this->clientId = config('services.spotify.client_id');
        $this->clientSecret = config('services.spotify.client_secret');

        $this->fetchAccessToken();
    }

    /**
     * Get the specified album's information.
     *
     * @param  string  $albumId
     * @return mixed
     */
    public function getAlbum(string $albumId): mixed
    {
        return $this->request("/v1/albums/{$albumId}");
    }

    /**
     * Get the specified artist's albums.
     *
     * @param  string  $artistId
     * @return mixed
     */
    public function getArtistAlbums(string $artistId): mixed
    {
        return $this->request("/v1/artists/{$artistId}/albums", [
            'country' => 'US',
            'limit' => 50,
        ]);
    }

    /**
     * Get the specified artist's top tracks.
     *
     * @param  string  $artistId
     * @return mixed
     */
    public function getArtistTopTracks(string $artistId): mixed
    {
        return $this->request("/v1/artists/{$artistId}/top-tracks", [
            'country' => 'US',
        ]);
    }

    /**
     * Fetches the access token to use for Spotify API requests.
     *
     * @return string
     */
    private function fetchAccessToken(): void
    {
        $url = 'https://accounts.spotify.com/api/token';

        $token = Cache::remember('spotify-token', 60 * 60, function () use ($url) {
            $client = new Client;
            $response = $client->request('POST', $url, [
                'form_params' => [
                    'grant_type' => 'client_credentials',
                ],
                'headers' => [
                    'Authorization' => 'Basic ' . base64_encode($this->clientId . ':' . $this->clientSecret),
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
            ]);

            $responseBody = json_decode((string) $response->getBody());

            return $responseBody->access_token;
        });

        $this->accessToken = $token;
    }

    /**
     * Sends an HTTP request to the Spotify API.
     *
     * @param  string  $url
     * @param  mixed   $params
     * @param  string  $method
     * @return mixed
     */
    private function request(string $url, mixed $params = [], string $method = 'GET'): mixed
    {
        $client = new Client(['base_uri' => $this->baseUri]);
        $response = $client->request($method, $url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->accessToken,
            ],
            'query' => $params,
        ]);

        return json_decode((string) $response->getBody());
    }
}
