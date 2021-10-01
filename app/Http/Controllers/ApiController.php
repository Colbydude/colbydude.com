<?php

namespace App\Http\Controllers;

use App\Services\GitHubApiService;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * @var GitHubApiService
     */
    protected $githubApiService;

    public function __construct(GitHubApiService $githubApiService)
    {
        $this->githubApiService = $githubApiService;
    }

    public function githubContributions(Request $request)
    {
        $request->validate([
            'user' => 'required|string'
        ]);

        return $this->githubApiService->getUserContributions($request->user);
    }
}
