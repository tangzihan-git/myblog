<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cache;
class Article extends Model
{
    protected $fillable = ['title','cate_id','body','desc','key','img','allow_com','reco'];
    public $reco_cache_key = 'article_reco';
    public $new_cache_key = 'article_new';
    protected $cache_expire_in_seconds = 1440 * 60;//缓存一天

    //取出该文章的作者
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    //取出该文章的标签
    public function tag()
    {
        return $this->belongsToMany('App\Tag','tag_article');
    }
    
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


}
