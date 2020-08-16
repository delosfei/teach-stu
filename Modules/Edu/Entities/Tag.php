<?php

namespace Modules\Edu\Entities;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table='edu_tags';
    protected $fillable = ['title','site_id'];
}
