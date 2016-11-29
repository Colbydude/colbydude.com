<?php

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

Route::get('/', 'PagesController@home');
Route::post('contact', 'PagesController@postContact');
Route::get('games', 'PagesController@games');
Route::get('payment', 'PagesController@payment');
Route::get('payment/success', 'PagesController@paymentSuccess');
Route::get('music', 'PagesController@music');
Route::post('update_style', 'PagesController@updateStyle');
Route::get('web', 'PagesController@web');
