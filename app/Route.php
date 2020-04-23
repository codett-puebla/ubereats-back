<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = [
        'id',
        'origin',
        'destination',
        'travel_id'
    ];

    public function travel(){
        return $this->belongsTo(Travel::class);
    }
}
