<?php

namespace App\Handle;
use \DB;
class CountCommentNum{
	public function countComment(){
		//获取每篇文章评论数
		$num = DB::table('comments')->selectRaw('count(*) as num,article_id')->groupBy('article_id')->get()->toArray();
		foreach ($num as $key => $value) {

			 DB::table('articles')->where('id',$value->article_id)->update(['comment_num'=>$value->num]);
			 // DB::table()
		}
       
	

	}
}