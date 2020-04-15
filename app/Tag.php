<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	 // protected $with = ['article'];
    //取出该标签的所有文章
    public function article()
    {
    	return $this->belongsToMany('App\Article','tag_article');
    }
}
