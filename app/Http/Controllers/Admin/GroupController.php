<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\GroupRequest;
use App\Models\Group;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Account\Controller;

class GroupController extends Controller
{

    public function index()
    {
        $groups = Group::all();

        return view('group.index', compact('groups'));

    }

    public function create(Group $group)
    {
        $packages = Package::all();

        return view('group.create', compact('packages', 'group'));
    }

    public function store(GroupRequest $groupRequest)
    {
        $group = Group::create($groupRequest->input());
        $group->packages()->sync($groupRequest->packages);

        return redirect()->route('admin.group.index')->with('success', '用户组添加成功');
    }

    public function edit(Group $group)
    {
        $packages = Package::all();

        return view('group.edit', compact('packages', 'group'));
    }

    public function update(Request $request, Group $group)
    {
        $group->fill($request->input())->save();
        $group->packages()->sync($request->packages);

        return redirect()->route('admin.group.index')->with('success', '用户组修改成功');
    }
    public function destroy(Group $group){
        $group->delete();
        return response()->json(['message'=>'删除成功']);
    }
}
