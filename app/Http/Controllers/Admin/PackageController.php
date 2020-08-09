<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PackageRequest;
use App\Models\Module;
use App\Models\Package;
use App\Services\ModuleService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{
    /**
     */
    public function index(Request $request)
    {
        return view('package.index', ['packages' => Package::all()]);
    }

    public function create(Request $request, ModuleService $moduleService)
    {

        return view('package.create', ['modules' => $moduleService->allInstall()->values()]);
    }

    public function store(PackageRequest $packageRequest)
    {
        $package = Package::create($packageRequest->input());
        $package->modules()->sync($packageRequest->input('modules'));

        return redirect()->route('admin.package.index')->with('success', '添加成功');
    }

    public function edit(Request $request, Package $package, ModuleService $moduleService)
    {

//        $package->modules()->sync($request->input('modules'));

        return view('package.edit', ['modules' => $moduleService->allInstall()->values(), 'package' => $package]);
    }

    public function update(PackageRequest $packageRequest, Package $package)
    {
        $package->fill($packageRequest->input())->save();
        $package->modules()->sync($packageRequest->input('modules'));

        return redirect()->route('admin.package.index')->with('success', '更新成功');
    }
    public function destroy(Package $package){
        $package->delete();
        return response()->json(['message'=>'删除成功']);

    }

}
