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
Route::resource('order','Order\OrderController',['except' => ['create','edit']]);
