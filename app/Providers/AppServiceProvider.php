<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\dBrand;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layout.header',function($view){
            $menu = dBrand::all();
            $view->with('menu',$menu);
        });
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
