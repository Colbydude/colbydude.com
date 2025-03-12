<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\CronController;
use App\Http\Middleware\CronKey;
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

Route::middleware([CronKey::class])->group(function () {
    Route::get('cron/github', [CronController::class, 'github']);
    Route::get('cron/spotify', [CronController::class, 'spotify']);
});
Route::get('github-contributions', [ApiController::class, 'githubContributions']);
