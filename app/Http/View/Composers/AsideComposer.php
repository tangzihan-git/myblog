<?php
namespace App\Http\View\Composers;
use Illuminate\View\View;
use App\Cate;
use DB;
use App\Article;
use Cache;
class AsideComposer
{
    /**
     * @param  View  $view
     * @return void
     */
    public function __construct(Article $article)
    {
    	$this->article = $article;
    }
    public function compose(View $view)
    {

        //获取标签
       
        $tags = Cache::remember('tags', 86400, function () {
            return DB::table('tags')->select('tag_name','id','tag_color')->get();
        });
        //获取热门文章
        $hots = $this->article->getHotArticle();
        $newcomments = $this->article->getNewComment();//获取最新评论文章
        $view->with(['tags'=>$tags,'hots'=>$hots,'newcomments'=>$newcomments]);

    }
}