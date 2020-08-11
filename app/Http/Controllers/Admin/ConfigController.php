<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Account\Controller;
use App\Models\Config;
use App\Services\UploadService;
use Illuminate\Http\Request;

class ConfigController extends Controller
{

    public function edit()
    {
        return view('config.edit');
    }

    public function update(Request $request)
    {
        $config = Config::first();
        $config['config'] = $request->input();
        $config->save();
        return back()->with('success', '系统配置修改成功');
    }

    public function upload(Request $request, UploadService $uploadService)
    {
        return $uploadService->upload($request->file);
    } //此处的return折腾了两天，图片不显示
}
