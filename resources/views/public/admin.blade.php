<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title>后台管理-@yield('title')</title>

    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="{{url('admin/css')}}/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('admin/css')}}/font-awesome.min.css" rel="stylesheet">
    <link href="{{url('admin/css')}}/animate.css" rel="stylesheet">
    <link href="{{url('admin/css')}}/style.css" rel="stylesheet">
    <link href="{{url('admin/css')}}/page.css" rel="stylesheet">
   
    <script src="{{url('admin/js')}}/jquery-3.3.1.min.js"></script>

 
</head>

<div style="margin-top:3%;" class="container">

 @yield('content')
 
</div>
    <!-- 全局js -->
    <script src="{{url('admin/js')}}/jquery.min.js"></script>
    <script src="{{url('admin/js')}}/bootstrap.min.js"></script>
    <script src="{{url('admin/js')}}/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="{{url('admin/js')}}/plugins/slimscroll/jquery.slimscroll.min.js" ></script>
    <script src="{{url('admin/js')}}/plugins/layer/layer.min.js"></script>

    <!-- 自定义js -->
    <script src="{{url('admin/js')}}/hAdmin.js"></script>
    <script type="text/javascript" src="{{url('admin/js')}}/index.js"></script>

    <!-- 第三方插件 -->
    <!-- <script src="{{url('admin/js')}}/plugins/pace/pace.min.js"></script> -->
<div style="text-align:center;">

</div>
</body>

</html>