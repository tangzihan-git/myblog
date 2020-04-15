<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cate;
use App\Article;
use App\Tag;
class IndexController extends Controller
{
    public function index(Article $article){
    	//获取栏目
    	
    	//获取推荐栏目
    	$recos = $article->getReco();

    	//获取最新文章
        $newArticles = $article->getNew();

    	//获取网站配置信息
    	return view('index',compact('recos','newArticles'));



    }
}
