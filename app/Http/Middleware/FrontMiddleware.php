<?php

namespace App\Http\Middleware;

use App\Models\Site;
use Closure;

class FrontMiddleware
{

    public function handle($request, Closure $next)
    {
        $this->init();

        return $next($request);
    }

    protected function init()
    {

        $info = parse_url(request()->url());
        $site = Site::where('domain', 'regexp', 'https?://'.$info['host'])->firstOrFail();
        site($site);
        module($site->module->name);

    }
}
