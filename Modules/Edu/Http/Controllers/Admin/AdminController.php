<?php

namespace Modules\Edu\Http\Controllers\Admin;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{

    public function index()
    {
        return view('edu::admin.index');
    }


}
