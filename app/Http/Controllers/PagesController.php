<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function student()
    {
        return view('pages.user.student');
    }
// View User Profile
    public function userProfile()
    {
        return view('pages.user.user-profile');
    }

// View User Profile
    public function stats()
    {
        return view('pages.dashboard.stats');
    }

// Academic Overview
    public function academicOverview()
    {
        return view('pages.academic.overview');
    }

    public function classes()
    {
        return view('pages.academic.class');
    }

    public function term()
    {
        return view('pages.academic.term');
    }

    public function promoteStudent()
    {
        return view('pages.academic.promote-student');
    }

    public function allocateTeacher()
    {
        return view('pages.academic.allocate-teacher');
    }
// student
    public function overviewStudent()
    {
        return view('pages.student.overview');
    }
    public function addStudent()
    {
        return view('pages.student.add');
    }

    public function editStudent()
    {
        return view('pages.student.edit');
    }

    public function removeStudent()
    {
        return view('pages.student.remove');
    }
    public function assignStudent()
    {
        return view('pages.student.assign');
    }

    // teacher
    public function overviewTeacher()
    {
        return view('pages.teacher.overview');
    }
    public function addTeacher()
    {
        return view('pages.teacher.add');
    }

    public function editTeacher()
    {
        return view('pages.teacher.edit');
    }

    public function removeTeacher()
    {
        return view('pages.teacher.remove');
    }
    public function assignTeacher()
    {
        return view('pages.teacher.assign');
    }

    // Guardian
    // public function addGuardian()
    public function overviewGuardian()
    {
        return view('pages.guardian.overview');
    }

    public function addGuardian()
    {
        return view('pages.guardian.add');
    }

    public function editGuardian()
    {
        return view('pages.guardian.edit');
    }

    public function removeGuardian()
    {
        return view('pages.guardian.remove');
    }
    public function assignGuardian()
    {
        return view('pages.guardian.assign');
    }
}
