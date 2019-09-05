<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Userad;

class AdminController extends Controller
{
    //管理员添加视图
    public function adminAdd()
    {

        return view('admin.admin.adminadd');
    }

    //管理员添加执行
    public function adminData(Request $request)
    {
        $data=$request->except(['u_pwd1']);
        $data['u_time']=time();
        //dd($data);
        $res=Userad::insert($data);
        if($res){
            return ['code'=>200,'count'=>'添加成功'];
        }else{
            return ['code'=>202,'count'=>'添加失败'];
        }
    }

    //管理员列表
    public function adminList()
    {
        $res=Userad::get();
        //dd($res);
        return view('admin.admin.adminlist',compact('res'));
    }

    //管理员修改视图
    public function adminExit($u_id)
    {
        //echo $u_id;
        $res=Userad::where('u_id',$u_id)->first();
        return view('admin.admin.adminexit',compact('res'));
    }

    //管理员修改执行
    public function adminExitdo(Request $request)
    {
        $data=$request->except(['u_pwd1']);
        $u_id=$data['u_id'];
        //dd($data);
        $res=Userad::where('u_id',$u_id)->update($data);
        if($res){
            return ['code'=>200,'count'=>'修改成功'];
        }else{
            return ['code'=>202,'count'=>'修改失败'];
        }
    }

    //管理员删除
    public function adminDel()
    {
        $u_id=request()->u_id;
        //echo $u_id;
        $res=Userad::where('u_id',$u_id)->delete();
        if($res){
            return redirect('/admin/list');
        }else{
            die('删除失败');
        }
    }
}
