<?php
namespace App\Http\View\Composers;
use Illuminate\View\View;
use App\Cate;
use DB;
class NavComposer
{
    /**
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $datas = Cate::where('cate_status',1)->orderby('cate_order','asc')->get();
        $view->with('datas',$datas);
    }
}