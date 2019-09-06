@extends('public.admin')
@section('title', '博客分类列表页')
@section('content')

   <div class="row">
    <div class="col-sm-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>自定义响应式表格</h5>
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
                <div class="row">
                    <div class="col-sm-5 m-b-xs">
                        <select class="input-sm form-control input-s-sm inline">
                            <option value="0">请选择</option>
                            <option value="1">选项1</option>
                            <option value="2">选项2</option>
                            <option value="3">选项3</option>
                        </select>
                    </div>
                    <div class="col-sm-4 m-b-xs">
                        <div data-toggle="buttons" class="btn-group">
                            <label class="btn btn-sm btn-white">
                                <input type="radio" id="option1" name="options">天</label>
                            <label class="btn btn-sm btn-white active">
                                <input type="radio" id="option2" name="options">周</label>
                            <label class="btn btn-sm btn-white">
                                <input type="radio" id="option3" name="options">月</label>
                        </div>
                    </div>
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

                                <th>全选</th>
                                <th>ID</th>
                                <th>博客分类名称</th>
                                <th>分类地址</th>
                                <th>是否前台显示</th>
                                <th>创建日期</th>
                                <th>修改日期</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(!empty($data))
                        @foreach ($data as $k => $v)
                            <tr>
                                <td>
                                    <input type="checkbox" class="i-checks" name="input[]">
                                </td>
                                <td>{{$v->c_id}}</td>
                                <td><span class="pie">{{$v->c_name}}</span>
                                </td>
                                <td>{{$v->c_url}}</td>
                                <td>@if($v->is_show == 1)
                                        √
                                    @else
                                        ×
                                    @endif</td>

                                <td>{{$v->c_time}}</td>
                                <td>{{$v->updated_at}}</td>                             
                                <td><a href="/blogscate/exit?c_id={{$v->c_id}}">修改</a>&nbsp;|&nbsp;<a href="/blogscate/del?c_id={{$v->c_id}}">下架</a>
                                </td>
                            </tr>  
                        @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</div> 

@endsection