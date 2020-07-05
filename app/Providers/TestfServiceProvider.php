<?php

namespace App\Providers;

use App\Units\Test\TestF;
use Illuminate\Support\ServiceProvider;

class TestfServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('TestF',TestF::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
