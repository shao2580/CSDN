<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForumController extends Controller
{
    //论坛添加视图
    public function forumAdd()
    {
        return view('admin.forum.forumadd');
    }

    //论坛添加执行
    public function forumData(Request $request)
    {

    }

    //论坛列表
    public function forumList()
    {
        return view('admin.forum.forumlist');
    }

    //论坛修改视图
    public function forumExit()
    {
        return view('admin.forum.forumexit');
    }

    //论坛修改执行
    public function forumExitdo(Request $request)
    {

    }

    //论坛删除
    public function forumDel()
    {

    }
}
