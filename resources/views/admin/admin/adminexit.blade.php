@extends('public.admin')
@section('title', '管理员修改视图')
@section('content')

    <div style="margin-top: 50px">
        <form class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-3 control-label">用户名：</label>
                <div class="col-sm-8">
                    <input type="text" placeholder="用户名" class="form-control" id="u_name" value="{{$res->u_name}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">密码：</label>
                <div class="col-sm-8">
                    <input type="password" placeholder="密码" class="form-control" id="u_pwd">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">确认密码：</label>
                <div class="col-sm-8">
                    <input type="password" placeholder="确认密码" class="form-control" id="u_pwd1">
                </div>
            </div>
            <input type="hidden" id="u_id" value="{{$res->u_id}}">
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-8">
                    <button class="btn btn-sm btn-info" type="submit">修 改</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        $(function(){
            //点击获取
            $(".btn-info").click(function(){
                //获取邮箱
                var u_name=$("#u_name").val();
                var u_pwd=$('#u_pwd').val();
                var u_pwd1=$('#u_pwd1').val();
                var u_id=$('#u_id').val();

                //验证
                if(u_name==''){
                    alert('账号必填');
                    return false;
                }
                if(u_pwd==''){
                    alert('密码必填');
                    return false;
                }
                if(u_pwd!=u_pwd1){
                    alert('两次密码不一致');
                    return false;
                }

                $.post(
                    "{{url('/admin/exitdo')}}",
                    {u_name:u_name,u_pwd:u_pwd,u_id:u_id},
                    function(res){
                        //console.log(res);
                        if(res.code==200){
                            alert(res.count);
                            location.href="{{url('/admin/list')}}"
                        }else{
                            alert(res.count);
                            return false;
                        }
                    },
                    'json'
                );
                return false;
            })
        });
    </script>
@endsection
