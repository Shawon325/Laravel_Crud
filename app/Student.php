<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table    = 'student_info';
    protected $fillable = ['student_name' , 'department' , 'student_roll' , 'father_name' , 'mother_name' ,'mobile_number'];
}
