<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Table name chnage
    protected $table = 'students_data';

    // Primary Key column name change
    protected $primaryKey = 'student_id';

    // Defult Value set
    protected $attributes = [
        'age' => 43
    ];

    // Create or update column name rename
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

}
