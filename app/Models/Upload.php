<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Number;

class Upload extends Model
{
    use HasFactory;
    protected $guarded =[];

    // public function getNameAttribute($value) {
    //    return strtolower($value);
    // }

    // public function getEmailAttribute($value) {
    //    return strtoupper($value);
    // }


    // public function setNameAttribute($value){
    //   $this->attributes['name'] = strtolower($value);
    // }

    // public function setEmailAttribute($value){
    //   $this->attributes['email'] = strtolower($value);
    // }

    protected function Name():Attribute {
      return Attribute::make(
        get: fn (string $value) => ucfirst($value),
        set: fn(string $value) => strtolower($value)
      );
    }

    
}

