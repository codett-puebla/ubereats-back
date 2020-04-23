<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $fillable = [
        'id',
        'description',
        'color',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
