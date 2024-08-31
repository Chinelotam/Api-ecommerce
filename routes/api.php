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

Route::get('/users', 'UsersController@index');
Route::post('/users', 'UsersController@store');
Route::get('/users/{id}', 'UsersController@show');
Route::put('/users/{id}', 'UsersController@update');
Route::delete('/users{id}', 'UsersController@destroy');

Route::get('/vendors', 'VendorsController@index');
Route::post('/vendors', 'VendorsController@store');
Route::get('/vendors/{id}', 'VendorsController@show');
Route::put('/vendors/{id}', 'VendorsController@update');
Route::delete('/vendors/{id}', 'VendorsController@destroy');

Route::get('/products', 'ProductsController@index');
Route::post('/products', 'ProductsController@store');
Route::get('/products/{id}', 'ProductsController@show');
Route::put('/products/{id}', 'ProductsController@update');
Route::delete('/products/{id}', 'ProductsController@destroy');

Route::get('/categories', 'CategoriessController@index');
Route::post('/categories', 'CategoriessController@store');
Route::get('/categories/{id}', 'CategoriessController@show');
Route::put('/categories/{id}', 'CategoriessController@update');
Route::delete('/categories/{id}', 'CategoriesController@destroy');

Route::get('/orders', 'OrdersController@index');
Route::post('/orders', 'OrdersController@store');
Route::get('/orders/{id}', 'OrdersController@show');
Route::put('/orders/{id}', 'OrdersController@update');
Route::delete('/orders/{id}', 'OrdersContoller@destroy');

Route::get('/cartitems', 'CartItemsController@index');
Route::post('/cartitems', 'CartItemsController@store');
Route::get('/cartitems/{id}', 'CartItemsController@show');
Route::put('/cartitems/{id}', 'CartItemsController@update');
Route::delete('/cartitems/{id}', 'CartItemsContoller@destroy');

Route::get('/media', 'MediaController@index');
Route::post('/media', 'MediaController@store');
Route::get('/media/{id}', 'MediaController@show');
Route::put('/media/{id}', 'MediaController@update');
Route::delete('/media/{id}', 'MediaContoller@destroy');

Route::get('/favourites', 'FavouritesController@index');
Route::post('/favourites', 'FavouritesController@store');
Route::get('/favourites/{id}', 'FavouritesController@show');
Route::put('/favourites/{id}', 'FavouritesController@update');
Route::delete('/favourites/{id}', 'FavouritesContoller@destroy');







Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
