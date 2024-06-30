<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $guarded = [];  
    
    public function tag() {
        return $this->morphToMany(Tag::class, "tagable");
    }


    // If altime other table data get then this method `['']` MULTI TABLE name array from a dite hobe
    // protected $with = ['post'];

    //  Specific Column Data Get ` ->select()` must be primary key likte hobe `id`
    public function post() {
        return $this->hasMany(Post::class, 'id', 'post_id')->select("title", "description", "id");
    }
}
