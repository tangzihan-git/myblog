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
use Carbon\Carbon;
Route::get('/', 'IndexController@index');
Route::get('test','ArticleController@test');

Route::resource('articles','ArticleController');
Route::resource('tags','TagController');
Route::resource('cates','CateController');
