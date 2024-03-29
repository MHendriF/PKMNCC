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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('set_device', 'DeviceController@manual');
//Route::get('record_device', 'DeviceController@record');
Route::get('api/{nama_device}/{status_device}', 'DeviceController@simpan');
Route::get('api/status_terbaru', 'DeviceController@status_terbaru');

Route::get('login_android', 'AndroidController@login');
//Route::get('api/android/status/lampu', 'AndroidController@status');
Route::post('api/android/postlogin', 'AndroidController@postLogin');
Route::get('api/android/{nama_device}/{status_device}', 'AndroidController@simpan');