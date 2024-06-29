<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function image() {
       return $this->morphMany(Image::class, "imageable");
    }

       // This product Latest Data check
       public function latest() {
        return $this->morphOne(Image::class, "imageable")->latestOfMany();
    }

    // This product Oldest Data check
    public function oldest() {
        return $this->morphOne(Image::class, "imageable")->oldestOfMany();
    }

    // This product Select Column Low data check
    public function low() {
        return $this->morphOne(Image::class, "imageable")->ofMany("rating", "min");
    }

    // This product Select Column High data check
    public function high() {
        return $this->morphOne(Image::class, "imageable")->ofMany("rating", "max");
    }

}
