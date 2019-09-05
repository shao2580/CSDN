<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogsController extends Controller
{
    //首页 博客
    public function blogs()
    {
        return view('index.blogs.blogs');
    }

    //首页 博客内容
    public function content()
    {
        return view('index.blogs.blogs_content');
    }

}
