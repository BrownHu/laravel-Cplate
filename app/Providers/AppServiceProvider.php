<?php

namespace App\Providers;
use App\Nav;
use App\Touch;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

//        view()->share('me', 'hubing');
        $navList=Nav::all()->toArray();
        $footerTouch=Touch::first()->toArray();
        view()->share('allList',$navList);
        view()->share('touchList',$footerTouch);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
