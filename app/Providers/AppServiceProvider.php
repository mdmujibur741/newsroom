<?php

namespace App\Providers;

use App\Models\category;
use App\Models\post;
use App\Models\setting;
use App\Models\tag;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\View;
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
         Paginator::useBootstrap();

         $categorys = category::take(4)->get();
         View::share('categorys',$categorys);

         $tags = tag::all();
         View::share('tags',$tags);

         $settings =setting::all();
         View::share('settings',$settings);

         $allCat = category::all();
         View::share('allCat',$allCat);

         $trading = post::inRandomOrder()->take(5)->get();
         View::share('trading',$trading);

    }
}
