<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeviceUpdateRequest;
use Barryvdh\Debugbar\Middleware\Debugbar;
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
//        $devices = Device::paginate();
        $authuser = \Auth::user()->getAttributeValue('name'); //获取当前登录的用户名
        if ($authuser == '李旭'){
            $devices = Device::paginate();
        }
        else{
            $devices = Device::where('device_owner','=',$authuser)->paginate();
        }
        $all = Device::all()->count();
        return view('devices.deviceSys',compact('devices','all'));//返回设备管理首页
//        return $devices;
    }

//    跳转到设备添加页面
    public function add(){
//        return '欢迎添加设备记录';
        return view('devices.add');
    }
    public function store(DeviceUpdateRequest $request){
//        $this->validate($request,[
//            'device_id'=>'required:unique',
//            'device_name' => 'required:unique',
//        ]);
        Device::create(\request()->all());
//        dd(\request()->all());
        return redirect('/devices');

    }

//    全文检索
    public function search(Request $request){
//        dd($request->all());
        $all = Device::search(\request('search'))->get()->count(); //测试能否正确找到结果
        $devices = Device::search(\request('search'))->paginate();
//        return $devices;
        return view('devices.deviceSys',compact('devices','all'));
    }
}


