<?php

namespace App\Services;

use GuzzleHttp\Client;

class BandsintownApiService
{
    /**
     * The base URI of the Bandsintown API.
     */
    private string $baseUri = 'https://rest.bandsintown.com';

    /**
     * Gets a list of events for the given artist.
     *
     * @param  string  $artistName
     * @param  string  $apiKey
     * @return mixed
     */
    public function getEvents(string $artistName, string $apiKey): mixed
    {
        return $this->request("/artists/{$artistName}/events/", [
            'app_id' => $apiKey
        ]);
    }

    /**
     * Sends an HTTP request to the Bandsintown API.
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
            'query' => $params
        ]);

        return json_decode((string) $response->getBody());
    }
}
