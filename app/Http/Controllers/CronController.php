<?php

namespace App\Http\Controllers;

use App\Services\GitHubApiService;
use GuzzleHttp\Client;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class CronController extends Controller
{
    /**
     * The access token used for Spotify Requests.
     */
    private string $accessToken;

    protected GitHubApiService $githubApiService;

    public function __construct(GitHubApiService $githubApiService)
    {
        $this->githubApiService = $githubApiService;
        $this->middleware(['cron.key']);
    }

    /**
     * Fetches and stores relevant GitHub information.
     *
     * @return \Illuminate\Http\Response
     */
    public function github()
    {
        $pinnedJson = $this->githubApiService->getUserPinnedItems('Colbydude');
        $pinnedJson = $pinnedJson->data->repositoryOwner->itemShowcase->items->edges;

        // Store pinned repositories.
        Storage::put('code/pinned.json', json_encode($pinnedJson));

        // Fetch top languages from GitHub.
        $languages = [];
        $page = 1;

        $repoJson = $this->githubApiService->getUserRepos($page);

        // Iterate through pages.
        while (count($repoJson) >= 30) {
            array_push($languages, Arr::pluck($repoJson, 'language'));
            $page++;
            $repoJson = $this->githubApiService->getUserRepos($page);
        }

        $languages = Arr::flatten($languages);          // Combine response arrays.
        $languages = array_diff($languages, [null]);    // Strip out null values.
        $languages = array_count_values($languages);    // Count the repeating values and key them.
        $languages = Arr::sort($languages);             // Sort (lowest to highest).
        $languages = array_reverse($languages);         // Flip to arrange by highest to lowest.

        // Store the top languages.
        Storage::put('code/top-languages.json', json_encode($languages));

        return response()->json(['message' => 'OK'], 200);
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

        $releases = [];

        // De-depulicate releases.
        foreach ($albumsJson->items as $album) {
            $index = array_search($album->name, array_column($albumsJson->items, 'name'));

            if ($index !== false) {
                // Take oldest dated release.
                $releases[$index] = $album;
            } else {
                array_push($album);
            }
        }

        $releases = Arr::sort($releases, function ($album) {
            return $album->release_date;
        });
        $releases = array_reverse($releases);

        // Store albums.
        Storage::put('music/albums.json', json_encode($releases));

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
