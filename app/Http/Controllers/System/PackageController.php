<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Http\Requests\PackageRequest;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends ApiController
{
    /**

     */
    public function index()
    {
        return $this->json(Package::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PackageRequest $request, Package $package)
    {
//        $this->validateForm($request);
        $package->name = $request->name;
        $package->save();

        return $this->success('发表成功',$package->toArray());
    }
//    protected function validateForm($request){
//        $request->validate([
//            'name'=>['required','min:3','max:20']
//        ],['name.min'=>'套餐名称不能小于三位']);
//    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        return $this->json($package);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(PackageRequest $request, Package $package)
    {

        $package->name = $request->name;
        $package->save();

        return $this->success('更新成功',$package->toArray());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return $this->success('删除成功');
    }
}
