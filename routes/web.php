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

use App\Http\Middleware\Authenticate;

// index page of task resource
Route::resource('/task','TaskController')->middleware(Authenticate::class);

//user index page if logged redirect to task index page, login page otherwise
Route::resource('/', 'UserController')->middleware(Authenticate::class);

//handles post, get, put, delete, http methods
Route::resource('/user', 'UserController');

//handles login post
Route::post('user/login', 'UserController@login')->name('login');
// Route::get('/sign', 'UserController@create')->name('tasks.signin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
