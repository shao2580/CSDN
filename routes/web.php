<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*前台*/
Route::prefix('index')->group(function(){    
    //不用登陆
    Route::namespace('Index')->group(function(){  
        Route::any('index','IndexController@index');             //主页

        Route::any('blogs','BlogsController@blogs');             //主页博客
        Route::any('blogs_content','BlogsController@content');    //主页博客内容

        Route::any('answer_list','AnswerController@list');             //答题列表
        Route::any('answer_single','AnswerController@single');         //答题单个

        Route::any('download_list','DownloadController@list');             //下载列表
        Route::any('download_single','DownloadController@single');         //下载单个

        Route::any('forums','ForumsController@forums');              //主页论坛
        Route::any('forums_list','ForumsController@list');           //主页论坛列表
        Route::any('forums_content','ForumsController@content');     //主页论坛内容
    });

    //登陆 注册
    Route::middleware([])->namespace('Index')->group(function(){   
         Route::any('login','IndexController@login');                 //登录
         Route::any('register_1','IndexController@registerV1');       //注册1
         Route::any('register_2','IndexController@registerV2');       //注册2
    });

    //登陆
    Route::middleware([])->namespace('Index')->group(function(){   
        Route::any('userinfo','UserController@userinfo');   //个人资料
        Route::any('password','UserController@password');   //修改密码
        Route::any('email','UserController@email');         //修改邮箱
    }); 
}); 


/*后台*/
Route::prefix('/admin')->middleware(['checkadminlogin'])->group(function(){
    Route::any('index','Admin\IndexController@index');//首页
    Route::any('index_v1','Admin\IndexController@indexV1');//首页图
});

Route::prefix('/login')->group(function(){
    Route::any('login','Admin\LoginController@login');//登录
    Route::any('logindo','Admin\LoginController@loginDo');//执行登录
    Route::any('loginout','Admin\LoginController@loginOut');//退出登录
});

Route::prefix('/user')->middleware(['checkadminlogin'])->group(function(){
    Route::any('list','Admin\UserController@userList');//用户列表
    Route::get('status','Admin\UserController@userStatus');//更改状态
});

Route::prefix('/admin')->middleware(['checkadminlogin'])->group(function(){
    Route::any('add','Admin\AdminController@adminAdd');//管理员添加视图
    Route::any('data','Admin\AdminController@adminData');//管理员添加执行
    Route::any('list','Admin\AdminController@adminList');//管理员列表
    Route::any('exit/{u_id}','Admin\AdminController@adminExit');//管理员修改视图
    Route::any('exitdo','Admin\AdminController@adminExitdo');//管理员修改执行
    Route::any('del','Admin\AdminController@adminDel');//管理员删除
});

Route::prefix('/blogscate')->middleware(['checkadminlogin'])->group(function(){
    Route::any('add','Admin\BlogscateController@blogscateAdd');//博客分类添加视图
    Route::any('data','Admin\BlogscateController@blogscateData');//博客分类添加执行
    Route::any('list','Admin\BlogscateController@blogscateList');//博客分类列表
    Route::any('exit','Admin\BlogscateController@blogscateExit');//博客分类修改视图页
    Route::any('exitdo','Admin\BlogscateController@blogscateExitdo');//博客分类修改执行页
    Route::any('del','Admin\BlogscateController@blogscateDel');//博客分类删除
});

Route::prefix('/blogs')->group(function(){
    Route::any('add','Admin\BlogsController@blogsAdd');//博客添加视图
    Route::any('data','Admin\BlogsController@blogsData');//博客添加执行
    Route::any('list','Admin\BlogsController@blogsList');//博客列表
    Route::any('exit','Admin\BlogsController@blogsExit');//博客修改视图
    Route::any('exitdo','Admin\BlogsController@blogsExitdo');//博客修改执行
    Route::any('del','Admin\BlogsController@blogsDel');//博客删除
});

Route::prefix('/forum')->middleware(['checkadminlogin'])->group(function(){
    Route::any('add','Admin\ForumController@forumAdd');//论坛添加视图
    Route::any('data','Admin\ForumController@forumData');//论坛添加执行
    Route::any('list','Admin\ForumController@forumList');//论坛列表
    Route::any('exit','Admin\ForumController@forumExit');//论坛修改视图
    Route::any('exitdo','Admin\ForumController@forumExitdo');//论坛修改执行
    Route::any('del','Admin\ForumController@forumDel');//论坛删除
});

Route::prefix('/slideshow')->middleware(['checkadminlogin'])->group(function(){
    Route::any('add','Admin\SlideshowController@slideshowAdd');//轮播图添加视图
    Route::any('data','Admin\SlideshowController@slideshowData');//轮播图添加执行
    Route::any('list','Admin\SlideshowController@slideshowList');//轮播图列表
    Route::any('exit','Admin\SlideshowController@slideshowExit');//轮播图修改视图
    Route::any('exitdo','Admin\SlideshowController@slideshowExitdo');//轮播图修改执行
    Route::any('del','Admin\SlideshowController@slideshowDel');//轮播图删除
});

Route::prefix('/navigation')->middleware(['checkadminlogin'])->group(function(){
    Route::any('add','Admin\NavigationController@navigationAdd');//后台导航添加视图
    Route::any('data','Admin\NavigationController@navigationData');//后台导航添加执行
    Route::any('list','Admin\NavigationController@navigationList');//后台导航列表
    Route::any('exit','Admin\NavigationController@navigationExit');//后台导航修改视图
    Route::any('exitdo','Admin\NavigationController@navigationExitdo');//后台导航修改执行
    Route::any('del','Admin\NavigationController@navigationDel');//后台导航删除
});