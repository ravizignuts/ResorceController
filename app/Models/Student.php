<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable =['student_id','fname','gender','dob','sem','course'];
    protected $primaryKey = 'student_id';
    protected $keyType = 'string';
}
