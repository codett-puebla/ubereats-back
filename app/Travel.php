<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $fillable = [
        'id',
        'location',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function transport(){
        return $this->belongsTo(Transport::class);
    }

    public function payment(){
        return $this->hasMany(Payment::class);
    }

    public function route(){
        return $this->hasMany(Route::class);
    }

    public function messageTravel(){
        return $this->hasMany(MessageTravel::class);
    }
}
