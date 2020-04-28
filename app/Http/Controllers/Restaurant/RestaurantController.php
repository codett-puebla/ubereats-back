<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\ApiController;
use App\restaurant;
use Illuminate\Http\Request;

class RestaurantController extends ApiController
{
    public function index()
    {
        $restaurants = restaurant::all();

        foreach ($restaurants as $restaurant){
            $restaurant->orders;
        }
        return $this->showAll($restaurants);
    }

    public function show(restaurant $restaurant)
    {
        $restaurant->dishes;
        return $this->showOne($restaurant);
    }

}
