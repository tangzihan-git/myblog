<?php

namespace App\Http\Middleware;

use Closure;
use App\Article;
class ArticleVisit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request,Closure $next )
    {
        
        // $article->recordVisit($request->id);
         // $article = new Article();
        $response = $next($request);
         // dump($article->id);
         return $response;

    }
}
