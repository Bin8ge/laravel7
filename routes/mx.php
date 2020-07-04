<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;


Route::namespace('Mx')->group(function (){
    Route::get('mx','Index@index');
    Route::get('soft','Index@soft');
    Route::get('gl','Index@gl');
    Route::get('hxy','Index@hxy');
    Route::get('gcz','Index@gcz');
});


Route::get('co',function (){
    # 设置cookeie
//    return response('添加COOKIE')->cookie('cook-key','value',60);

//    $cookie = \Illuminate\Support\Facades\Cookie::make('name','jack',60);
//    return response('添加COOKIE')->cookie($cookie);

    #获取
//    return request()->cookie('cook-key');
});


Route::get('se',function (){
    #设置 session
//    request()->session()->put('key','value');
//    session(['key'=>'value1']); # 设置必须是数组
    $data=[1,23,3];
    session(['array'=>$data]); # 设置必须是数组
    #获取
    return session('array');

    #删除
//    request()->session()->pull('name'); #删除并返回删除的数据
//    request()->session()->forget('key');

//    request()->session()->flush();
});

Route::any('bdtj','Another\Index@index');
Route::any('two','Another\Index@two');
