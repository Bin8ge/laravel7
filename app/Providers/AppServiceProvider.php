<?php

namespace App\Providers;

use App\Models\Student;
use App\Observers\StudentObserver;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength('200');
        DB::listen(function ($query){
            dump($query->sql);
        });

        # 注册观察者
        Student::observe(StudentObserver::class);
    }
}
