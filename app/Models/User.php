<?php

namespace App\Models;

use App\Models\Company;
use App\Models\PhoneNumber;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;

    
    public function company (){
        return $this->hasOne(Company::class);
    }

    public function phoneNumber(){
        return $this->hasOneThrough(PhoneNumber::class, Company::class);
    }

}
