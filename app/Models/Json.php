<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Json extends Model
{
    use HasFactory;
    protected $casts = [
        'json_data' => 'json'
    ];
    protected $guarded = [];
}
