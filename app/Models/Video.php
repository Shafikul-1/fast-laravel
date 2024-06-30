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

    public function post() {
        return $this->hasMany(Post::class, 'id', 'post_id');
    }
}
