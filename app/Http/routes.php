<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::controllers([
    'password' => 'Auth\PasswordController',
]);

Route::model('tasks', 'Task');
Route::model('project', 'Project');

Route::resource('tasks', 'TasksController');
Route::resource('project', 'ProjectsController');

//
//Route::get('/', 'ProjectsController@getIndex');
//Route::get('project/create', 'ProjectsController@create');
//Route::post('project/store', 'ProjectsController@store');
Route::get('/project/{id}', 'ProjectsController@show');
Route::get('/datatables/data2/{id}','ProjectsController@anyProject');


Route::get('datatables/data','ProjectsController@anyData');
Route::get('/','ProjectsController@index');
