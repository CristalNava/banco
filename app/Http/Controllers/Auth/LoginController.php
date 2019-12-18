<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->validate(request(),[
            'email'=> 'email|required|string',
            'password' =>'required|string'

        ]);
    }
}
