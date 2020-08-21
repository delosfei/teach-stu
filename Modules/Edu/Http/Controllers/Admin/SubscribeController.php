<?php

namespace Modules\Edu\Http\Controllers\Admin;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Edu\Entities\Subscribe;
use Modules\Edu\Http\Requests\SubscribeRequest;

class SubscribeController extends Controller
{

    public function index()
    {
        $subscribes = Subscribe::all();

        return view('edu::subscribe.index', compact('subscribes'));
    }


    public function create(Subscribe $subscribe)
    {
        return view('edu::subscribe.create', compact('subscribe'));
    }


    public function store(SubscribeRequest $request, Subscribe $subscribe)
    {
        $subscribe->fill($request->input());
        $subscribe->site_id = site()['id'];
        $subscribe->save();

        return redirect()->route('edu.admin.subscribe.index')->with('success', '套餐添加成功');
    }


    public function show($id)
    {
        return view('edu::show');
    }


    public function edit(Subscribe $subscribe)
    {

        return view('edu::subscribe.edit', compact('subscribe'));
    }


    public function update(Request $request, Subscribe $subscribe)
    {
        $subscribe->fill($request->input())->save();

        return redirect()->route('edu.admin.subscribe.index')->with('success', '套餐添加成功');
    }


    public function destroy(Subscribe $subscribe)
    {
        $subscribe->delete();

        return response()->json(['message' => '删除套餐成功']);
    }
}
