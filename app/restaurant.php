<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restaurant extends Model
{
    protected $fillable = [
     'id',
     'name',
     'rank',
     'delivery_cost',
     'wait_time',
     'food_kind',
     'lat',
     'long'
    ];

    public function dishes(){
        return $this->hasMany(dish::class);
    }

    public function drinks(){
        return $this->hasMany(drink::class);
    }

    public function restaurants(){
        return $this->hasMany(order::class);
    }
}
