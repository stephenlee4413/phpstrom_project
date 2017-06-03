{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: Lee--}}
 {{--* Date: 2017/5/31--}}
 {{--* Time: 10:36--}}
 {{--*/--}}
@include('layout.master')
<div class="container">
    <div class="row">
        <div style="display: flex;">
            <div style="margin-right: 25em;">
                <h2>科室设备管理信息库</h2>
            </div>
            <div style="float: right;">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="" class="nav-link">共计：{{$all}}件设备</a></li>
                    <li class="nav-item"><a href="./devices/add" class="nav-link">增添设备</a></li>
                    <li class="nav-item">
                        <form action="" class="form-horizontal bd-search d-none d-sm-block" >
                            <input type="search" class="form-control" placeholder="查询...">
                        </form>
                    </li>
                </ul>
            </div>
            

           {{-- <div style="display:flex; justify-content: flex-end;align-items: flex-end;">
                <a href="" style="margin-right: 2em;"><h6>增添设备</h6></a>
                <form action="" class="bd-search d-none d-sm-block" >
                    <input type="search" class="form-control" placeholder="Search...">
                </form>
            </div>--}}

        </div>
        <div class="col-lg-12">
            <table class="table table-bordered table-hover">
                <thead class="table-inverse">
                <tr>
                    <th>序号</th>
                    <th>设备编号</th>
                    <th>设备名称</th>
                    <th>设备单价</th>
                    <th>存放地点</th>
                    <th>入库时间</th>
                    <th>管理人员</th>
                </tr>
                </thead>
                <tbody>
                @foreach($devices as $device)
                    <tr>
                        <td>{{$device->id}}</td>
                        <td>{{$device->device_id}}</td>
                        <td>{{$device->device_name}}</td>
                        <td>{{$device->device_price}}</td>
                        <td>{{$device->device_location}}</td>
                        <td>{{$device->device_buy}}</td>
                        <td>{{$device->device_owner}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{$devices->links()}}
</div>
@include('layout.footer')