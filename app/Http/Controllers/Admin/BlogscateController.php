<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\BlogsCate;

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

        $data = $request->all();
        $data['c_time'] =time();
        //查库判断名称唯一
        $res = BlogsCate::where('c_name',$data['c_name'])->first();

        if (!$res) {
           $res = BlogsCate::insert($data);
            if ($res) {
                return "<script>alert('添加成功');location.href='/blogscate/list'</script>";
            } else {
                return "<script>alert('添加失败');location.href='/blogscate/add'</script>";
            }
        }else{
            return "<script>alert('分类名重复，请重新填写');location.href='/blogscate/add'</script>";
        }  
    }

    //博客分类列表
    public function blogscateList()
    {
        $data = BlogsCate::get();
        $data = json_decode($data);
        if ($data) {
            return view('admin.blogscate.blogscatelist',['data'=>$data]);
        }
        return view('admin.blogscate.blogscatelist');
    }

    //博客分类添加视图
    public function blogscateExit(Request $request)
    {
        $c_id = $request->c_id;
        if ($c_id) {
            $data = BlogsCate::where('c_id',$c_id)->first();

            $data = json_decode($data);
            return view('admin.blogscate.blogscateexit',['data'=>$data]);
        }
        return view('admin.blogscate.blogscateexit');
    }

    //博客分类添加执行
    public function blogscateExitdo(Request $request)
    {
        $data = $request->except('c_id');
        $c_id = $request->c_id;
        if ($data) {
            $res = BlogsCate::where('c_id',$c_id)->update($data);
            if ($res) {
                return "<script>alert('修改成功');location.href='/blogscate/list'</script>";
            }
        }
    }

    //博客分类删除
    public function blogscateDel(Request $request)
    {
        $c_id = $request->c_id;
        if ($c_id) {
            $res = BlogsCate::where('c_id',$c_id)->update(['is_show'=>2]);
            if ($res) {
                return "<script>alert('下架成功');location.href='/blogscate/list'</script>";
            }
        }
    }
}
