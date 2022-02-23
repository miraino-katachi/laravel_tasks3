<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;    // 追記
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
        // ページャーでBootstrapを使う
        Paginator::useBootstrap();
    }
}
