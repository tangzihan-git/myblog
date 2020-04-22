<?php
namespace App\Http\View\Composers;
use Illuminate\View\View;
use DB;
use Cache;
class AboutComposer
{
    /**
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
       
        $seconds = 86400*361;
        $about = Cache::remember('about', $seconds, function () {
		    return DB::table('articles')->where('id',1)->get();
		});
		$view->with('about',$about);
    }
}