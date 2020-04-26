<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    public $timestamps = false;

    protected $casts = [
        'location' => 'array',
        'origin' => 'array',
        'destination' => 'array',
        'messages' => 'array',
    ];

    protected $fillable = [
        'id',
        'location',
        'origin',
        'destination',
        'messages',
        'user_id',
        'order_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function order(){
        return $this->belongsTo(order::class);
    }

    public function payment(){
        return $this->hasMany(Payment::class);
    }
}
