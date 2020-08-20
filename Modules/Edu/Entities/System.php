<?php

namespace Modules\Edu\Entities;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    protected $table='edu_system';

    protected $fillable = ['title','preview','description'];
}
