@extends('public.admin')
@section('title', '论坛列表页')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>论坛列表</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="table_basic.html#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="table_basic.html#">选项1</a>
                        </li>
                        <li><a href="table_basic.html#">选项2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>论坛id</th>
                                <th width="40">论坛名称</th>
                                <th>添加日期</th>
                                <th>论坛热度（阅读数）</th>
                                <th>前台用户id</th>
                                <th width="90">论坛内容</th>
                                <th>分类</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $v)
                            <tr>
                                <td>{{$v->f_id}}</td>
                                <td>{{$v->f_name}}</td>
                                <td>{{date("Y-m-d H:i:s",$v->f_time)}}</td>
                                <td>{{$v->f_read}}</td>
                                <td>{{$v->u_id}}</td>
                                <td>{{$v->f_desc}}</td>
                                <td>{{$v->c_id}}</td>
                                <td><a href="/forum/del?f_id={{$v->f_id}}">[ 删除 ]</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="btn-group">
                        <button class="btn btn-white">{{ $data->links() }}</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection