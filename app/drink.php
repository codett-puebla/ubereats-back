<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class drink extends Model
{
    protected $fillable = [
      'id',
      'name',
      'description',
      'presentation',
      'quantity',
      'brand',
      'restaurant_id'
    ];

    public function restaurant(){
        return $this->belongsTo(restaurant::class);
    }

    public function order_detail(){
        return $this->belongsTo(order_detail::class);
    }
}
