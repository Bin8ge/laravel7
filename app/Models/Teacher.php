<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
//    use SoftDeletes;

   public $timestamps=false;
    # 一对一  只能找到一个
    public function student()
    {
        #一对一
//        return $this->hasOne(Student::class,'t_id','id');

        #一对多
          return $this->hasMany(Student::class,'t_id','id');

          #多对多
//        return $this->belongsToMany('','','','');
    }

    #获取器 在获取对应字段的数据的时候自动触发
    public function getNameAttribute($value)
    {
        dump($value);
    }


    #  修改器  对于特定的字段 进行修改或者添加使用
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value.'1';
    }


}
