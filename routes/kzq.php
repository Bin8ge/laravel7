<?php

use Illuminate\Support\Facades\Route;

Route::get('kzq', function () {
    echo 'kzq';
});


Route::get('index', 'Index@index');
//Route::get('kzqi', 'Kzq\Index@index');


Route::namespace('Kzq')->group(function (){
    Route::get('kzqi', 'Index@index');
    Route::get('kzqh', 'Hello@index');
    Route::get('kzqw', 'World@index');
    Route::get('kzqs/{name?}', 'Index@sayHello')->name('say');

    #单行为控制器
    Route::get('kzqd', 'One');
    #资源控制器
    Route::get('kzqz', 'Res@index');
    Route::resource('kzqrr', 'Res');

});

Route::get('cdx',function (){
    return redirect()->route('say','jack');
});

# 控制器中间件
Route::namespace('Kzq')->group(function (){
    //Route::any('kzqzjj', 'Index@zjj')->middleware('test');
    Route::any('kzqzjj', 'Index@zjj');
});

/**
 * 请求
 */

Route::namespace('Kzq')->group(function (){
    Route::any('qq', 'Index@req');
    Route::any('qqg', 'Index@getMessage');
});


/**
 * 响应
 */
Route::any('res', function (){
    //return '我是响应吗？';
    //return [1,2,3]
    return response()->json([1,2,3]); #这种方式一定不能传递参数

    #重定向也是响应
    //return redirect()->route();
    return redirect()->action('Kzq\Index@res'); #需要给当前方法注册路由
    return redirect()->away('https://www.baidu.com');#重定向外部域名
});
Route::any('resi', 'Kzq\Index@res');


/**
 * 上传下载
 */
Route::namespace('Kzq')->group(function (){
    Route::any('sc', 'Index@sc');
    Route::any('xz', 'Index@xz');
});
