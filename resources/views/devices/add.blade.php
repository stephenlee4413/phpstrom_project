{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: Lee--}}
 {{--* Date: 2017/6/1--}}
 {{--* Time: 11:54--}}
 {{--*/--}}
@include('layout.master')
<div class="container">
    <form action="">
        <div class="form-group row">
            <label for="" class="col-form-label">设备编号</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="device_id" placeholder="设备编号">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-form-label">设备名称</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="device_name" placeholder="设备名称">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-form-label">设备型号</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="device_type" placeholder="设备型号">
            </div>
        </div>
    </form>
</div>
@include('layout.footer')