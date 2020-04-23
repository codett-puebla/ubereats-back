<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dish extends Model
{
    const FOOD = 1;
    const DRINK = 2;

    protected $fillable = [
      'id',
      'name',
      'price',
      'preparation_time',
      'restaurant_id',
      'brand',
      'type'
    ];

    public function restaurant(){
        return $this->belongsTo(restaurant::class);
    }

    public function order_detail(){
        return $this->belongsTo(order_detail::class);
    }
}
