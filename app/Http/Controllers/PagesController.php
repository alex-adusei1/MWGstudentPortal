<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function student()
    {
        return view('pages.user.student');
    }
}
