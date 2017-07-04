<?php

use Illuminate\Http\Request;

Route::post('auth/register', 'AuthController@register');
Route::post('auth/login', 'AuthController@login');
Route::get('users', 'AndroidController@users');
Route::get('simpan/{nama_device}/{status_device}', 'AndroidController@add');
Route::get('status_lampu', 'AndroidController@status_lampu');
Route::get('tes_lampu', 'AndroidController@tes_lampu');


Route::post('simpan', 'AndroidController@simpan');