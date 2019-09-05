<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogsController extends Controller
{
    //博客添加视图
    public function blogsAdd()
    {
        return view('admin.blogs.blogsadd');
    }

    //博客添加执行
    public function blogsData(Request $request)
    {

    }

    //博客列表
    public function blogsList()
    {
        return view('admin.blogs.blogslist');
    }

    //博客修改视图
    public function blogsExit()
    {
        return view('admin.blogs.blogsexit');
    }

    //博客修改执行
    public function blogsExitdo(Request $request)
    {

    }

    //博客删除
    public function blogsDel()
    {

    }
}
