<?php

use Illuminate\Http\Request;

Route::post('auth/register', 'AuthController@register');
Route::post('auth/login', 'AuthController@login');
Route::get('android/status/lampu', 'AndroidController@status');
Route::get('users', 'AndroidController@users');
Route::post('simpan/{nama_device}/{status_device}', 'AndroidController@add');
Route::get('status_lampu', 'AndroidController@status_lampu');