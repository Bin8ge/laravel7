<?php

namespace App\Http\Controllers\Kzq;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class One extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        echo '我是单行为控制器';
    }
}
