@include('layout.master')
<div class="container">
    @foreach($task as $tk )
        <div class="row">
            <div class="col-lg-12">
                <form method="post" action="/laravelProject/TaskPushSys/public/about/{{$tk->id}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">任务主题</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder={{$tk->title}}>
                    </div>
                    <div class="form-group">
                        <label for="user_id">任务级别</label>
                        <select class="form-control" id="user_id" name="user_id">
                            <option>{{$tk->user_id}}</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="intro">任务概要：</label>
                        <textarea class="form-control" id="intro" rows="1" name="intro">{{$tk->intro}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="content">发布任务内容详情:</label>
                        <textarea class="form-control" id="content" rows="3" name="content">{{$tk->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">编辑发布</button>
                    </div>

                    @include('layout.errrors')
                </form>
            </div>
        </div>
    @endforeach
</div>

@include('layout.footer')