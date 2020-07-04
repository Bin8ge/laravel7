<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *数据填充
     * 1.创建填充文件 php artisan make:seeder
     * 2.文件中调用对应的方法
     * 3.StudentSeeder 执行填充文件
     * @return void
     */
    public function run()
    {
        $data['name'] = 'lisi';
        $data['age'] = 20;
        dump(DB::table('student')->insert($data));
    }
}
