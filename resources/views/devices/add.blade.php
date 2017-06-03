{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: Lee--}}
 {{--* Date: 2017/6/1--}}
 {{--* Time: 11:54--}}
 {{--*/--}}
@include('layout.master')
<div class="container" style="display: flex; flex-direction: row;justify-content:center;align-items: center;margin-bottom: 20px;">
    <form action="" method="post">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="" class="col-form-label text-success">设备编号</label>
            <div class="col" style="width: 30em">
                <input type="text" class="form-control" name="device_id" placeholder="设备编号">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-form-label text-success">设备名称</label>
            <div class="col">
                <input type="text" class="form-control" name="device_name" placeholder="设备名称">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-form-label text-success">设备型号</label>
            <div class="col">
                <input type="text" class="form-control" name="device_type" placeholder="设备型号">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-form-label text-success">入库时间</label>
            <div class="col">
                <input type="text" class="form-control" name="device_buy" placeholder="设备入库时间，格式2012-11-30">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-form-label text-success">设备单价</label>
            <div class="col">
                <input type="text" class="form-control" name="device_price" placeholder="设备单击">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-form-label text-success">归属部门</label>
            <div class="col">
                <input type="text" class="form-control" name="device_department" placeholder="所属科室">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-form-label text-success">存放地点</label>
            <div class="col">
                <input type="text" class="form-control" name="device_location" placeholder="存放位置">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-form-label text-success">管理人员</label>
            <div class="col">
                <input type="text" class="form-control" name="device_owner" placeholder="管理人员">
            </div>
        </div>
        <div class="form-grou row" >
            <button style="margin-right: 40px" class="btn btn-primary" type="submit" id="submit" >添加设备</button>
            <button class="btn btn-primary" type="reset" id="reset" >重新填写</button>
        </div>
    </form>
</div>
@include('layout.footer')