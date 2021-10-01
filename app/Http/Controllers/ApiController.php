<?php

namespace App\Http\Controllers;

use App\Services\GitHubApiService;
use Illuminate\Support\Facades\Cache;

class ApiController extends Controller
{
    protected GitHubApiService $githubApiService;

    public function __construct(GitHubApiService $githubApiService)
    {
        $this->githubApiService = $githubApiService;
    }

    /**
     * Pass-through API endpoint to get my contributions on GitHub and cache the result for 1 day.
     *
     * @return \Illuminate\Http\Response
     */
    public function githubContributions()
    {
        return Cache::remember('github-contributions', 60 * 60 * 24, function () {
            return $this->githubApiService->getUserContributions('Colbydude');
        });
    }
}
