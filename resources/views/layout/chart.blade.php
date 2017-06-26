<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Charts</title>

    {!! Charts::assets() !!}

</head>
<body>
<div style="display: block;">
    {!! $chart->render() !!}
</div>


</body>
</html>