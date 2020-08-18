<?php

namespace Modules\Edu\Entities;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table="edu_lessons";
    protected $fillable = ['title', 'description', 'thumb', 'status', 'download_address', 'free_num'];
    protected $casts = [
        'status' => 'boolean',
    ];
}
