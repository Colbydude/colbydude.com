<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',                     ['as' => 'home',                'uses' => 'PagesController@home']);
Route::post('/contact',             ['as' => 'contact',             'uses' => 'PagesController@postContact']);
Route::get('/games',                ['as' => 'games',               'uses' => 'PagesController@games']);
Route::get('/payment',              ['as' => 'payment',             'uses' => 'PagesController@payment']);
Route::get('/payment/success',      ['as' => 'payment.success',     'uses' => 'PagesController@paymentSuccess']);
Route::get('/music',                ['as' => 'music',               'uses' => 'PagesController@music']);
Route::get('/web',                  ['as' => 'web',                 'uses' => 'PagesController@web']);

Route::post('/update_style', function()
{
    Session::put('style', Input::get('style'));
    return response()->json(['style' => Input::get('style')]);
});
