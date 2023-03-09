<?php

namespace App\Providers;


use App\Helper\Cart;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFour();
        view()->composer('*', function($view){
            $cart = new Cart();
            $view ->with([
                'category' => Category::where('status',1)->get(),
            
            ],compact('cart'));

        });
    }
}
