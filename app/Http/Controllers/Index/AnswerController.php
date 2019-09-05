<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnswerController extends Controller
{
    //首页 下载列表
    public function list()
    {
        return view('index.answer.answer_list');
    }

    //首页 下载单个
    public function single()
    {
        return view('index.answer.answer_single');
    }

}
