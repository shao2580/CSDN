<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DownloadController extends Controller
{
    //首页 下载列表
    public function list()
    {
        return view('index.download.download_list');
    }

    //首页 下载单个
    public function single()
    {
        return view('index.download.download_single');
    }

}
