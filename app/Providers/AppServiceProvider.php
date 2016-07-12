<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use Auth;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        view()->share('cat', Category::orderBy('id', 'desc')
                ->get());
        view()->share('Cat', Category::all());
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
