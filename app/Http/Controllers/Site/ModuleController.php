<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Site;
use Illuminate\Http\Request;

class ModuleController extends Controller
{


    public function index(Site $site)
    {
        return view('site_module.index', compact('site'));
    }

    public function entry(Site $site, Module $module)
    {
        site($site);
        module($module);

        return redirect($module['name'].'/admin');
    }


}
