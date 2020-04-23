<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'id',
        'detail',
        'paidOut',
        'total',
        'hour',
        'travel_id'
    ];

    public function travels(){
        return $this->hasMany(Travel::class);
    }
}
