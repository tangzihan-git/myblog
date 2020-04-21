<?php

namespace App\Traits;
use Cache;
use Illuminate\Support\Facades\Redis;

trait CountFilesArticleHelper
{
   
	
	//从数据库查询出归档的文章
    public function getfilesArticle(){
        $data = [];
        //遍历date数组取除满足条件的数据
        foreach (getFullMonth() as $value) {
            //查询今年的归档数据
            $data[$value] = json_encode($this->selectRaw(' id,title,created_at,DATE_FORMAT(created_at,"%Y-%m") as date')
                         ->whereRaw('DATE_FORMAT(created_at,"%Y-%m")=?',[$value])->get()->toArray());

        }

        return $data;
    }

    //循环数据写入缓存
    public function cachefilesArticle(){
    	   // Redis::flushall();
        foreach ($this->getfilesArticle() as $key => $value){
          $res = Redis::hSet($this->hash,$key,$value);
        }
        return Redis::hGetAll($this->hash);
     

    }

    //获取归档数据如果缓存有则使用缓存的数据，缓存没有查找数据库
    public function getAllfiles()
    {
    	if(empty(Redis::hGetAll($this->hash))){
    		//没有查找从数据库查找数据并写入缓存
    		 return $this->cachefilesArticle();
    	}else{
    		return Redis::hGetAll($this->hash);
    	}
    }
}