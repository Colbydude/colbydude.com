<?php

namespace App\Providers;

use Illuminate\Support\Facades\Cookie;
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
        view()->composer('layouts.default', function ($view) {
            $theme = Cookie::get('theme');

            if ($theme !== 'dark' && $theme !== 'light') {
                $theme = 'dark';
            }

            $view->with('theme', $theme);
        });
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
