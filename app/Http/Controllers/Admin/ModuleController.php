<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Account\Controller;
use App\Models\Module;
use App\Services\ModuleService;
use Illuminate\Http\Request;

class ModuleController extends Controller
{

    public function index(ModuleService $moduleService)
    {
        $modules=$moduleService->all();
        return view('module.index',compact('modules'));
    }

    public function install($name,ModuleService $moduleService,Module $module){


        $modules=$moduleService->find($name);

        $module->create($modules);
        return back()->with('success','模块安装成功');
    }
    public function uninstall(Module $module)
    {
        $module->delete();
        return response()->json(['message'=>'卸载成功']);
    }


}
