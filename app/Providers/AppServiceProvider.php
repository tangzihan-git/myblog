<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\NavComposer;
use App\Article;
use App\Comment;
use App\Observers\ArticleObserver;
use App\Observers\CommentObserver;
use Cache;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
         if ($this->app->environment() == 'local'){
            $this->app->register('Barryvdh\Debugbar\ServiceProvider');
       }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $banner = Cache::get('banner')? : \DB::table('webset')->pluck('web_banner');
        View::share('banner', $banner);
        //注册观察者
        Article::observe(ArticleObserver::class);
        Comment::observe(CommentObserver::class);
          
        
    }
}
