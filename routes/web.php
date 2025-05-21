<?php

use App\Http\Controllers\PagesController;
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
Route::get('code/webdev', function () {
    return redirect('code');
});
Route::get('code/gamedev', function () {
    return redirect('code');
});
Route::post('contact', [PagesController::class, 'postContact'])->middleware(ProtectAgainstSpam::class);
Route::get('games', [PagesController::class, 'games']);
Route::get('payment', [PagesController::class, 'payment']);
Route::get('payment/success', [PagesController::class, 'paymentSuccess']);
Route::get('portfolio', [PagesController::class, 'portfolio']);
Route::get('portfolio/webdev', function () {
    return redirect('portfolio');
});
Route::get('portfolio/gamedev', function () {
    return redirect('portfolio');
});
Route::get('music', [PagesController::class, 'music']);
Route::post('update_style', [PagesController::class, 'updateStyle']);
Route::get('web', [PagesController::class, 'web']);
