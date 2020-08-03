<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
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
                'account' => ['required', new AccountRule()],
                'password' => ['required', 'min:3'],
                // 'captcha'=>['required','captcha']
            ]
        );
        $isLogin = Auth::attempt([$this->username() => $request->account, 'password' => $request->password],(bool) $request->remember);
        if ($isLogin) {

            return redirect()->intended('/');
        }
        return back()->with('error','账号或密码不正确');

    }

    protected function username()
    {
        return filter_var(request()->account, FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile';
    }

    protected function validateAccountField()
    {
        return filter_var(request()->account, FILTER_VALIDATE_EMAIL) ? 'email' : 'regex:/^1\d{10}$/';
    }


}
