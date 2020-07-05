<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('fw', function () {
   return app('test')->index();
//    return \App\Facades\TestFacade::index();
//    return \App\Facades\TestFacade::hello();
});

Route::get('qy', function (\App\Constracts\Test $test) {
    return $test->hello();
});


