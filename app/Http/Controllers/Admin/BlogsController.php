<?php

namespace App\Http\Controllers\Admin;

use App\Model\Blogs;
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
         $query=request()->all();
         $data= Blogs::where('is_show',1)->paginate(5);

         $line=$data['line'];
        return view('admin.blogs.blogslist',['data'=>$data,'line'=>$line,'query'=> $query]);

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
         $b_id=request()->all();
        $res=Blogs::where('b_id',$b_id)->update(['is_show'=>2]);
        if ($res) {
            return "<script>alert('删除成功');location.href='/blogs/list'</script>";
        } else {
            return "<script>alert('删除失败');location.href='/blogs/list'</script>";
        }
    }
}
