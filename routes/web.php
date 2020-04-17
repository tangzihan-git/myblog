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
Route::get('files','ArticleController@files');
Route::get('test','CommentController@getProvince');
Route::get('article/zan','ArticleController@zan');
Route::resource('articles','ArticleController');
Route::resource('tags','TagController');
Route::resource('cates','CateController');

//评论

Route::get('comments','CommentController@store')->middleware('throttle:5,1');//评论限制一分钟最多发布5条
//留言
Route::match(['get', 'post'],'message','CommentController@messages');
//普通用户登录
// Route::get()


