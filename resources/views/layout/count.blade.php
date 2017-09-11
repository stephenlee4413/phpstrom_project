{{--

/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2017/6/2
 * Time: 21:21
 */--}}
@include('layout.master')
{{--<!DOCTYPE html>--}}
{{--<html lang="zh">--}}
    {{--<head>--}}
        {{--<title></title>--}}
        {{--<meta charset="UTF-8">--}}
        {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
        {{--<script src="http://cdn.hcharts.cn/highcharts/highcharts.js"></script>--}}
        {{--<script src="https://img.hcharts.cn/jquery/jquery-1.8.3.min.js"></script>--}}
        {{--<script src="http://cdn.bootcss.com/echarts/3.6.1/echarts.min.js"></script>--}}
    {{--</head>--}}
    {{--<body>--}}
        {{--<div id="container" style="min-width:400px;height:400px"></div>--}}
    <div class="container">
        <div class="row" style="margin: auto">
            <div class="col-lg-6" id="main" style="width: 600px;height:400px;float: left;"></div>
            <div class="col-lg-6" id="main2" style="width:600px;height:400px;float: right;"></div>
            <div class="col-lg-12 text-primary" style="background-color:#CCCCCC;">
                <a href="http://met.swpu.edu.cn"><b style="margin-right: 20px;">科室简介</b></a>
                <a href="http://met.swpu.edu.cn/2015style/2015moban/new_yjfk.jsp?urltype=tree.TreeTempUrl&wbtreeid=1222"><b style="margin-right: 20px;">反馈留言</b></a>
                <b>联系我们:</b><a href="mailto:#"> lixu@swpu.edu.cn</a>
                <a href="/"> <b style="margin-left: 20px;">管理平台</b></a>
            </div>
        </div>
</div>
        {{--<script>
            var chart = new Highcharts.Chart('container', {// 图表初始化函数，其中 container 为图表的容器 div
                chart: {
                    type: 'bar'                           //指定图表的类型，默认是折线图（line）
                },
                title: {
                    text: '资产统计图'                 //指定图表标题
                },
                xAxis: {
                    categories: ['投影仪', '调音台', '微型计算机']   //指定x轴分组
                },
                yAxis: {
                    title: {
                        text: '资产类别'                 //指定y轴的标题
                    }
                },
                series: [{                                 //指定数据列
                    name: '小明',                          //数据列名
                    data: [1, 0, 4]                        //数据
                }, {
                    name: '小红',
                    data: [5, 7, 3]
                },{
                    name:'郭志',
                    data:[12,1,11]
                },{
                    name:'熊志',
                    data:[4,1,20]
                }]
            });
        </script>--}}
        {{--<script>--}}
            {{--$(document).ready(function () {--}}
                {{--var options ={--}}
                    {{--chart:{--}}
                        {{--renderTo:'container',--}}
                        {{--type:'spline'--}}
                    {{--},--}}
                    {{--series: [--}}
                        {{--[1,12],--}}
                        {{--[2,5],--}}
                        {{--[3,18],--}}
                        {{--[4,13],--}}
                        {{--[5,7],--}}
                        {{--[6,4],--}}
                        {{--[7,9],--}}
                        {{--[8,10],--}}
                        {{--[9,15],--}}
                        {{--[10,22]--}}
                    {{--]--}}
                {{--};--}}
                {{--var chart =new Hightcharts.Chart(options);--}}
{{--//                $.getJSON('http://localhost/laravelProject/TaskPushSys/public/counting',function (data) {--}}
{{--////                    alert("data:"+data['1'] +"\nStatus  "+status); //可以正确输出数据--}}
{{--//                    options.series[0].data=data;--}}
{{--//                    var chart =new Hightcharts.Chart(options);--}}
{{--//                });--}}
            {{--});--}}


{{--//            //测试获取json数据--}}
{{--//            $("button").click(function () {--}}
{{--//               $.get('http://localhost/laravelProject/TaskPushSys/public/counting',function (data,status){--}}
{{--//                   alert("data:"+data['陈梅'] +"\nStatus  "+status);--}}
{{--//               });--}}
{{--//            });--}}

        {{--</script>--}}

    {{--第三种作图方式，多图表共存--}}
      {{--  <script type="text/javascript">
            $(function() {
                Highcharts.setOptions({
                    chart: {
                        backgroundColor: {
                            linearGradient: [0, 0, 500, 500],
                            stops: [
                                [0, 'rgb(255, 255, 255)'],
                                [1, 'rgb(255, 255, 255)']
                            ]
                        },
                        borderWidth: 2,
                        plotBackgroundColor: 'rgba(255, 255, 255, .9)',
                        plotShadow: true,
                        plotBorderWidth: 1
                    }
                });
                var chart1 = new Highcharts.Chart({
                    chart: {
                        renderTo: 'container',
                    },
                    title: {
                        text:'任务发布走势图'
                    },
                    xAxis: {
                        type: 'datetime',
                    },
                    yAxis:{
                        title:{
                            text:'任务总数'
                        }
                    },
                    series: [{
                        data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
                        pointStart: Date.UTC(2010, 0, 1),
                        pointInterval: 3600 * 1000 // one hour
                    }]
                });
                var chart2 = new Highcharts.Chart({
                    chart: {
                        renderTo: 'container2',
                        type: 'column'
                    },
                    xAxis: {
                        type: 'datetime',
                    },
                    yAxis:{
                        title:{
                            text:'投影仪'
                        }
                    },
                    series: [{
                        data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
                        pointStart: Date.UTC(2010, 0, 1),
                        pointInterval: 3600 * 1000 // one hour
                    }]
                });
            });
        </script>--}}
        <script type="text/javascript">
            var myChart = echarts.init(document.getElementById('main'));
            myChart.setOption({
                title: {
                    text: '资产管理柱状图'
                },
                tooltip: {},
                legend: {
                    data:['设备数量']
                },
                xAxis: {
                    data: []
                },
                yAxis: { },
                series: [{
                    name: '设备数量',
                    type: 'bar',
                    data: []
                }]
            });
            // 异步加载数据
            $.get('/counting').done(function (data) {
                // 填入数据
                myChart.setOption({
                    xAxis: {
                        data: data.owner
                    },
                    series: [{
                        // 根据名字对应到相应的系列
                        name: '设备数量',
                        data: data.data
                    }]
                });
            });

            //第二张图
            var myChart2 = echarts.init(document.getElementById('main2'));
            myChart2.setOption({
                title: {
                    text: '工作任务计量图'
                },
                tooltip: {},
                legend: {
                    data:['任务数量']
                },
                xAxis: {
                    data: []
                },
                yAxis: { },
                series: [{
                    name: '任务数量',
                    type: 'bar',
                    data: []
                }]
            });
            // 异步加载数据
            $.get('/counting').done(function (data) {
                // 填入数据
                myChart2.setOption({
                    xAxis: {
                        data: data.owner
                    },
                    series: [{
                        // 根据名字对应到相应的系列
                        name: '任务数量',
                        data: data.data
                    }]
                });
            });
        </script>


