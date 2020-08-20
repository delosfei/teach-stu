<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable=[
        'title','version','name','description','preview'
    ];
    public function package(){
        return $this->belongsToMany(Package::class);
    }
}
