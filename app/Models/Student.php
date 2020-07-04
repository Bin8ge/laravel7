<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    # fillable 可以注入字段
    protected $fillable = [
        'name'
    ];

    protected $guarded = [
        #写进去的字段不被注入
    ];

    public function teacher()
    {
        # 反向关联
        return $this->belongsTo(Teacher::class,'t_id','id');
    }

}
