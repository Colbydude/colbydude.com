<?php

namespace App\Providers;

use App\Services\GitHubApiService;
use App\Services\SpotifyApiService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->instance(GitHubApiService::class, new GitHubApiService());
        $this->app->instance(SpotifyApiService::class, new SpotifyApiService());

        if (! session()->has('style')) {
            $rand = rand(0, 1);

            if ($rand == 0) {
                session(['style' => 'dark']);
            } else {
                session(['style' => 'light']);
            }
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
