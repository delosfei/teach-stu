<?php
use App\Models\Module;
use App\Models\Site;
use App\Services\ModuleService;

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

function module(Module $module= null)
{
    if (is_null($module)) {
        $module = session('module');
    }
    if ($module instanceof Module) {

        session(['module' => $module]);
    }
    if (!($module instanceof Module)) {
        abort(404, '站点不存在');
    }
    return $module;
}
