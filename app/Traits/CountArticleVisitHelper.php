<?php

namespace App\Traits;
use Cache;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redis;

trait CountArticleVisitHelper
{
	//用户访问记录到缓存
	protected $hash_prefix = 'article_visit_';
    protected $field_prefix = 'article_';

    public function recordVisit($id)
    {
    	// 获取今天的日期
        $date = Carbon::now()->toDateString();
        // Redis 哈希表的命名
        $hash = $this->hash_prefix . $date;
        // 字段名称，如aricle_1
        $field = $this->field_prefix . $id;
        // 点赞次数
        $num = Redis::hGet($hash,$field)+1;//访问自增
        // 数据写入 Redis ，字段已存在会被更新
        Redis::hSet($hash, $field, $num);
    }
    public function syncVisitArticle()
    {
    	//获取昨天的日期
    	$yesterday_date = Carbon::now()->toDateString();
    	//哈希表命名
    	$hash = $this->hash_prefix.$yesterday_date;
    	//取出缓存数据
    	$dates = Redis::hGetAll($hash);
    	//遍历，同步到数据库
    	foreach ($dates as $article_id => $visit) {
    		$article_id = str_replace($this->field_prefix,'',$article_id);
    		//当文章存在时更新到数据库
    		if($article = $this->find($article_id)){
    			$article->visit_num = $visit;
    			$article->save();
   
    		}
    	// Redis::del($hash);
    	}
    }
}