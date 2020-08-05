<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller as BaseController;

class Controller extends BaseController
{
    protected function username()
    {
        return filter_var(request()->account, FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile';
    }

    protected function validateAccountField()
    {
        return filter_var(request()->account, FILTER_VALIDATE_EMAIL) ? 'email' : 'regex:/^1\d{10}$/';
    }
}
