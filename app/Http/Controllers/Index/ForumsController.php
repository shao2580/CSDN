<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForumsController extends Controller
{
    //首页 论坛
    public function forums()
    {
        return view('index.forums.forums');
    }

    //首页 论坛列表
    public function list()
    {
        return view('index.forums.forums_list');
    }

    //首页 论坛内容
    public function content()
    {
        return view('index.forums.forums_content');
    }

}
