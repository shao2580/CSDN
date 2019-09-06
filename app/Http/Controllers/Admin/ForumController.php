<?php

namespace App\Http\Controllers\Admin;

use App\Model\Forum;
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
        $pageSize = config('app.pageSize');
        $data = Forum::paginate($pageSize);
        return view('admin.forum.forumlist',compact('data'));
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
    public function forumDel(Request $request)
    {
        $f_id = $request->f_id;
        $res = Forum::where('f_id',$f_id)->delete();
        if($res){
            echo "<script>alert('删除成功');location.href='/forum/list';</script>";
        }
    }
}
