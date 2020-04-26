<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id',
        'detail',
        'paidOut',
        'total',
        'hour',
        'travel_id'
    ];

    public function travel(){
        return $this->belongsTo(Travel::class);
    }
}
