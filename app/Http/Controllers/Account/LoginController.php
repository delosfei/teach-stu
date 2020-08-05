<?php

namespace App\Http\Controllers\Account;

use App\Rules\AccountRule;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('account.login');
    }


    public function create()
    {

    }


    public function store(Request $request, UserService $userService)
    {
        $request->validate(
            [
                //'account' => ['required', new AccountRule()],
                // 'password' => ['required', 'min:3'],
                // 'captcha'=>['required','captcha']
            ]
        );
        $isLogin = Auth::attempt(
            [$this->username() => $request->account, 'password' => $request->password],
            (bool)$request->remember
        );
        if ($isLogin) {

            return redirect()->intended('/');
        }

        return back()->with('danger', '账号或密码不正确');

    }


}
