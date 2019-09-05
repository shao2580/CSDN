<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //登录添加视图
    public function login()
    {
        return view('admin.login.login');
    }

    //登录添加执行
    public function loginDo()
    {
        $u_name=request()->u_name;
        $u_pwd=request()->u_pwd;
        $where=[
            'u_name'=>$u_name
        ];
        $userInfo=DB::table('userad')->where($where)->first();
        // print_r($userInfo);die;
        if(empty($userInfo)){
            // echo "用户错误";
            return ['code'=>0,'count'=>'用户或密码错误'];
        }else{
            // echo "用户正确";
            $u_id=$userInfo->u_id;
            $u_name=$userInfo->u_name;
            if($userInfo->u_pwd==$u_pwd){
                // echo "密码正确";
                session(['u_id'=>$u_id]);
                session(['u_name'=>$u_name]);
                return ['code'=>1,'count'=>'登陆成功'];
            }else{
                // echo "密码错误";
                return ['code'=>0,'count'=>'用户或密码错误'];
            }

        }
    }

    //退出登录
    public function loginOut()
    {
        request()->session()->forget('u_id');
        return redirect('/login/login');
    }
}
