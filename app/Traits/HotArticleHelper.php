<?php

namespace App\Traits;

use App\Article;
use Carbon\Carbon;
use Cache;
use DB;
use Arr;

trait HotArticleHelper
{

	//配置信息
	protected $visit_weight = 3;//浏览权重
	protected $reply_weight= 2;//评论权重
	protected $zan_weight = 1;//点赞权重
	protected $pass_day =7;//最近几天数据
	protected $article_number = 5;//取出的热门文章数

	//缓存设置
	protected $cache_key = 'article_key';//缓存键
	protected $cache_expire_in_seconds = 86400;//一天过期

	public function getHotArticle()
	{
		//获取缓存热门文章，如果没有则调用函数从数据库取，同时缓存
		return Cache::remember($this->cache_key, $this->cache_expire_in_seconds, function(){
            return $this->calHotArticle();
        });
    
	}
	//获取热门文章并缓存
	public function calAndCacheHotArticles()
	{
		$hot_articles = $this->calHotArticle();
		$this->cacheHotArticles($hot_articles);
	}

	//获取热门文章id
	private function getHotArticleId()
	{
		// //1.取得最近pass_day发布的文章
		$allarticles=Article::select('id','created_at','visit_num','zan','comment_num')->where('created_at','>=',Carbon::now()->subDays($this->pass_day))->where('status',1)->get();
		//2.计算权重
		foreach($allarticles as $allarticle){
			$allarticle['score'] = ($allarticle->visit_num*$this->visit_weight)
							+($allarticle->zan*$this->zan_weight)
							+($allarticle->comment_num*$this->reply_weight);
			$articles[$allarticle['id']]=$allarticle['score'];//将结果添加到数组
		}
		//3.根据权重对数组排序
 			arsort($articles);
		//4.返回前article_number的文章id 并将关联数组转为为索引数组方便查询
 		return array_keys(array_slice($articles,0,$this->article_number,true));
	}

	//获取热门文章
	private function calHotArticle()
	{
		return  Article::whereIn('id', $this->getHotArticleId())->orderby('visit_num','desc')->get();
		 
		
	}
	//缓存热门文章
	private function cacheHotArticles($hot_articles)
	{
		
		Cache::put($this->cache_key, $hot_articles, $this->cache_expire_in_seconds);
	}
}