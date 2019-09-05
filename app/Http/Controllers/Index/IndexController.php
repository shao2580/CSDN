<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //前台 首页
    public function index()
    {
        return view('index.index.index');
    }

    //前台 登录
    public function login()
    {
        return view('index.index.login');
    }

    //前台 注册1
    public function registerV1()
    {
        return view('index.index.register_1');
    }

    //前台 注册2
    public function registerV2()
    {
        return view('index.index.register_2');
    }

}
