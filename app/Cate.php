<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
     // protected $with = ['article'];
    //获取该栏目下所有文章
    public function article()
    {
    	 return $this->hasMany('App\Article');
    }
}
