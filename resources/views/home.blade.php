@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" >
                        <h2 class="panel-primary">后台管理</h2>
                    </div>
                    <div class="panel-body">
                        恭喜你，已经成功登录！
                    </div>
                </div>
                <div style="display: flex;align-items: center;justify-content: center">
                    <div class="panel-heading" style="display: inline-flex;margin-right: .5em;background:paleturquoise">
                        <h2 class="panel-primary">
                            <a href="./files">科室归档资料</a>
                        </h2>
                    </div>
                    <div class="panel-heading" style="display: inline-flex;margin-right: .5em;background: paleturquoise">
                        <h2 class="panel-primary">
                            <a href="./exams">考试项目管理</a>
                        </h2>
                    </div>
                    <div class="panel-heading" style="display: inline-flex;margin-right: .5em;background: paleturquoise">
                        <h2 class="panel-primary">
                            <a href="./show">任务管理平台</a>
                        </h2>
                    </div>
                    <div class="panel-heading" style="display: inline-flex;margin-right: .5em;background: paleturquoise">
                        <h2 class="panel-primary">
                            <a href="./devices">资产管理平台</a>
                        </h2>
                    </div>
                    <div class="panel-heading" style="text-align:center; display: inline-flex;margin-right: .5em;background: paleturquoise">
                        <h2 class="panel-primary">
                            <a href="./counting_show">统计分析图表</a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
