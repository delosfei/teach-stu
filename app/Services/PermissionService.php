<?php

namespace App\Services;

use Spatie\Permission\Models\Permission;

class PermissionService
{
    public function saveSitePermission($site)
    {
        $modules = app(ModuleService::class)->getSiteModules($site);

        $modules->map(function ($module) use ($site) {
            collect($module['menus'])->map(function ($menu) use ($site, $module) {

                foreach ($menu['items'] as $item) {
                    $name = permission_name($item['permission'], $site, $module);
                    Permission::updateOrCreate([
                        'name' => $name,
                    ], ['site_id' => $site['id']]);
                }
            });
        });
    }



}
