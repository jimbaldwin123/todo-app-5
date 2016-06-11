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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('project/{id}', 'ProjectsController@show');
Route::get('/project/{id}', 'ProjectsController@show');

Route::get('/datatables/data2/{id}','ProjectsController@anyProject');

Route::controller('/', 'ProjectsController', [
    'anyData'  => 'datatables.data',
//    'anyProject' => 'datatables.data2',
    'getIndex' => 'datatables',
]);




//Route::controller('/project', 'TasksController', [
//    'anyData'  => 'datatables.data',
//    'getIndex' => 'datatables',
//]);