<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $casts = [
        'config' => 'array'
    ];
}
