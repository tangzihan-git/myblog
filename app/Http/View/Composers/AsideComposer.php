<?php
namespace App\Http\View\Composers;
use Illuminate\View\View;
use App\Cate;
use DB;
class AsideComposer
{
    /**
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $tags = DB::table('tags')->select('tag_name','id')->get();
        $view->with('tags',$tags);
    }
}