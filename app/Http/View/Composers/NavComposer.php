<?php
namespace App\Http\View\Composers;
use Illuminate\View\View;
use App\Cate;
use DB;
use Cache;
class NavComposer
{
    /**
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
       
        $seconds = 86400*31;
        $datas = Cache::remember('menus', $seconds, function () {
		    return DB::table('menus')->where('menu_status',1)->orderby('menu_order','asc')->get();
		});
		$view->with('datas',$datas);
    }
}