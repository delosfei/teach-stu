<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Account\Controller;
use Illuminate\Http\Request;
use Auth;


class MyController extends Controller
{


    public function edit()
    {
        return view('my.edit');
    }


    public function update(Request $request)
    {
        $user = Auth::user();
        $user->fill($request->except('password'));
        if ($password = $request->password) {
            $user->password = $password;
        }
        $user->save();

        return back()->with('success', '资料修改成功');
    }


}
