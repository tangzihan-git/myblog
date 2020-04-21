<?php

namespace App\Observers;

use App\Article;
use Cache;
class ArticleObserver
{
    /**
     * Handle the Article "created" event.
     *
     * @param  \App\Article  $Article
     * @return void
     */
    public function saving(Article $article)
    {
       
        //生成摘要
        if(!$article->desc){
            $article->desc = make_excerpt($article->body);
        }
    }
    //保存时清空缓存
    public function saved(Article $article)
    {
        Cache::forget($article->reco_cache_key);//推荐缓存
        Cache::forget($article->new_cache_key);//最新发布缓存



    }
    

    /**
     * Handle the Article "updated" event.
     *
     * @param  \App\Article  $Article
     * @return void
     */
    public function updated(Article $article)
    {
        //
    }

    /**
     * Handle the Article "deleted" event.
     *
     * @param  \App\Article  $Article
     * @return void
     */
    public function deleted(Article $article)
    {
        //
    }

    /**
     * Handle the Article "restored" event.
     *
     * @param  \App\Article  $Article
     * @return void
     */
    public function restored(Article $article)
    {
        //
    }

    /**
     * Handle the Article "force deleted" event.
     *
     * @param  \App\Article  $Article
     * @return void
     */
    public function forceDeleted(Article $article)
    {
        //
    }
}
