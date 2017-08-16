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
     if (Auth::check()) {
            return redirect('/dashboard');
        }
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/user', 'PagesController@student');

Route::get('/profile', 'PagesController@Profile')->name('profile');
Route::get('/stats', 'PagesController@stats')->name('stats');

Route::get('/academic/manage', 'PagesController@academicManage')->name('academic-manage');
Route::get('/academic/class', 'PagesController@classes')->name('class');
Route::get('/academic/term', 'PagesController@term')->name('term');
Route::get('/academic/promote-student', 'PagesController@promoteStudent')->name('promote-student');
Route::get('/academic/allocate-teacher', 'PagesController@allocateTeacher')->name('allocate-teacher');


Route::prefix('students')->group(function(){
  Route::get('/manage', 'PagesController@manageStudent');
  Route::get('/assign', 'PagesController@assignStudent');


});

Route::prefix('teachers')->group(function(){
  Route::get('/manage', 'PagesController@manageTeacher');
  Route::get('/assign', 'PagesController@assignTeacher');


});

Route::prefix('guardians')->group(function(){
  Route::get('/manage', 'PagesController@manageGuardian');
  Route::get('/assign', 'PagesController@assignGuardian');


});
