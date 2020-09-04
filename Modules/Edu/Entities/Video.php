<?php

namespace Modules\Edu\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Edu\Entities\Traits\Comment;

class Video extends Model
{
    use Comment;
    protected $table = 'edu_videos';
    protected $fillable = ['title', 'path', 'lesson_id', 'rank', 'site_id'];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

}
