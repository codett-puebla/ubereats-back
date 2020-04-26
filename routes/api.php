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

//ROUTE USER
Route::resource('user','User\UserController',['only' => ['show']]);
//END ROUTES PASSPORT

//ROUTES RESTAURANT
Route::resource('restaurant','Restaurant\RestaurantController',['only' => ['show', 'index']]);
//END ROUTES RESTAURANT

//ROUTES DISH
Route::resource('dish','Dish\DishController',['only' => ['show', 'index']]);
//END ROUTES DISH

//ROUTES TRAVEL
Route::resource('travel','Travel\TravelController',['except' => ['create','edit']]);
//END ROUTES TRAVEL

//ROUTES ORDER
Route::resource('order','Order\OrderController',['except' => ['create','edit']]);
//END ROUTES ORDER

//ROUTES PAYMENT
Route::resource('payment','Payment\PaymentController',['except' => ['create','edit']]);
//END ROUTES PAYMENT

//ROUTES PASSPORT
Route::post('oauth/token', '\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken');
//END ROUTES PASSPORT
