<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->register(RouteServiceProvider::class);
    }


    public function boot(): void
    {
        //
    }
}
