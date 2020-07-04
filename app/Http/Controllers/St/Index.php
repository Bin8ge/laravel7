<?php

namespace App\Http\Controllers\St;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Index extends Controller
{
    public function index()
    {
        #1.参数传递 通过view 的第二个参数传递必须是数组=
        //return view('st.index',['name'=>'tom']);

        #2.传递参数的第二中方法是with
       // return view('st.index')->with('name','jack');
        $data['age'] = 1;
        $data['age2'] = 2;
        $data['age3'] = 3;
        return view('st.index')->with('list',$data);
    }

    /**
     * Notes:标签
     * User: bingo
     * Date: 2020/7/3
     * Time: 15:56
     */
    public function bq()
    {
        $data['name'] = 'Tom';
        $data['age']  = 20;
        $data['sex']  = '男';
        return view('st.index')->with('list',$data);
    }

    # 布局

    public function bj()
    {
        return view('bj.index');
    }

    public function zj()
    {
        return view('components.index');
    }
}
