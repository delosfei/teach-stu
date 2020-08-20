<?php

namespace Modules\Edu\Http\Controllers\Admin;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Edu\Entities\System;

class SystemController extends Controller
{

    public function index()
    {
       $systems= System::all();
        return view('edu::system.index',compact('systems'));
    }


    public function create(System $system)
    {
        return view('edu::system.create',compact('system'));
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        return view('edu::show');
    }


    public function edit($id)
    {
        return view('edu::edit');
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
