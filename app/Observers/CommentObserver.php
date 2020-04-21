<?php

namespace App\Observers;

use App\Comment;
use App\Article;
use Cache;
class CommentObserver
{

    /**
     * Handle the comment "created" event.
     *
     * @param  \App\Comment  $comment
     * @return void
     */
    public function saving(Comment $comment)
    {
        $comment->content = clean($comment->content, 'user_body');//xss过滤
        //限制评论字符
        $comment->content = make_excerpt($comment->content,100);
    }
    //保存清空缓存
     public function saved(Comment $comment)
    { 
        $article = new Article;
        Cache::forget($article->new_comment_cache_key);//最新评论缓存
    }
    
    public function created(Comment $comment)
    {
        //
    }

    /**
     * Handle the comment "updated" event.
     *
     * @param  \App\Comment  $comment
     * @return void
     */
    public function updated(Comment $comment)
    {
        //
    }

    /**
     * Handle the comment "deleted" event.
     *
     * @param  \App\Comment  $comment
     * @return void
     */
    public function deleted(Comment $comment)
    {
        //
    }

    /**
     * Handle the comment "restored" event.
     *
     * @param  \App\Comment  $comment
     * @return void
     */
    public function restored(Comment $comment)
    {
        //
    }

    /**
     * Handle the comment "force deleted" event.
     *
     * @param  \App\Comment  $comment
     * @return void
     */
    public function forceDeleted(Comment $comment)
    {
        //
    }
}
