<?php

namespace App\Http\Controllers\Account;

use App\Rules\VerificationCodeRule;
use App\Services\CodeService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Auth;
use function Composer\Autoload\includeFile;

class RegisterController extends Controller
{

    public function index()
    {
        return view('account.register');
    }


    public function create()
    {

    }


    public function store(Request $request, User $user)
    {

        $request->validate(
            [
                'code' => ['required', new VerificationCodeRule($request->account)],
                'account' => ['required', $this->validateAccountField(), Rule::unique('users', $this->username())],
                'password' => ['required', 'confirmed'],
            ],
            ['code.required' => '验证码不能为空！']
        );
        $user->name = $request->name;
        $user->password = $request->password;
        $user[$this->username()] = $request->account;
        $user->save();
        Auth::login($user);

        return response()->json(['message' => '注册登录成功']);
    }

    public function code(Request $request, CodeService $codeService)
    {
        $request->validate(
            [
                'account' => ['required', $this->validateAccountField(), Rule::unique('users', $this->username())],
                'captcha' => ['required', 'captcha'],

            ]
        );

        $codeService->send($request->account);

        return response()->json(['message' => '验证码发送成功']);
    }
}
