<?php

namespace Modules\Edu\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Parsedown;

class Topic extends Model
{
    protected $table = 'edu_topic';
    protected $fillable = ['title', 'content'];

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'relation', 'edu_tag_relation');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function getHtmlAttribute(){
        $Parsedown = new Parsedown();
        return clean($Parsedown->text($this->content));
    }
    public function scopeSearch($query,$w=null)
    {
        if($w){
            return $query->where('title','like',"%{w}%");
        }
        return $query;
    }
}
