<?php

namespace App\Http\Controllers\Dish;

use App\Dish;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DishController extends ApiController
{
    public function index()
    {
        $dishes = dish::all();
        return $this->showAll($dishes);
    }

    public function show(Dish $dish)
    {
        return $this->showOne($dish);
    }
}
