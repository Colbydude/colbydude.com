<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Support\Arr;
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
     * Fetches and stores relevant GitHub information.
     *
     * @return \Illuminate\Http\Response
     */
    public function github()
    {
        $pinnedQuery = <<<'GRAPHQL'
            query {
                repositoryOwner(login: "Colbydude") {
                    ... on ProfileOwner {
                        pinnedItemsRemaining
                        itemShowcase {
                            items(first: 6) {
                                totalCount
                                edges {
                                    node {
                                        ... on Repository {
                                            name
                                            description
                                            primaryLanguage {
                                                name
                                            }
                                            stargazers {
                                                totalCount
                                            }
                                            forkCount
                                            resourcePath
                                            isTemplate
                                        }
                                    }
                                }
                            }
                            hasPinnedItems
                        }
                    }
                }
            }
        GRAPHQL;

        $pinnedJson = $this->githubGraphQLRequest($pinnedQuery);
        $pinnedJson = $pinnedJson->data->repositoryOwner->itemShowcase->items->edges;

        // Store pinned repositories.
        Storage::put('code/pinned.json', json_encode($pinnedJson));

        // Fetch top languages from GitHub.
        $languages = [];
        $page = 1;

        $repoJson = $this->githubRequest('/user/repos', ['page' => $page], 'GET');

        // Iterate through pages.
        while (count($repoJson) >= 30) {
            array_push($languages, Arr::pluck($repoJson, 'language'));
            $page++;
            $repoJson = $this->githubRequest('/user/repos', ['page' => $page], 'GET');
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
     * Fetches a response from the GitHub API.
     *
     * @return object
     */
    private function githubRequest($url, $params = [], $method = 'GET')
    {
        $baseUri = 'https://api.github.com';

        $client = new Client(['base_uri' => $baseUri]);
        $response = $client->request($method, $url, [
            'headers' => [
                'Authorization' => 'Bearer ' . config('services.github.token'),
            ],
            'query' => $params,
        ]);

        return json_decode((string) $response->getBody());
    }

    /**
     * Fetches a response from the GitHub GraphQL API.
     *
     * @return object
     */
    private function githubGraphQLRequest($query)
    {
        $baseUri = 'https://api.github.com';

        $client = new Client(['base_uri' => $baseUri]);
        $response = $client->request('POST', '/graphql', [
            'headers' => [
                'Authorization' => 'Bearer ' . config('services.github.token'),
            ],
            'body' => json_encode(['query' => $query]),
        ]);

        return json_decode((string) $response->getBody());
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
