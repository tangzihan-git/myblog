<?php
namespace App\Http\View\Composers;
use Illuminate\View\View;
use App\Cate;
use DB;
use App\Article;
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
        //获取热门文章
        $tags = DB::table('tags')->select('tag_name','id','tag_color')->get();
        $hots = $this->article->getHotArticle();

        $newcomments = $this->article->getNewComment();//获取最新评论文章
        $view->with(['tags'=>$tags,'hots'=>$hots,'newcomments'=>$newcomments]);

    }
}