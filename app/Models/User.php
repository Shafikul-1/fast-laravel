<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as AuthAuthenticatable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use AuthAuthenticatable;
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    protected $hidden = ['password'];
    protected function password():Attribute
    {
        return Attribute::make(
            set: fn (string $value) => bcrypt($value)
        );
    }
}
