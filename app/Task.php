<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //自己构造数据查询方法
//    public function archive(){
////        return false;
//    }
    //允许数据massive 填充的方式一
//    protected $fillable =['user_id','title','intro','content'];
    //允许数据massive 填充的方式二
    protected $guarded = [];
}
