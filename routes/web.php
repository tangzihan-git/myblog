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
Route::get('/','IndexController@index');
Route::get('files','ArticleController@files');

Route::get('article/zan','ArticleController@zan')->middleware('throttle:5,1');

Route::post('articles/desmany','ArticleController@desmany')->name('articles.desmany');
Route::post('articles/upimg','ArticleController@upimg')->name('articles.upimg');
Route::post('articles/updated/{article}','ArticleController@updated')->name('articles.updated');
Route::resource('articles','ArticleController')->except(['update']);
Route::post('tag/add','TagController@add')->name('tags.add');
Route::resource('tags','TagController');

Route::post('cates/add','CateController@add')->name('cates.add');
Route::post('cates/updated','CateController@updated')->name('cates.updated');
Route::resource('cates','CateController');

//评论
Route::get('comments','CommentController@store')->middleware('throttle:5,1');//评论限制一分钟最多发布5条
Route::get('comments/index','CommentController@index')->name('comments.index');
Route::match(['get','post'],'comments/handle','CommentController@handle')->name('comments.handle');
//留言
Route::match(['get', 'post'],'message','MessagesController@messages')->middleware('throttle:5,1');
Route::resource('messages','MessagesController');
//标签

//普通用户登录
// Route::get()

//关于我
Route::get('top',function(){return view('about');})->name('about');

//后台主页
Route::get('zyadmin',function(){
	return view('admin.index');
})->middleware('auth');
//banner路由
Route::match(['get','post'],'zyadmin/webset','AdminController@webset');
//友情链接
Route::match(['get','post'],'zyadmin/friendlink','AdminController@friend');
Route::post('zyadmin/link','AdminController@handle')->name('link.handle');
// 用户身份验证相关的路由
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// 用户注册相关路由
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');


