@extends('public.admin')
@section('title', '博客列表页')
@section('content')

<div class="row">
    <div class="col-sm-15">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>blog列表管理</h5>
                 
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="input-group">
                            <input type="text" placeholder="请输入关键词" class="input-sm form-control"> <span class="input-group-btn">
                                <button type="button" class="btn btn-sm btn-primary"> 搜索</button> </span>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>博客标题</th>
                                <th width="10%"  >博客内容</th>
                                 <th>博客图片</th>
                                <th>添加时间</th>
                                <th>浏览量</th>
                                <th>用户id</th>
                                <th>分类id</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($data as $key=>$val)
                            <tr>
                                <td> {{$val->b_id}}</td>
                                <td>{{$val->b_name}}</td>
                                <td width="10%" >{{$val->b_desc}}</td>
                                 <td><img src="/csdn/{{$val->b_img}}" width="100"></td>
                                <td>{{$val->created_at}}</td>
                                <td>{{$val->b_read}}</td>
                                 <td>{{$val->u_id}}</td>
                                 <td>{{$val->c_id}}</td>
                                <td><a href="del?b_id={{$val->b_id}}"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr>
                       @endforeach
                        </tbody>
                    </table>
                    <center>{{$data->appends($query)->links()}}</center>
                </div>

            </div>
        </div>
    </div>

</div>
  


@endsection