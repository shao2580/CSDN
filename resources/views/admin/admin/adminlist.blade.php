@extends('public.admin')
@section('title', '管理员列表页')
@section('content')

    <div class="ibox float-e-margins">
        <div class="ibox-content">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>姓名（账号）</th>
                    <th>添加时间</th>
                    <th>修改时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($res as $v)
                <tr>
                    <td>{{$v->u_id}}</td>
                    <td>{{$v->u_name}}</td>
                    <td>{{$v->u_time}}</td>
                    <td>{{$v->updated_at}}</td>
                    <td>
                        <a href="exit/{{$v->u_id}}">修改</a>
                        &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                        <a href="del?u_id={{$v->u_id}}"><b style="color: red">删除</b></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection