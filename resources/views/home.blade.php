@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-primary">后台管理</h2>
                </div>
                <div class="panel-body">
                    恭喜你，已经成功登录！
                </div>
                <div class="panel-heading">
                    <h2 class="panel-primary">
                        <a href="./show">任务管理平台</a>
                    </h2>
                </div>
                <div class="panel-heading">
                    <h2 class="panel-primary">
                        <a href="./devices">资产管理平台</a>
                    </h2>
                </div>
                <div class="panel-heading">
                    <h2 class="panel-primary">
                        <a href="./counting">统计分析图表</a>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
