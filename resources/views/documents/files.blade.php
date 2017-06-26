<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2017/6/7
 * Time: 10:02
 */
?>
@include('layout.master')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <a href="./files"><h2 class="label-primary text-info" style="display: inline; float: left;">科室文档资料库</h2></a>
            <div class="" style="float: left">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="" class="nav-link">共计：{{$all}}份归档资料</a></li>
                    <li class="nav-item"><a href="./files/upload" class="nav-link">添加文档</a></li>
                    <li class="nav-item">
                        <form method="post" action="./files" class="form-horizontal bd-search d-none d-sm-block" >
                            {{ csrf_field() }}
                            <input type="text" name="search" class="form-control" placeholder="全文查询...">
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-12">
            <table class="table table-sm table-bordered table-hover" >
                <thead class="thead-inverse">
                    <tr>
                        <th >序号</th>
                        <th >资料名称</th>
                        <th >归档人</th>
                        <th >资料简介</th>
                        <th >资料类别</th>
                        <th >创建时间</th>
                        <th >下载</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($files as $file)
                    <tr  class="text-center">
                        <td >{{$file->id}}</td>
                        <td >{{$file->document_name}}</td>
                        <td>{{$file->document_owner}}</td>
                        <td>{{$file->note}}</td>
                        <td>{{$file->document_type}}</td>
                        <td>{{$file->created_at}}</td>
                        <td><a href={{$file->document_path}}>{{$file->document_name}}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{$files->links()}}
</div>
@include('layout.footer')
