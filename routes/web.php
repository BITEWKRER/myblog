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


Route::get('/', function () {
    return view('welcome');
});

// todo controller to control the view

Route::get('/index','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/server','PagesController@server');

Route::resource('posts','PostsController');


