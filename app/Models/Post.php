<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];  
    
    public function tag() {
        return $this->morphToMany(Tag::class, "tagable");
    }
    
    public function video() {
        return $this->hasMany(Video::class);
    }


    // All event link 👉 https://laravel.com/docs/11.x/eloquent#events
    
    protected static function booted()
    {
        static::created(function ($videos){
            
        });
        
        static::updated(function ($videos){
            
        });
        
        static::updating(function ($videos){
            
        });
        
        static::saving(function ($videos){
            
        });
        
        static::saved(function ($videos){
            
        });
        
        static::deleting(function ($videos){
            
        });
        
        static::deleted(function ($videos){
            $videos->video()->delete();
        });
        
        
    }
}
