<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['teach_id','fname','lname','pic_path','gender', 'email', 'phone', 'dob', 'oname'];
    
}