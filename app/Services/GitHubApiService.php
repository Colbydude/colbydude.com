<?php

namespace App\Services;

use GuzzleHttp\Client;

class GitHubApiService
{
    private string $baseUri = 'https://api.github.com';
    private string $token;

    public function __construct()
    {
        $this->token = config('services.github.token');
    }

    /**
     * Gets the specified user's contribution activity.
     *
     * @param  string  $user
     * @return
     */
    public function getUserContributions(string $user)
    {
        $query = "query {
            user(login: \"${user}\") {
                contributionsCollection {
                    contributionCalendar {
                        totalContributions,
                        weeks {
                            contributionDays {
                                date,
                                contributionCount
                            },
                        }
                    }
                }
            }
        }";

        return $this->graphQlRequest($query);
    }

    /**
     * Gets the specified user's pinned items/repositories.
     *
     * @param  string  $user
     * @return
     */
    public function getUserPinnedItems(string $user)
    {
        $query = "query {
            repositoryOwner(login: \"${user}\") {
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
        }";

        return $this->graphQlRequest($query);
    }

    /**
     * Gets the (implied from the token) user's repositories, paginated.
     *
     * @param  int  $page
     * @return
     */
    public function getUserRepos(int $page = 1)
    {
        return $this->request('/user/repos', ['page' => $page], 'GET');
    }

    /**
     * Sends a request to the GitHub API using GraphQL.
     *
     * @param  string  $query
     * @return mixed
     */
    private function graphQlRequest(string $query): mixed
    {
        $client = new Client(['base_uri' => $this->baseUri]);
        $response = $client->request('POST', '/graphql', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token,
            ],
            'body' => json_encode(['query' => $query])
        ]);

        return json_decode((string) $response->getBody());
    }

    /**
     * Sends an HTTP request to the GitHub API.
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
                'Authorization' => 'Bearer ' . $this->token
            ],
            'query' => $params
        ]);

        return json_decode((string) $response->getBody());
    }
}
