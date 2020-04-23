<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{
    protected $fillable = [
        'id',
        'sale_price',
        'quantity',
        'dish_id',
        'drink_id',
        'order_id'
    ];

    public function dish(){
        return $this->belongsTo(dish::class);
    }

    public function drink(){
        return $this->belongsTo(drink::class);
    }

    public function order(){
        return $this->belongsTo(order::class);
    }
}
