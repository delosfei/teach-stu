<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];


    public function boot()
    {
        $this->registerPolicies();
        //这种方式批量注册
        Gate::guessPolicyNamesUsing(function ($modelClass) {
            return str_replace(['Models','Entities'], 'Policies', $modelClass) . 'Policy';
        });
    }
}
