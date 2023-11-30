<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;


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
        /* blocking this route globally for
         * security issue :)
         */
        if(request()->is('backup')){
            return abort(404);
        }
        Schema::defaultStringLength(225);

        Paginator::useBootstrap();
    }
}
