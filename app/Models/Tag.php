<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $guarded = [];  

    // TAble Name 'tagables' 
    public function post() {
        return $this->morphedByMany(Post::class, "tagable");
    }

    public function video() {
        return $this->morphedByMany(Video::class, "tagable");
    }

}
