<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Blogs;
use App\Model\Forum;

class IndexController extends Controller
{
    //前台 首页
    public function index()
    {
        //博客推荐
        $blogs = Blogs::take(10)->get();
        //热门讨论
        $forums = Forum::take(10)->get();

        return view('index.index.index',['blogs'=>$blogs,'forums'=>$forums]);
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
