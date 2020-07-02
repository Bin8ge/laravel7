<?php


use Illuminate\Support\Facades\Route;

Route::get('world', function () {
    echo 'beijing';
});

#CSRF
#1. 白名单  添加路由标识 \app\Http\Middleware\VerifyCsrfToken.php
#2. 注释掉中间件        \app\Http\Kernel.php
Route::post('lyp', function () {
    echo 'this is post';
});

#能够访问第一个参数 所提供的方法
Route::match(['get', 'post'], 'lym', function () {
    echo 'this is match';
});

#几乎所有方法都能访问  也需要白名单，除了get方式，其他方法都要白名单
Route::any('lya', function () {
    echo 'this is any';
});


/**
 * 二、路由参数
 */

Route::get('lym/{name}', function ($name) {
    echo 'this is name ' .$name;
});

Route::get('lymd/{name}/{age}', function ($name,$age) {
    echo 'this is name' .$name.' age is '.$age;
});

#  可选参数{名称？}
Route::get('lyk/{name?}', function ($name='lisi') {
    echo 'this is name ' .$name;
});


/**
 * 三、路由组
 */


#路由组
Route::prefix('admin')->group(function(){
    Route::get('admin1', function () {
        echo 'admin1 ';
    });
    Route::get('admin2', function () {
        echo 'admin2 ';
    });
    Route::get('admin3', function () {
        echo 'admin3 ';
    });
});

# 路由名前缀: 建议加上一个符号分割
//Route::name('admin.')->group(function(){
//    Route::get('lyzqz1',function(){
//        return '路由名1';
//    })->name('lym1');;
//    Route::get('lyzqz2',function(){
//        return 'hello2';
//    })->name('lym2');;
//    Route::get('lyzqz3',function(){
//        return 'hello3';
//    })->name('lym3');;
//});
//
//Route::get('lyr',function(){
//    return redirect()->route('admin.lym1');
//});

//Route::domain('blog.com')->group(function(){
//    Route::get('lyym',function(){
//        return '检测路由域名';
//    });
//});

//# 链式调用
//Route::prefix('larave')->name('admin')->group(function(){
//    Route::get('lyym',function(){
//        return '检测路由域名';
//    });
//});
//
//Route::group(['prefix'=>'admin','domain'=>'blog.com'],function(){
//    Route::get('lyhh',function(){
//        return '数组方式';
//    });
//});

/*
 * 1.创建中间件: php artisan make:middleware 中间件名称
 * 2.编写中间件: 要写到 return $next($request); 之前
 * 3.注册中间件  blog\app\Http\Kernel.php 的$routeMiddleware中注册对应的中间件
 * 4.使用中间件: 中间件别名(test)
 */
# 创建中间件 php artisan make:middleware
Route::middleware('test')->group(function(){
    Route::get('lyzjj',function(){
        return '检测路由中间件';
    });
});

