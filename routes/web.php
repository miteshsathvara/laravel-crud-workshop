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


//first browser url
//controller name and method name
Route::get('sum','sumController@sum');
Route::any('sumvalue1','sumController@sumvalue');



// Student 
Route::get('student_list','studentController@list');
Route::get('create_student','studentController@create');
Route::any('submit_student','studentController@store');
Route::any('student_edit/{id}','studentController@edit');
Route::any('student_update','studentController@update');
Route::any('student_delete/{id}','studentController@delete');




//object access =  $request->name
// array = $request['name'];

