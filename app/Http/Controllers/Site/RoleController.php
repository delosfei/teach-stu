<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Http\Requests\SiteRequest;
use App\Models\Site;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Site::class, 'site');			//<===authorizeResource所有资源方法都验证
    }

    public function index(Site $site)
    {
        return view('role.index', compact('site'));
    }


    public function create(Site $site, Role $role)
    {
        return view('role.create', compact('site', 'role'));
    }


    public function store(RoleRequest $request, Site $site, Role $role)
    {
        $role->fill($request->only(['title', 'name']));
        $role->site_id = $site['id'];
        $role->save();

        return redirect()->route('site.role.index', $site)->with('success', '角色添加成功');

    }


    public function edit(Site $site, Role $role)
    {
        return view('role.edit', compact('site', 'role'));
    }


    public function update(Request $request, Site $site, Role $role)
    {
        $role->fill($request->only(['title', 'name']))->save();

        return redirect()->route('site.role.index', $site)->with('success', '角色编辑成功');

    }


    public function destroy(Site $site, Role $role)
    {
        $role->delete();

        return response()->json(['message' => '删除成功']);
    }
}
