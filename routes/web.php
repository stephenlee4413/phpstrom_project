<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/show','TaskPushController@index');
Route::get('/about/create','TaskPushController@create');
Route::get('/about/{task}','TaskPushController@show');
Route::get('/about/{task}/edit','TaskPushController@edit');
Route::post('/about','TaskPushController@store');
Route::post('/about/{task}','TaskPushController@update');
Route::resource('/tasks','PushTaskController');

Route::get('/summary','ProduceSummary@index');

//直观的路由方式
//Route::get('/about',function () {
////    $tasks = DB::table('tasks')->latest()->get();
////    return $tasks;
////    Eloquent model get dataset
//    $tasks = App\Task::all();
//    return view('tasks.about',compact('tasks'));
//});

//Route::get('/about/{task}',function ($id) {
//    $user_tasks = DB::table('tasks')->where('user_id','=',$id)->get();
////    $user_tasks = DB::table('tasks')->where('user_id','=',1);
////    dd($user_tasks);
//    return view('tasks.single',compact('user_tasks'));
//});
Auth::routes();

Route::get('/', 'HomeController@index');

/*
|--------------------------------------------------------------------------
| //资产管理系统的路由配置
|--------------------------------------------------------------------------*/
//请求资产管理的首页界面
Route::get('/devices','DeviceController@index');
//添加设备记录
Route::get('/devices/add','DeviceController@add');