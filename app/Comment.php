<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //取出评论下的文章
     protected $with = ['article'];
    public function article()
    {
    	return $this->belongsTo('App\Article');
    }
}
