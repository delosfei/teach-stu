<?php

namespace Modules\Edu\Entities;

use App\Models\Traits\Site;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use Site;
    protected $table='edu_tags';
    protected $fillable = ['title','site_id'];
}
