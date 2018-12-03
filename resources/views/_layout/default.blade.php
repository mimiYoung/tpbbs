<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>@yield('title') -- ThinkPHP 入门教程</title>
    <link href="https://cdn.bootcss.com/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/static/css/app.css">
</head>
<body>
    @include('_layout.header')

    <div class="container">
        @yield('content')
    </div>

    @include('_layout.footer')

    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.14.4/umd/popper.min.js"></script>
    <script src="https://cdn.bootcss.com/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="/static/js/app.js"></script>
</body>
</html>