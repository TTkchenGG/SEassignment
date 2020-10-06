<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/schedule', function () {
    return view('schedule.view');
});


Auth::routes();

Route::get('/medicineInfo/create', 'MedicinesController@create');

Route::get('/medicineInfo', 'MedicinesController@index');

Route::post('/medicineInfo', 'MedicinesController@store');

Route::get('/info', 'PostsController@index');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');

Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

Route::get('/{user}/schedule', 'SchedulesController@index');

Route::get('/{user}/editschedule', 'SchedulesController@edit');

Route::patch('/{user}/schedule', 'SchedulesController@update');

Route::get('/p/create', 'PostsController@create');

Route::post('/p', 'PostsController@store');

Route::get('/p/{post}', 'PostsController@show');


