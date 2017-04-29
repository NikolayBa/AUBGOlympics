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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'ChampionsController@index');
Route::post('/submit/fillSemester', 'ChampionsController@fillSemester');
Route::post('/createThumbnails','CreateThumbnails@createThumbnails');
