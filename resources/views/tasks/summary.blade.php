<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="http://cdn.bootcss.com/echarts/3.5.4/echarts.min.js"></script>
</head>
<body>
    <div id="main" style="width: 600px; height: 400px;"></div>
    <script type="text/javascript">

        var summaryChart = echarts.init(document.getElementById('main'));
        var option = {
            title: {
                text: '科室内部工作情况统计图'
            },
            tooltip: {},
            legend: {
                data:['效率']
            },
            xAxis: {
                data: ["衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子"]
            },
            yAxis: {},
            series: [{
                name: '销量',
                type: 'bar',
                data: [5, 20, 36, 10, 10, 20]
            }]
        };
        summaryChart.setOption(option);
    </script>
</body>
</html>