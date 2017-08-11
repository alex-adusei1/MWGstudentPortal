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

    public function class()
    {
        return view('pages.academic.class');
    }

    public function term()
    {
        return view('pages.academic.term');
    }

    public function promoteStudent()
    {
        return view('pages.academic.promote');
    }

    public function allocateTeacher()
    {
        return view('pages.academic.allocate-teacher');
    }
}
