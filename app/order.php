<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    const NEW = 0;
    const IN_PROCESS = 1;
    const DELIVERED = 2;
    const CLOSED = 3;

    protected $fillable = [
      'id',
      'date',
      'total',
      'status',
      'hour',
      'restaurant_id',
      'user_id'
    ];

    public function restaurant(){
        return $this->belongsTo(restaurant::class);
    }


    public function order_details(){
        return $this->hasMany(order_detail::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
