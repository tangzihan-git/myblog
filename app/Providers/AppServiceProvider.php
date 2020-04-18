<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\NavComposer;
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
          
        
    }
}
