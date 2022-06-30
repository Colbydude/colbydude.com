<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'home']);
Route::get('code', [PagesController::class, 'code']);
Route::get('code/webdev', [PortfolioController::class, 'webdev']);
Route::get('code/gamedev', [PortfolioController::class, 'gamedev']);
Route::post('contact', [PagesController::class, 'postContact'])->middleware(ProtectAgainstSpam::class);
Route::get('games', [PagesController::class, 'games']);
Route::get('payment', [PagesController::class, 'payment']);
Route::get('payment/success', [PagesController::class, 'paymentSuccess']);
Route::get('portfolio', [PagesController::class, 'code']);
Route::get('portfolio/webdev', [PortfolioController::class, 'webdev']);
Route::get('portfolio/gamedev', [PortfolioController::class, 'gamedev']);
Route::get('music', [PagesController::class, 'music']);
Route::post('update_style', [PagesController::class, 'updateStyle']);
Route::get('web', [PagesController::class, 'web']);
