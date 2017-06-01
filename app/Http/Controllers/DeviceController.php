<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device;


class DeviceController extends Controller
{
    //取出设备资产全部数据
    public function index(){
        $devices = Device::paginate(20);
        return view('devices.deviceSys',compact('devices'));//返回设备管理首页
//        return $devices;
    }

//    跳转到设备添加页面
    public function add(){
//        return '欢迎添加设备记录';
        return view('devices.add');
    }
}
