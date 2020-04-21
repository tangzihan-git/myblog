<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cache;
use App\Traits\HotArticleHelper;
use App\Traits\CacheArticleHelper;
use App\Traits\CountFilesArticleHelper;
use App\Traits\CountArticleVisitHelper;
use Illuminate\Database\Eloquent\Builder;
class Article extends Model
{
    use HotArticleHelper;
    use CacheArticleHelper;
    use CountFilesArticleHelper;
    use CountArticleVisitHelper;
    protected $fillable = ['title','cate_id','body','desc','key','img','allow_com','reco'];
    public $reco_cache_key = 'article_reco';
    public $new_cache_key = 'article_new';
    public $new_comment_cache_key='comment_new';
    protected $cache_expire_in_seconds = 86400;//缓存一天
    public $hash = 'file_count';//归档文章哈希表
    // protected $with = ['user','cate'];

    

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
    //取出该文章的栏目
    public function cate()
    {
        return $this->belongsTo('App\Cate');
    }
    //取出该文章的评论
    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
    
   



}
