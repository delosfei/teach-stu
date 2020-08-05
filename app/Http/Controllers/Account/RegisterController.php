<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function index()
    {
        return view('account.register');
    }


    public function create()
    {

    }


    public function store(Request $request)
    {

        $request->validate(
            [
                'code' => ['required'],
                'account' => ['required', 'string'],
                'password' => ['required', 'confirmed'],
                'name' => ['required', 'string'],
            ]
        );
    }

    public function code(Request $request)
    {
        $request->validate(
            [
                'account' => ['required',$this->validateAccountField()],
                'captcha' => ['required','captcha'],
            ]
        );
    }
}
