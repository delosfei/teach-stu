<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function entry(){

        $class='Modules\\'.module()['name'].'\Http\Controllers\Front\HomeController';
        return app($class)->index();
    }
}
