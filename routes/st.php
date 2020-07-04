<?php
use Illuminate\Support\Facades\Route;

Route::get('st',function (){
    return 'this is st';
});

Route::view('start','index');
Route::view('starts','st.index');


Route::get('stbb',function (){
    return view('index');
});

Route::prefix('st')->namespace('St')->group(function (){
    Route::any('kst','Index@Index');
    Route::any('bq','Index@bq');
    Route::any('bj','Index@bj');
    Route::any('zj','Index@zj');
});
