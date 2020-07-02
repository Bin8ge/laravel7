<?php

namespace App\Http\Controllers\Kzq;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Index extends Controller
{
    public function index()
    {
        return 'this is Kzq\index';
    }

    public function sayHello($name = 'zhangsan')
    {
        return 'this is name '.$name;
    }
}
