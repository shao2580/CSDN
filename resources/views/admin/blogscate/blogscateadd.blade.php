@extends('public.admin')
@section('title', '博客分类添加页')
@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>博客分类添加页<small></small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="">选项1</a>
                                </li>
                                <li><a href="">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <form role="form" method="post" action="/blogscate/data">
                                    <div class="form-group">
                                        <label>分类名称</label>
                                        <input type="type" class="form-control" name="c_name">
                                    </div>
                                    <div class="form-group">
                                        <label>链接地址</label>
                                        <input type="type" class="form-control" name="c_url">
                                    </div>
                                    <div class="form-group">
                                        <label>是否展示</label>
                                        <input type="radio" name="is_show" value="1" checked="">是
                                        <input type="radio" name="is_show" value="2">否
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>添 加</strong>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        </div>
    </div>

@endsection