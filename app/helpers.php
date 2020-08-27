<?php

use App\Models\Module;
use App\Models\Site;
use App\Services\ModuleService;
use App\User;

function user($name = null)
{
    $user = auth()->user();

    return $name ? $user[$name] : $user;
}

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

function permission_name($permission, $site, $module)
{
    return 's'.$site['id'].'-'.$module['name'].'-'.$permission;
}

function site(Site $site = null)
{
    if (is_null($site)) {
        $site = session('site');
    }
    if ($site instanceof Site) {
        session(['site' => $site]);
    }
    if (!($site instanceof Site)) {
        abort(404, '站点不存在');
    }

    return $site;
}

function module(string $name = null)
{
    if (is_null($name)) {
        $module = session('module');
    }
    if (!is_null($name)) {
        $module = app(ModuleService::class)->find($name);
        unset($module['module']);
        //   dd($module);
        session(['module' => $module]);
    }
    if (empty($module)) {
        abort(404, '站点不存在');
    }

    return $module;
}

function access($permission, $force = true, $site = null, $module = null)
{
    $site = $site ?? site();
    $module = $module ?? module();

    if (user()->isSuperAdmin || site()['user_id'] == user('id')) {
        return true;
    }

    $status = user()->can(permission_name($permission, $site, $module));
    if ($status === false && $force) {
        abort(403, '没有操作权限');
    }

    return $status;
}

function is_admin()
{
    if (Auth::check())
    return user()->isSuperAdmin || site()->user_id == user()->id;
}
