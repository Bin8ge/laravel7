<?php

namespace App\Http\Controllers\Another;

use App\Http\Controllers\Controller;
use App\Http\Requests\Test;
use Illuminate\Http\Request;

class Index extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->method() === 'POST')
        {
            $request->validate([
                'name' => 'required',
                'password' => 'required',
            ]);
            echo '通过字段验证';
        } else {
            return view('bd.index');
        }

    }

    public function two(Test $test)
    {
        if ($test->method() === 'POST')
        {
            $test->validate();
            echo '通过字段验证';
        } else {
            return view('bd.index');
        }
    }
}
