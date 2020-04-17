<?php

namespace App\Traits;

use Cache;
use DB;
trait CacheArticleHelper
{
 //缓存站长推荐文章
	public function getReco()
	{
		//从缓存中获取数据如果有则取，没有则数据取出来并做缓存
		return Cache::remember($this->reco_cache_key,$this->cache_expire_in_seconds,function(){
			return $this->where('reco',1)->where('status',1)->select('id','title','desc','img')->get();
		});
	}
	//缓存最新发布文章
	public function getNew()
	{
		return Cache::remember($this->new_cache_key,$this->cache_expire_in_seconds,function(){
		return $this->where('status',1)
		->join('cates','cate_id','=','cates.id')
		->join('users','user_id','=','users.id')
		->select('articles.id','img','title','desc','visit_num','articles.created_at','name','cate_name')
		->orderby('articles.created_at','desc')
		->limit(10)
		->get();
	});
	}
	//缓存最新评论

	public function getNewComment()
	{
		return Cache::remember($this->new_comment_cache_key,$this->cache_expire_in_seconds,function(){
		return $this->where('status',1)
		->join('comments','articles.id','=','comments.article_id')
		->select('articles.id','title','content','comments.created_at')
		->where('level',1)
		->orderby('comments.created_at','desc')
		->limit(5)
		->get();
	});
	}
}