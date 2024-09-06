<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VendorsController;
use App\Http\Controllers\CartItemsController;

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

Route::get('/users', [UsersController::class, 'index']);
Route::post('/users', [UsersController::class, 'store']);
Route::get('/users/{id}', [UsersController::class, 'show']);
Route::put('/users/{id}', [UsersController::class, 'update']);
Route::delete('/users{id}', [UsersController::class, 'destroy']);

Route::get('/vendors', [VendorsController::class, 'index']);
Route::post('/vendors', [VendorsController::class, 'store']);
Route::get('/vendors/{id}', [VendorsController::class, 'show']);
Route::put('/vendors/{id}', [VendorsController::class, 'update']);
Route::delete('/vendors/{id}', [VendorsController::class, 'destroy']);

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


Route::get('/cartItems', [CartItemsController::class, 'index']);
Route::post('/cartItems', [CartItemsController::class, 'store']);
Route::get('/cartItems/{id}', [CartItemsController::class, 'show']);
Route::put('/cartItems/{id}', [CartItemsController::class, 'update']);
Route::delete('/cartItems/{id}', [CartItemsController::class, 'destroy']);

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
