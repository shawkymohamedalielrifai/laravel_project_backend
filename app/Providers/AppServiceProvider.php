<?php

namespace App\Providers;

use Illuminate\Database\Schema\SchemaState;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\facades\Schema;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Schema::defaultStringlength(191);
        
    }
}
