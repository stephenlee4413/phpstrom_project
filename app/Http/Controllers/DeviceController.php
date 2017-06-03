<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device;


class DeviceController extends Controller
{
    //    需要登录才能访问
    public function __construct()
    {
        $this->middleware('check');
    }
    //取出设备资产全部数据
    public function index(){
        $devices = Device::paginate(10);
        $all = Device::all()->count();
        return view('devices.deviceSys',compact('devices','all'));//返回设备管理首页
//        return $devices;
    }

//    跳转到设备添加页面
    public function add(){
//        return '欢迎添加设备记录';
        return view('devices.add');
    }

    public function store(){
        Device::create(\request()->all());
//        dd(\request()->all());
        return redirect('/devices');

    }
}
