<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title>Admin-csdn</title>

    <meta name="keywords" content="">
    <meta name="description" content="">

    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <style type="text/css">
        html{
            touch-action:none;
         }
    </style>
	
    <link rel="shortcut icon" href="favicon.ico"> <link href="{{url('admin/css')}}/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('admin/css')}}/font-awesome.min.css" rel="stylesheet">
    <link href="{{url('admin/css')}}/animate.css" rel="stylesheet">
    <link href="{{url('admin/css')}}/style.css" rel="stylesheet">
    <link href="{{url('admin/css')}}/page.css" rel="stylesheet">
   
    <script src="{{url('admin/js')}}/jquery-3.3.1.min.js"></script>
   
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden" >
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i></div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="block m-t-xs" style="font-size:20px;">
                                        <!-- <i class="fa fa-area-chart"></i> -->
                                        <strong class="font-bold">CSDN-后台管理</strong>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="logo-element">CSDN
                        </div>
                    </li>
                    <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                        <span class="ng-scope">主页</span>
                    </li>
                    <li>
                        <a class="J_menuItem" href="{{url('admin/index_v1')}}">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">主页</span>
                        </a>
                    </li>
                    
                    <li class="line dk"></li>
                    <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                        <span class="ng-scope">管理</span>
                    </li>

                    <li>
                        <a href="{{url('admin/list')}}"><i class="fa fa-edit"></i> <span class="nav-label">管理员管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="{{url('admin/add')}}">管理员添加</a>
                            </li>
                            <li><a class="J_menuItem" href="{{url('admin/list')}}">管理员列表</a>
                            </li>
                        </ul>
                    </li>
                      <li>
                        <a href="{{url('user/list')}}"><i class="fa fa-edit"></i> <span class="nav-label">用户管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="{{url('user/list')}}">用户列表</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="{{url('blogscate/list')}}"><i class="fa fa-edit"></i> <span class="nav-label">博客分类</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="{{url('blogscate/add')}}">添加</a>
                            </li> 
                            <li><a class="J_menuItem" href="{{url('blogscate/list')}}">列表展示</a>
                            </li>
                        </ul>
                    </li>
                       <li>
                        <a href="{{url('blogs/list')}}"><i class="fa fa-edit"></i> <span class="nav-label">博客管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="{{url('blogs/list')}}">博客列表</a>
                            </li>
                            
                        </ul>
                    </li>
                     <li>
                        <a href="{{url('forum/list')}}"><i class="fa fa-edit"></i> <span class="nav-label">论坛管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="{{url('forum/list')}}">论坛列表</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('slideshow/list')}}"><i class="fa fa-edit"></i> <span class="nav-label">轮播图管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="{{url('slideshow/list')}}">轮播图列表</a>
                            </li>
                            <li><a class="J_menuItem" href="{{url('slideshow/add')}}">轮播图添加</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="{{url('navigation/list')}}"><i class="fa fa-edit"></i> <span class="nav-label">导航栏管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="{{url('navigation/list')}}">导航栏列表</a>
                            </li>
                            <li><a class="J_menuItem" href="{{url('navigation/add')}}">导航栏添加</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-info " href="JavaScript:;"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    @if(session('u_id')==null)
                        <ul class="nav navbar-top-links navbar-right">
                            <li class="dropdown">
                                <a href="/login/login">请登录</a>
                            </li>
                        </ul>
                    @else
                    <ul class="nav navbar-top-links navbar-right">
                        <li class="dropdown">
                            <a href="javascript:;">欢迎&nbsp;&nbsp;&nbsp;{{session('u_name')}}</a>
                        </li>
                        <li class="dropdown">
                            <a href="/login/loginout">退出</a>
                        </li>
                    </ul>
                    @endif
                </nav>
            </div>
            <div class="row J_mainContent" id="content-main">
                <iframe id="J_iframe" width="100%" height="100%" src="{{url('admin/index_v1')}}" frameborder="0" data-id="index_v1.html" seamless></iframe>
            </div>
        </div>
        <!--右侧部分结束-->
    </div>

    <!-- 全局js -->
    <script src="{{url('admin/js')}}/jquery.min.js"></script>
    <script src="{{url('admin/js')}}/bootstrap.min.js"></script>
    <script src="{{url('admin/js')}}/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="{{url('admin/js')}}/plugins/slimscroll/jquery.slimscroll.min.js"></script>

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
