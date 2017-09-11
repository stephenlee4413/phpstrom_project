@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" >
                        <h2 class="panel-primary">管理面板</h2>
                    </div>
                    <div class="panel-body">
                        恭喜你，已经成功登录！<br/>
                        上一次登录时间是：<b style="color: blue;">{{$lastlogin}}</b>
                    </div>
                </div>
                <div style="display: flex;align-items:stretch;justify-content: flex-start;flex-wrap: wrap;">
                    <div class="panel-heading" style="margin-top:.5em; display: inline-flex;margin-right: .5em;background:paleturquoise;flex-basis: auto">
                        <h2 class="panel-primary">
                            <a href="./files">科室归档资料</a>
                        </h2>
                    </div>
                    <div class="panel-heading" style="margin-top:.5em; display: inline-flex;margin-right: .5em;background: paleturquoise;flex-basis: auto">
                        <h2 class="panel-primary">
                            <a href="./exams">考试项目管理</a>
                        </h2>
                    </div>
                    <div class="panel-heading" style="margin-top:.5em; display: inline-flex;margin-right: .5em;background: paleturquoise;flex-grow: 1.1;">
                        <h2 class="panel-primary">
                            <a href="./show">任务管理平台</a>
                        </h2>
                    </div>
                    <div class="panel-heading" style="margin-top:.5em; display: inline-flex;margin-right: .5em;background: paleturquoise;flex-basis: auto">
                        <h2 class="panel-primary">
                            <a href="./devices">资产管理平台</a>
                        </h2>
                    </div>
                    <div class="panel-heading" style="margin-top:.5em; text-align:center; display: inline-flex;margin-right: .5em;background: paleturquoise;flex-basis: auto">
                        <h2 class="panel-primary">
                            <a href="./counting_show">统计分析图表</a>
                        </h2>
                    </div>
                    <div class="panel-heading" style="margin-top:.5em; text-align:center; display: inline-flex;margin-right: .5em;background: paleturquoise;flex-grow: 1.1">
                        <h2 class="panel-primary">
                            <a href="./">其它模块</a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
