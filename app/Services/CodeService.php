<?php

namespace App\Services;

use App\Notifications\VerificationCodeNotification;
use App\User;
use Cache;

class CodeService
{

    /*
     *@param string $account 邮箱或手机号
     *
     * */
    public function send($account)
    {
        $this->account = $account;
        $code = mt_rand(1000, 9999);
        call_user_func([$this, $this->action($account)], $account, $code);
        Cache::put($this->key($account), $code, now()->addMinute(20));
    }

    public function check($account, $value)
    {
        return Cache::get($this->key($account)) == $value;
    }

    protected function key($account)
    {
        return md5('verification-code-'.$account);
    }

    protected function action($account)
    {
        if (filter_var($account, FILTER_VALIDATE_EMAIL)) {
            return 'email';
        }
        if (preg_match('/^1\d{10}$/', $account)) {
            return 'mobile';
        }
    }

    public function email($account, $code)
    {
        return app(User::class)->fill(['email' => $account])->notify(new VerificationCodeNotification($code));
    }

    public function mobile($account, $code)
    {

    }
}
