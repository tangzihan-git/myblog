<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * 注册任何应用服务
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * 引导任何应用程序服务
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            'layouts._header', 'App\Http\View\Composers\NavComposer'
        );
    }
}