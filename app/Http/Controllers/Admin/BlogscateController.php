<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogscateController extends Controller
{
    //博客分类添加视图
    public function blogscateAdd()
    {
        return view('admin.blogscate.blogscateadd');
    }

    //博客分类添加执行
    public function blogscateData(Request $request)
    {

    }

    //博客分类列表
    public function blogscateList()
    {
        return view('admin.blogscate.blogscatelist');
    }

    //博客分类添加视图
    public function blogscateExit()
    {
        return view('admin.blogscate.blogscateexit');
    }

    //博客分类添加执行
    public function blogscateExitdo(Request $request)
    {

    }

    //博客分类删除
    public function blogsDel(){

    }
}
