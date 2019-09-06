<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Userin;

class UserController extends Controller
{

    //用户列表
    public function userList()
    {
        $res=Userin::get();
        $res=json_decode(json_encode($res),true);
        //处理手机号
        foreach ($res as $k => $v) {
            //字符串截取
            $res[$k]['u_phone']=substr($res[$k]['u_phone'], 0, 3).'****'.substr($res[$k]['u_phone'], 7);
        }
        return view('admin.user.userlist',compact('res'));
    }

    //更改状态
    public function userStatus()
    {
        //接收要修改的id
        $u_id=request()->u_id;
        //查询点击后的这条数据
        $list=Userin::where('u_id',$u_id)->first()->toArray();
        //dd($list);
        //获取这条数据的状态
        $u_status=$list['u_status'];
        //echo $u_status;
        if($u_status==1){
            //状态为1，更改状态=》2，冻结
            $re=Userin::where('u_id',$u_id)->update(['u_status'=>2]);
            //查询修改后的时间
            $res=Userin::where('u_id',$u_id)->first()->toArray();
            $updated_at=$res['updated_at'];
            if($re){
                return ['code'=>2002,'count'=>'修改成功','updated_at'=>$updated_at];
            }else{
                return ['code'=>2003,'count'=>'修改失败'];
            }
        }else{
            //状态为2，更改状态=》1，正常
            $re=Userin::where('u_id',$u_id)->update(['u_status'=>1]);
            //查询修改后的时间
            $res=Userin::where('u_id',$u_id)->first()->toArray();
            $updated_at=$res['updated_at'];
            if($re){
                return ['code'=>2001,'count'=>'修改成功','updated_at'=>$updated_at];
            }else{
                return ['code'=>2003,'count'=>'修改失败'];
            }
        }
    }
}
