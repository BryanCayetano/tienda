<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

    Route::get('/', 'CartController@shop')->name('shop');
    Route::get('/cart', 'CartController@cart')->name('cart.index');
    Route::post('/add', 'CartController@add')->name('cart.store');
    Route::post('/update', 'CartController@update')->name('cart.update');
    Route::post('/remove', 'CartController@remove')->name('cart.remove');
    Route::post('/clear', 'CartController@clear')->name('cart.clear');

    

    //Route::get('/home', 'HomeController@index')->name('home');
});
