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

Route::get('/task','TaskController@index');
Route::resource('/', 'UserController');
Route::get('/login', 'UserController@index')->name('tasks.login');
Route::get('/sign', 'UserController@create')->name('tasks.signin');
Route::resource('/create', 'UserController');
