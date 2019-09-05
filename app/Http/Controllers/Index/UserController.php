<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //个人资料
    public function userinfo()
    {
        return view('index.user.userinfo');
    }

    //修改密码
    public function password()
    {
        return view('index.user.password');
    }

    //email
    public function email()
    {
        return view('index.user.email');
    }

  

}
