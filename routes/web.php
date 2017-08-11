<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/user', 'PagesController@student');

Route::get('/user-profile', 'PagesController@userProfile')->name('user-profile');
Route::get('/stats', 'PagesController@stats')->name('stats');
Route::get('/academic/overview', 'PagesController@academicOverview')->name('academic-overview');
Route::get('/academic/class', 'PagesController@class')->name('class');
Route::get('/academic/term', 'PagesController@term')->name('term');
Route::get('/academic/promote-student', 'PagesController@promoteStudent')->name('promote-student');
Route::get('/academic/allocate-teacher', 'PagesController@allocateTeacher')->name('allocate-teacher');
