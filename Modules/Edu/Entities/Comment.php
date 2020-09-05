<?php

namespace Modules\Edu\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'edu_comment';
    protected $fillable = ['content', 'reply_user_id', 'favour_count', 'site_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
