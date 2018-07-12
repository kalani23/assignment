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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/eighteenPlus', 'HomeController@getOlderThanEighteen')->name('eighteenPlus');

Route::get('/classEight', 'HomeController@getClassEight')->name('getClassEight');

Route::get('/all', 'HomeController@getAllStudents')->name('all');

Route::get('/admin-dashboard', 'CRUDController@index')->name('admin-dashboard');

Route::get('/addNewCourse', 'CRUDController@create_course')->name('newcourse');

Route::get('/addNewStudent', 'CRUDController@create_student')->name('addNewStudent');

Route::get('/addNewParent', 'CRUDController@create_parent')->name('addNewParent');

Route::get('/deleteCourse', 'CRUDController@delete_course')->name('delete-course');

Route::get('/allCourses', 'CRUDController@view_courses')->name('allCourses');

Route::get('/allStudents', 'CRUDController@view_students')->name('allStudents');