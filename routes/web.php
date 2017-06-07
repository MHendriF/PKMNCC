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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('auth.login');
});

//Route::get('on_off', 'AdminController@manual');
Route::resource('on_off', 'AdminController');
Route::resource('device', 'DeviceController');
Route::post('device/{id}', 'DeviceController@update');
Route::get('set_device', 'DeviceController@setDevice');


Auth::routes();

Route::get('/home', 'HomeController@index');
