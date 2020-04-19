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
        $datas = DB::table('menus')->where('menu_status',1)->orderby('menu_order','asc')->get();
        $view->with('datas',$datas);
    }
}