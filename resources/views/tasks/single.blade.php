@include('layout.master')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="label-primary text-info">今日任务发布列表</h2>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>序号</th>
                    <th>任务标题</th>
                    <th>任务内容</th>
                    <th>发布日期</th>
                    <th>发布人</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user_tasks as $user_task)
                    <tr>
                        <td>{{$user_task->id}}</td>
                        <td>{{$user_task->title}}</td>
                        {{--<td> {!! $task->content !!}</td>--}}
                        {{--//理论上应该实现换行转义--}}
                        <td> {!! nl2br(e($user_task->content)) !!}</td>
                        <td>{{$user_task->created_at}}</td>
                        <td>{{$user_task->user_id}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('layout.footer')