<?php

namespace App\Http\Middleware;

use App\Models\Config;
use Closure;

class SystemMiddleware
{

    public function handle($request, Closure $next)
    {
        config(['admin' => Config::first()->config]);
        return $next($request);
    }
}
