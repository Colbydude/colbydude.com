<?php

namespace App\Http\Controllers;

use App\Services\BandsintownApiService;
use App\Services\GitHubApiService;
use App\Services\SpotifyApiService;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class CronController extends Controller
{
    /**
     * The artist ID from the config.
     */
    private string $spotifyArtistId;

    protected BandsintownApiService $bitApiService;
    protected GitHubApiService $githubApiService;
    protected SpotifyApiService $spotifyApiService;

    public function __construct(BandsintownApiService $bitApiService, GitHubApiService $githubApiService, SpotifyApiService $spotifyApiService)
    {
        $this->bitApiService = $bitApiService;
        $this->githubApiService = $githubApiService;
        $this->spotifyApiService = $spotifyApiService;

        $this->spotifyArtistId = config('services.spotify.artist_id');
    }

    /**
     * Fetches and stores relevant Bandsintown information.
     */
    public function bandsintown()
    {
        $bands = config('services.bandsintown');
        $allEvents = [];

        foreach ($bands as $band) {
            $events = $this->bitApiService->getEvents($band['name'], $band['api_key']);

            if (is_array($events)) {
                foreach ($events as $event) {
                    $event->artist_name = $band['name'];
                    array_push($allEvents, $event);
                }
            }
        }

        // Sort by the "starts_at" key
        usort($allEvents, function ($a, $b) {
            return strtotime($a->starts_at) <=> strtotime($b->starts_at);
        });

        Storage::put('music/events.json', json_encode($allEvents));

        return response()->json(['message' => 'OK'], 200);
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
        // Fetch album data from Colbydude.
        $albumsJson = $this->spotifyApiService->getArtistAlbums($this->spotifyArtistId);

        // Fetch additional albums.
        foreach (config('music.albums') as $albumId) {
            $albumJson = $this->spotifyApiService->getAlbum($albumId);
            $albumJson->album_group = 'albums';

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

        // Handle manual album info overrides.
        foreach (config('music.album_overrides') as $albumId => $override) {
            for ($i = 0; $i < count($releases); $i++) {
                if ($releases[$i]->id === $albumId) {
                    $releases[$i] = (object) [...((array) $releases[$i]), ...$override];
                    break;
                }
            }
        }

        // Store albums.
        Storage::put('music/albums.json', json_encode($releases));

        // Fetch top track data and store.
        $topTracksJson = $this->spotifyApiService->getArtistTopTracks($this->spotifyArtistId);

        Storage::put('music/top-tracks.json', json_encode($topTracksJson->tracks));

        return response()->json(['message' => 'OK'], 200);
    }
}
