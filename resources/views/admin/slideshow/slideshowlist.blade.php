@extends('public.admin')
@section('title', '轮播图列表页')
@section('content')
	
                <div class="col-sm-11">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>轮播图展示</h5>
 
                    </div>
                    <div class="ibox-content">

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>简介</th>
                                    <th>图片</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                               @foreach($data as $key=>$val)
                                <tr>
                                    <td>{{$val->s_id}} </td>
                                    <td>{{$val->s_desc}} </td>
                                    <td><img src="/csdn/{{$val->s_img}}" width="100"></td>
                                    <td class="text-navy"> <a class="btn btn-danger btn-rounded" href="del?s_id={{$val->s_id}}">删除</a></td>
                                </tr>
                                 @endforeach
                            </tbody>
                        </table>
                         <center>{{$data->appends($query)->links()}}</center>
                    </div>
                </div>
            </div>
        </div>

@endsection