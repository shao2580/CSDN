<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //首页
    public function index(){
        return view('admin.index.index');
    }

    //首页 图
    public function indexV1(){
        return view('admin.index.index_v1');
    }
}