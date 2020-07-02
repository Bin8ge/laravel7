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
