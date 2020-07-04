<?php

namespace App\Http\Controllers\Kzq;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Index extends Controller
{

   /* protected $resquest;

    public function __construct()
    {
        #构造注入
        $this->resquest = new Request();
    }*/
    /*public function index()
    {
        return 'this is Kzq\index';
    }

    public function sayHello($name = 'zhangsan')
    {
        return 'this is name '.$name;
    }

    public function zjj($name = 'jack')
    {
        return $name . 'say zjj';
    }


    public function __construct()
    {
        #调用中间件
        $this->middleware('test');
        #限定zjj 使用
        $this->middleware('test')->only('zjj');
        #除了sayHello 都使用
        $this->middleware('test')->except('sayHello');
    }*/

    #依赖注入
    public function req(Request $request)
    {
        //$request = new Request();
        dump($request);
    }

    public function getMessage(Request $request)
    {
        #获取地址信息
        dump($request->path());
        dump($request->url());
        dump($request->fullUrl());

        #输入获取
        dump($request->all());
        dump($request->all('name'));  #获取到具体值依然是数组
        dump($request->input());
        dump($request->input('name'));
        dump($request->input('name1',213)); #第二个参数可以给默认值

        dump($request->only('name'));
        dump($request->except('name'));

        #方法判断
        dump($request->method());
        dump($request->isMethod('get'));

        #闪存
    }

    public function res()
    {
        return 'this is res';
    }

    public function sc(Request $request)
    {
        $file = $request->file('filename');
        dump($file->path()); #获取地址
        dump($file->IsValid()); # 判断是否是有效数据
        dump($file->store('image'));# 判断是否是有效文件
        dump($file->storeAs('image','test.jpg'));# 判断是否是有效文件
    }

    public function xz()
    {
        $filename = 'app/image/test.jpg';
        return response()->download(storage_path($filename));
    }



}
