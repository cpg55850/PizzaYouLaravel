<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');

Route::get('/profile', 'ProfileController@index');

Route::get('/cart', 'CartController@index');
Route::post('/cart', 'CartController@submitOrder')->name('submitOrder');
Route::post('/add-to-cart/{id}', 'CartController@addToCart');

Route::resource('pizza', 'PizzaController', [
    'only' => ['index', 'show']
]);

Route::resource('drink', 'DrinkController', [
    'only' => ['index', 'show']
]);

Route::resource('orders', 'OrderController');

Auth::routes();