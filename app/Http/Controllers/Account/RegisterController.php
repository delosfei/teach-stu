<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
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
        dd($request->all());
        $request->validate(
            [
                'code' => ['required'],
                'account' => ['required', 'string'],
                'password' => ['required', 'confirmed'],
                'name' => ['required', 'string'],
            ]
        );
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
