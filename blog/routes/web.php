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
Route::get('hello', 'AdminController@sayHello');
Route::get('hello-world', 'AdminController@helloWorld');
//Route::get('student-list', 'AdminController@studentList');
Route::get('staff-list', 'AdminController@showStaffList');
