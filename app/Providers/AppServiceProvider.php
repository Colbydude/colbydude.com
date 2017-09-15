<?php

namespace App\Providers;

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
        if (!session()->has('style')) {
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
