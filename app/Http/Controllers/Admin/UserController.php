<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    //用户列表
    public function userList()
    {
        return view('admin.user.userlist');
    }


}