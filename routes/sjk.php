<?php
use Illuminate\Support\Facades\Route;

Route::get('sjk',function (){
    return 'this is sjk';
});

Route::namespace('Sjk')->group(function (){
    Route::get('jc','Index@index');
    Route::get('cxgzq','Index@cxgzq');
    Route::get('cx','Index@cx');
});
