<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\Slide;


class SlideshowController extends Controller
{
    //轮播图添加视图
    public function slideshowAdd()
    {
        return view('admin.slideshow.slideshowadd');
    }

    //轮播图添加执行
    public function slideshowData(Request $request)
    {
        $s_img = $request->s_img;
        $s_desc = $request->s_desc;
        if($request->hasFile('s_img')){
            $s_img= $this->upload($request,'s_img');
        }
        $time=time();
        $data= [
            's_img'=>$s_img,
            's_desc'=>$s_desc,
            'created_at'=>$time,
        ];
        $validatedData = $request->validate([
            's_desc' => 'required',

        ],[
            's_desc.required' =>'轮播图名称不能为空',
        ]);
        $res = DB::table('slide')->insert($data);
        if ($res) {
            return "<script>alert('添加成功');location.href='/slideshow/list'</script>";
        } else {
            return "<script>alert('添加失败');location.href='/slideshow/add'</script>";
        }

    }

    //轮播图列表
    public function slideshowList()
    {
        $query=request()->all();
        // $where=[];
        $data= Slide::where('is_show',1)->paginate(2);
        $line=$data['line'];
        return view('admin.slideshow.slideshowlist',['data'=>$data,'line'=>$line,'query'=> $query]);

    }

    //轮播图修改视图
    public function slideshowExit()
    {
        return view('admin.slideshow.slideshowexit');
    }

    //轮播图修改执行
    public function slideshowExitdo(Request $request)
    {

    }

    //轮播图删除
    public function slideshowDel()
    {
        $s_id=request()->all();
        $res=Slide::where('s_id',$s_id)->update(['is_show'=>2]);
        if ($res) {
            return "<script>alert('删除成功');location.href='/slideshow/list'</script>";
        } else {
            return "<script>alert('删除失败');location.href='/slideshow/list'</script>";
        }
    }

    //上传
    public function upload(Request $request,$s_desc)
    {
        if ($request->file($s_desc)->isValid()) {
            $post=$request->file($s_desc);
            $extension=$request->$s_desc->extension();
            $store_result=$post->storeAs(date('YMD'),date('YHis').rand(100,999).'.'.$extension);
            return $store_result;
        }
        exit('上传文件出错');
    }
}
