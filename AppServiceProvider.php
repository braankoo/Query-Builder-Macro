<?php

namespace App\Providers;

use App\Macros\QueryBuilder;
use Illuminate\Database\Query\Builder;

use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Builder::mixin(new QueryBuilder());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {


    }
}
