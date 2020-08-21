<?php

namespace Modules\Edu\Entities;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = "edu_lessons";
    protected $fillable = [
        'title',
        'description',
        'thumb',
        'status',
        'download_address',
        'free_num',
        'site_id',
        'user_id',
    ];
    protected $casts = [
        'status' => 'boolean',
    ];

    public function Videos()
    {
        return $this->hasMany(Video::class);
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'relation', 'edu_tag_relation')->withTimestamps();
    }

    public function scopeSearch($query, $w)
    {
        return $query->where('id', 'like', "%{$w}%")->orWhere('title', 'like', "%{$w}%");

    }

}
