<?php

namespace Modules\Edu\Entities;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table='edu_videos';
    protected $fillable = ['title','path','lesson_id','rank','site_id'];
    public function lesson(){
        return $this->belongsTo(Lesson::class);
    }
}
