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

Auth::routes();

Route::get('/', 'HomeController@index')->name('/');
Route::resource('diet', 'Diet\DietController')->middleware('auth');
Route::resource('user', 'User\UserController')->only('index', 'show', 'edit')->middleware('auth');
Route::resource('day', 'Day\DayController')->only('show', 'edit', 'delete')->middleware('auth');