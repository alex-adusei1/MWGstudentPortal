<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    public function getAllStudents() {
      
    }

    protected $fillable = [
        'first_name','last_name','other_name','gender','nationality','dob',
    ];
}
