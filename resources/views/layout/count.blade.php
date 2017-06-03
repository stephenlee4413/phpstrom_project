{{--

/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2017/6/2
 * Time: 21:21
 */--}}
<!DOCTYPE html>
<html lang="zh">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="http://cdn.hcharts.cn/highcharts/highcharts.js"></script>
        <script src="https://img.hcharts.cn/jquery/jquery-1.8.3.min.js"></script>
    </head>
    <body>
        {{--<div id="container" style="min-width:400px;height:400px"></div>--}}
        <div id="container" style="min-width:400px;height:400px"></div>
        <div id="container2" style="min-width:400px;height:400px"></div>
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
        {{--<script>
            var options ={
                chart:{
                    renderTo:'container',
                    type:'line'
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
                },{
                    name: '陈梅',                          //数据列名
                    data: [1, 9, 4]
                }]
            }
            var chart = new Highcharts.Chart(options);
        </script>--}}

    {{--第三种作图方式，多图表共存--}}
        <script type="text/javascript">
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
        </script>
    </body>
</html>

