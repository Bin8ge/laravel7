<?php

namespace App\Http\Controllers\Mx;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class Index extends Controller
{
    public function index()
    {
        #1.增 insert 还回真假
//        dump(Student::insert(['name'=>'hello','age'=>1]));
        #2.create 饭回对象
//        dump(Student::create(['name'=>'hi'])->id);
        #3.save '保存' 模型对象
//        $student = new Student();
//        $student->name = 'zhaosi';
//        dump($student->save());

        #二 查
//        dump(Student::all()); #无法使用约束
//        dump(Student::where('id','>',4)->get());
//        dump(Student::find(1)); #获取单个模型对象

        #三 改
//        dump(Student::where('id',5)->update(['name'=>'孙悟空']));

        #save 如果修改，需要先获取到被修改的模型对象
//        $student = Student::find(5);
//        $student->name = 'save5';
//        dump($student->save());

        #四 删除
//        $student = Student::find(5);
//        dump($student->delete());

    }


    #查看软删除
    public function soft()
    {

//        $student = Student::find(5);
//        dump($student);

//        $student = Student::find(5);
//        dump($student->delete());
        #查看软删除
        $students = Student::onlyTrashed()->get();
        dump($students);

        #软删除的回恢复
        Student::onlyTrashed()->restore();
    }

    #关联查询
    public function gl()
    {
//        $teacher = Teacher::find(1);
//        dump($teacher->student);
        $student = Student::find(4);
        dump($student);
    }

    #四  修改器和获取器
    public function hxy()
    {
        # 获取器
//        $teacher = Teacher::find(1);
//        dump($teacher->name);
        # 修改器
//        $teacher = Teacher::find(1);
//        $teacher->name = '西瓜';
//        $teacher->save();

        #预加载
        $teacher = Teacher::with('student')->get();
        foreach ($teacher as $v){
            dump($v->student);
        }
    }

    #观察者
    public function gcz()
    {
//        dump(Student::find(1));

//        Student::insert(['name'=>'red','age'=>11]);
        Student::create(['name'=>'red','age'=>11]);
    }

}
