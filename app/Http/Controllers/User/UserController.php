<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\ApiController;
use App\user;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends ApiController
{
    public function show(user $user)
    {
        return $this->showOne($user);
    }

}
