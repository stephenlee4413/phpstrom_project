<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskPushController extends Controller
{
    public function index(){
//        $tasks = Task::all();
        $tasks=Task::latest()->paginate(10);
//        return $tasks;
        return view('tasks.about',compact('tasks'));
    }
    public function show($id){
//        $user_tasks = Task::where('user_id','=',$id)->get(); //取得的是每个用户发布的所有任务，任务不唯一。
//        return $user_tasks;
        $user_tasks = Task::where('id',$id)->get(); //取得每个序号等于ID的任务，唯一
        return view('tasks.single',compact('user_tasks'));
    }
    public function create(){
        //
        return view('tasks.create');
    }
    public function store(Request $request){

//         验证request发送过来的请求是否有效
        $this->validate(\request(),[
            'user_id' => 'required',
            'title' => 'required',
            'intro' => 'required',
            'content' => 'required'
        ]);
//       dd(request()->all());
        //create a new post using request data
//        第一种插入构造方式
//        $post = new Task;
//        $post->user_id = \request('user_id');
//        $post->title = \request('title');
//        $post->intro = \request('intro');
//        $post->content = \request('content');

//        第二种插入数据构造方式,直接可以完成数据保存
//        Task::create([
//            'user_id' => \request('user_id'),
//            'title' => \request('title'),
//            'intro' => \request('intro'),
//            'content' => \request('content')
//        ]);

//        第三种更简洁的数据插入构造方式，一次性完成数据插入和保存；
        Task::create(\request()->all());

        //save it to the databse
//        $post->save();
        //and then redirect to the home page.
        return redirect('/');
    }

    public function edit($id) {
        //实现内容编辑
        $task =  Task::where('id',$id)->get();
//        return $task;
        return view('tasks.edit',compact('task'));
    }

    public function update(Request $request, $id){
        //实现任务更新操作
        $task = Task::findOrFail($id);
        $task->update(\request()->all());
//        return $task;
//        $task->update($request->all());
//        $task->title = \request('title');
//        $task->intro = \request('intro');
//        $task->content=\request('content');
//        $task->user_id=\request('user_id');
//        $task->save();


        return redirect('/');
    }

//    需要登录才能访问
    public function __construct()
    {
        $this->middleware('check');
    }
}
