<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $fillable = [
        'id',
        'description',
        'color',
        'licensePlate',
        'brand',
        'model',
        'typeTransport'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function travels(){
        return $this->hasMany(Travel::class);
    }
}
