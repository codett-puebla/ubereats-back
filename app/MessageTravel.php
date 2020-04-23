<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageTravel extends Model
{
    protected $fillable = [
        'id',
        'message',
        'travel_id'
    ];

    public function travel(){
        return $this->belongsTo(Travel::class);
    }
}
