<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Site;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function setting()
    {
        return view('admin.setting');
    }
}
