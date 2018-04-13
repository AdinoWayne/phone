<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\dBrand;
use App\Cart;
use Session;
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
        view()->composer('layout.header',function($view){
            if(Session('cart1')){
                $oldCart = Session::get('cart1');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart1'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
            }
        });
        view()->composer('pages.wishlist',function($view){
            if(Session('cart1')){
                $oldCart = Session::get('cart1');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart1'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
            }
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
