<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dish extends Model
{
    protected $fillable = [
      'id',
      'name',
      'price',
      'preparation_time',
      'restaurant_id'
    ];

    public function restaurant(){
        return $this->belongsTo(restaurant::class);
    }

    public function order_detail(){
        return $this->belongsTo(order_detail::class);
    }
}
