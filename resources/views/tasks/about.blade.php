@include('layout.master')
<div class="container">
       <div class="row">
        <div class="col-lg-12">
            <a href="./show"><h2 class="label-primary text-info" style="display: inline;">任务发布列表</h2></a>
            <div class="" style="float: right">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="./newtask" class="nav-link">发布新任务</a></li>
                </ul>
            </div>
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
                    @foreach($tasks as $task)
                    <tr>
                        <td>{{$task->id}}</td>
                        <td>{{$task->title}}</td>
                        {{--<td> {!! $task->content !!}</td>--}}
                        {{--//理论上应该实现换行转义--}}
                        <td> {!! nl2br(e($task->content)) !!}</td>
                        {{--<td>{{ $task->created_at->toFormattedDateString() }}</td>--}}
                        <td>{{ $task->created_at->diffForHumans() }}</td>
                        <td><a href="http://localhost/laravelProject/TaskPushSys/public/about/{{$task->user_id}}">{{$task->user_id}}</a></td>
                        {{--<td><a href="/about/{{$task->user_id}}">{{$task->user_id}}</a></td>--}}
                    </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
    </div>
    {{$tasks->links()}}


</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@include('layout.footer')
