<?php

use Illuminate\Http\Request;

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


Route::resource('user','User\UserController',['only' => ['show']]);
Route::resource('restaurant','Restaurant\RestaurantController',['only' => ['show', 'index']]);
Route::resource('dish','Dish\DishController',['only' => ['show', 'index']]);
Route::resource('travel','Travel\TravelController',['except' => ['create','edit']]);
Route::resource('order','Order\OrderController',['except' => ['create','edit']]);

//ROUTES PASSPORT
Route::post('oauth/token', '\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken');
//END ROUTES PASSPORT
