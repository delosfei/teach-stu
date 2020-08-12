<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Account\Controller;
use App\Http\Requests\SiteRequest;
use App\Models\Site;
use http\Env\Response;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index()
    {
        $sites=Site::all();
        return view('site.index',compact('sites'));
    }


    public function create(Site $site)
    {
        return view('site.create',compact('site'));
    }


    public function store(SiteRequest $siteRequest,Site $site)
    {
        $site->fill($siteRequest->input());
        $site->user_id = auth()->id();
        $site->config = [];
        $site->save();
        return redirect()->route('admin')->with('success', '添加成功');
    }
    public function edit(Site $site)
    {

        return view('site.edit',compact('site'));
    }


    public function update(SiteRequest $siteRequest, Site $site)
    {
        $site->fill($siteRequest->input())->save();

        return redirect()->route('admin')->with('success', '修改成功');
    }


    public function destroy(Site $site)
    {
        $site->delete();
        return response()->json(['message'=>'站点删除成功']);
    }
}
