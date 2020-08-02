<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use Facade\FlareClient\Api;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends ApiController
{
    public function __invoke(Request $request)
    {
        $credentials=$request->only('email','password');
        if (Auth::attempt($credentials)){
            //颁发Token
            return auth()->user()->createToken('auth')->plainTextToken;
        }
    }
}
