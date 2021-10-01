<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('cron/github', 'CronController@github');
Route::get('cron/spotify', 'CronController@spotify');
Route::get('github-contributions', 'ApiController@githubContributions');
