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
});

Route::get('cdx',function (){
    return redirect()->route('say','jack');
});
