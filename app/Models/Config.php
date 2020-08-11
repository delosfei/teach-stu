<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $casts = [
        'config' => 'array'			//<===设定config为数组，存数据库，取出时，自定转成数组，可以理解config字段类型为数组
    ];
}
