@extends('public.admin')
@section('title', '用户列表页')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>前台用户管理</h5>
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
                    <table class="table table-striped" border="1">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>姓名</th>
                                <th>邮箱</th>
                                <th>手机号</th>
                                <th>头像</th>
                                <th>添加时间</th>
                                <th>修改时间</th>
                                <th>状态</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($res as $v)
                            <tr>
                                <td>
                                    <input type="checkbox" checked class="i-checks" name="input[]">
                                </td>
                                <td>{{$v['u_id']}}</td>
                                <td>{{$v['u_name']}}</td>
                                <td>{{$v['u_email']}}</td>
                                <td>{{$v['u_phone']}}</td>
                                <td><img src="/csdn/{{$v['u_img']}}" width="100"></td>
                                <td>{{$v['u_time']}}</td>
                                <td>{{$v['updated_at']}}</td>
                                <td>
                                    @if($v['u_status']==1)
                                        <a href="javascript:;"><b class="u_status" u_id="{{$v['u_id']}}">正常</b></a>
                                    @else
                                        <a href="javascript:;"><b class="u_status" u_id="{{$v['u_id']}}">冻结</b></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</div>
<script>
    $(function(){
        //点击  更改状态
        $(document).on('click','.u_status',function(){
            var _this=$(this);
            var u_id=_this.attr('u_id');
            //alert(u_id);
            $.ajax({
                url:'/user/status?u_id='+u_id,
                dataType:'json',
                success:function(res){
                    //console.log(res);
                    if(res.code==2002){
                        alert('修改成功');
                        _this.text('冻结');
                        _this.parents().parents('td').prev('td').text(res.updated_at);
                    }else if(res.code==2001){
                        alert('修改成功');
                        _this.text('正常');
                        _this.parents().parents('td').prev('td').text(res.updated_at);
                    }else{
                        alert('修改失败');
                    }
                }
            })
        })
    })
</script>
@endsection