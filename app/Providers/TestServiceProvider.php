<?php

namespace App\Providers;

use App\Constracts\Test;
use App\Units\Test\TestC;
use App\Units\Test\Testp;
use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
//        $this->app->singleton('test',function(){
//            return new Testp();
//        });
        $this->app->singleton(Test::class,TestC::class);
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
