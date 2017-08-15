<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // public function student()
    // {
    //     $title = "Manage Teacher";
    //     return view('pages.user.student',['title'=> $title]);
    // }
// View User Profile
    public function Profile()
    {
        $title = "User Profile";
        return view('pages.user.profile',['title'=> $title]);
    }


// View User Profile
    public function stats()
    {
        $title = "Statistics";
        return view('pages.dashboard.stats',['title'=> $title]);
    }

// Academic Overview
    public function academicManage()
    {
        $title = "Manage Academics";
        return view('pages.academic.manage',['title'=> $title]);
    }

    public function classes()
    {
        $title = "Manage Classes";
        return view('pages.academic.class',['title'=> $title]);
    }

    public function term()
    { 
        $title = "Manage Terms";
        return view('pages.academic.term',['title'=> $title]);
    }

    public function promoteStudent()
    {
        $title = "Promote students";
        return view('pages.academic.promote-student',['title'=> $title]);
    }

    public function allocateTeacher()
    {
        $title = "Allocate Teachers";
        return view('pages.academic.allocate-teacher',['title'=> $title]);
    }
// student
    public function manageStudent()
    {
        $title = "Manage Students";
        return view('pages.student.manage',['title'=> $title]);
    }
   
    public function assignStudent()
    {
         $title = "Add Student To Class";
        return view('pages.student.assign',['title'=> $title]);
    }

    // teacher
    public function manageTeacher()
    {
        $title = "Manage Teachers";
        return view('pages.teacher.manage',['title'=> $title]);
    }
    
    public function assignTeacher()
    {
         $title = "Assign Teachers To Class";
        return view('pages.teacher.assign',['title'=> $title]);
    }

    // Guardian
    // public function addGuardian()
    public function manageGuardian()
    {
         $title = "Manage Guardians";
        return view('pages.guardian.manage',['title'=> $title]);
    }
    public function assignGuardian()
    {
         $title = "Assign Guardian To Ward";
        return view('pages.guardian.assign',['title'=> $title]);
    }
}
