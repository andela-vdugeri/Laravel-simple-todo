<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/tasks', 'TaskController@index');
Route::post('/tasks', 'TaskController@store');
Route::get('/tasks/{id}/delete', 'TaskController@destroy');
Route::get('/tasks/{id}/complete', 'TaskController@update');
Route::get('/tasks/{id}/undo', 'TaskController@undo');
Route::get('/tasks/new', 'TaskController@index');
