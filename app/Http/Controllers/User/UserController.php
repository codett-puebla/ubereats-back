<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\ApiController;
use App\user;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends ApiController
{
    public function show(user $user)
    {
        return $this->showOne($user);
    }

    public function getUser(){
        $id = Auth::id();
        $user = User::find($id);
        return $this->showOne($user);
    }

    public function getMyTransports(){
        $id = Auth::id();
        $user = User::find($id);
        $user->transports;
        return $this->showOne($user);
    }
}
