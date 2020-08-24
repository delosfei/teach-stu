<?php

namespace Modules\Edu\Http\Controllers\Front;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{

    public function index()
    {
        return view('edu::index');
    }

}
