<?php

namespace App\Services;

use App\Models\Module;

class ModuleService
{
    public function all()
    {
        $modules = \Module::toCollection();

        return $modules->map(
            function ($module) {
                return $module = $this->find($module->getname());
            }
        );
    }

    public function find(string $name)
    {
        $module = \Module::find($name);
        $config = include $module->getPath().'/Config/config.php';

        return $config + [
                'installed' => Module::where('name', $name)->exists(),
                'module' => $module,
            ];
    }
}

