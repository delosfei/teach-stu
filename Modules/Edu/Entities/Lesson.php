<?php

namespace Modules\Edu\Entities;

use App\Models\Traits\Site;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use Site;
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
    /**
     * @var mixed
     */


    public function videos()
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
    public function scopeSearchTag($query,$tag=null){
        if (is_null($tag)) return $query;
        return $this->whereHas('tags',function (Builder $query) use($tag){
            $query->where('id',$tag);
        });

    }

}
