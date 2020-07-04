<?php

namespace App\Http\Controllers\Sjk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Index extends Controller
{
    public function index()
    {
        $sql = 'select * from test';
        $res = DB::select($sql);
        dump($res);
    }

    # 查询构造器
    public function cxgzq()
    {
        #sql 监听
        #1.新增
//        $data['name'] = 'zhangsan';
//        $data['age'] = 18;
//        dump(DB::table('student')->insert($data));

        # 2 查询
//       dump(DB::table('student')->get());  # 获取全部
//       dump(DB::table('student')->find('1')); #根据主键获取数据

        #3.修改
//        dump(DB::table('student')->where('id',1)->update(['name'=>'jack']));

        #4.删除
//        dump(DB::table('student')->where('id',3)->delete());
    }

    #三、查询
    public function cx()
    {
        #1. where 子句
//        dump(DB::table('student')->where('id','=','2')->get());
        #where 数组
//        dump(DB::table('student')->where(['id'=>2])->update(['id'=>4]));
    }



}
