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

    public function allInstall()
    {
        return $this->all()->filter(
            function ($module) {
                return $module['installed'];
            }
        );
    }

    public function find(string $name)
    {
        $module = \Module::find($name);
        $config = include $module->getPath().'/Config/config.php';
        $model = Module::where('name', $name)->first();

        return $config + [
                'preview' => '/modules/'.$name.'/static/preview.jpg',
                'id' => $model['id'] ?? 0,
                'installed' => (bool)$model,
                'module' => $module,
            ];
    }
}

