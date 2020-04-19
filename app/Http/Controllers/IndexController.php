<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cate;
use App\Article;
use App\Tag;
use DB;
use Cache;
class IndexController extends Controller
{
    public function index(Article $article){
    	//获取推荐文章
    	$recos = $article->getReco();
    	//获取最新文章
        $newArticles = $article->getNew();
        //获取友情链接
        $friendLinks = $this->friendLinks();
    	//获取网站配置信息
    	return view('index',compact('recos','newArticles','friendLinks'));
    }
    public function friendLinks()
    {
        return Cache::remember('friendlink','86400',function(){
            return DB::table('friend_links')->where('web_status',1)
                                        ->select('web_name','web_link','web_color')
                                        ->orderby('web_order','asc')
                                        ->get();
        });
    }
}
