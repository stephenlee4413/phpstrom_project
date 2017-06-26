{{--
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2017/6/6
 * Time: 21:02
 */--}}

@include('layout.master')
<div class="container" style="display: flex; flex-direction: column;justify-content:center;align-items: flex-start; margin-left:30% ;">
    <form action="" method="post" enctype="multipart/form-data" style="margin-top: 15px">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="" class="col-form-label text-success">资料名称：</label>
            <div class="col" >
                <input type="text" class="form-control" name="name" placeholder="命名归档资料">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-form-label text-success">资料简介：</label>
            <div class="col" style="width: 30em">
                <textarea class="form-control" name="note" rows="3" placeholder="简介"></textarea>
                {{--<input class="form-control" type="text" name="note" placeholder="对归档资料简要说明">--}}
            </div>
        </div>
        <div class="form-group row" >
            <label for="" class="col-form-label text-success">资料类型：</label>
            <div class="col" style="width: 30em">
                <select class="form-control" id="type" name="type" >
                    <option selected> </option>
                    <option>规章制度</option>
                    <option>建设资料</option>
                    <option>改革方案</option>
                    <option>其   它</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-form-label text-success">选择单个上传文件：</label>
            <div class="col" style="width: 30em">
                <input  type="file" name="file" name="file">
            </div>
        </div>
        <div class="form-group row">
            <div class="col" style="width: 30em">
                <button class="btn btn-primary" type="submit" name="submit">提  交</button>
                <button class="btn btn-primary" type="reset" name="submit">重  置</button>
            </div>
        </div>
    @if(count($errors) > 0)
        <div class="alert alert-danger" style="margin: auto;">
            <ul>
                @forelse($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
            </ul>
        </div>
    @endif
    </form>
</div>
@include('layout.footer')
