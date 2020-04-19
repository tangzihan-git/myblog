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
Route::post('articles/desmany','ArticleController@desmany')->name('articles.desmany');
Route::post('articles/upimg','ArticleController@upimg')->name('articles.upimg');
Route::resource('articles','ArticleController');
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



//后台主页
Route::get('zyadmin',function(){
	return view('admin.index');
});
//banner路由
Route::match(['get','post'],'zyadmin/webset','AdminController@webset');
//友情链接
Route::match(['get','post'],'zyadmin/friendlink','AdminController@friend');
Route::post('zyadmin/link','AdminController@handle')->name('link.handle');