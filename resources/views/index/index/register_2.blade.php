@extends('public.index')
@section('title', '')
@section('content')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>ITeye - Java编程 Hibernate Spring AJAX Agile 敏捷软件开发 ruby on rails - 软件开发交流社区</title>
    <meta name="description" content="Java编程,Spring Struts Webwork框架深入,XMLHTTP AJAX开发,Java Web开发,Java企业应用,Java设计模式,Java开源框架,Java应用服务器,Rich Client讨论,Ruby编程,Ruby DSL开发,Ruby on rails实践,JavaScript编程,敏捷软件开发XP TDD,软件配置管理,软件测试,项目管理UML,数据库,C#/.net C/C++ Erlang/FP PHP/Linux平台,精通Hibernate" />
    <meta name="keywords"  content="Java编程 Spring框架 AJAX技术 Agile敏捷软件开发 ruby on rails实践 软件工程 讨论 论坛 ITeye深度技术社区" />
    <meta name="report" content='{"pid":"iteye"}'>
    <link rel="shortcut icon" href="{{url('index/images')}}/favicon.ico" type="image/x-icon" />
    <link href="/rss" rel="alternate" title="ITeye技术网站RSS频道关注" type="application/rss+xml" />
    <link rel="search" type="application/opensearchdescription+xml" href="/open_search.xml" title="ITeye" />
    <link href="{{url('index/css')}}/forum_6.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="{{url('index/js')}}/application_9.js" type="text/javascript"></script>
    <script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?e19a8b00cf63f716d774540875007664";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<style>
/* 折叠效果 */
.hide-main-content{
    position: relative;
}
.hide-article-box {
    display: none;
    position: absolute;
    z-index: 9999;
    bottom: -1px;
    width: 100%;
    padding-top: 160px;
    background-image: -webkit-gradient(linear,left top, left bottom,from(rgba(255,255,255,0)),color-stop(70%, #fff));
    background-image: linear-gradient(-180deg,rgba(255,255,255,0) 0%,#fff 70%);
}
.hide-article-box #btn-readmore{
    color: #ca0c16;
    border: 1px solid #ca0c16;
    margin: 10px auto;
    padding: 0 8px;
    display: block;
    font-size: 14px;
    border-radius: 4px;
    text-align: center;
    background-color: transparent;
    height: 34px;
    width: 74px;
    line-height: 32px;
    min-width: 72px;
    cursor: pointer;
}
.hide-article-box #btn-readmore:hover{
    background: #ca0c16;
    color:#fff;
    text-decoration: none;
}
</style>
<!-- 因INS广告原因 需要提前引入jquery -->
<script src="{{url('index/js')}}/jquery-1.11.1.min_8.js" type="text/javascript"></script>
<script type="text/javascript">var jQuery = jQuery.noConflict();// 解决jq与prototype.js命名空间冲突的问题</script>
<script src="{{url('index/js')}}/fixed-sidebar_6.js" type="text/javascript"></script>

    
  <link href="{{url('index/css')}}/passport_2.css" media="screen" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="page">
<!--      <div id="header">-->
<!--        <div class="clearfix"></div>-->
<!--      </div>-->

      <div id="content" class="clearfix">
        <div id="main">
          



          

<div id="wrap">
  <div class="register">
    <h1 class="tit_2"><img src="{{url('index/picture')}}/tit_reg_1.gif" title="个人用户注册" alt="个人用户注册" />个人用户注册</h1>
    <!-- register info -->
    <div class="reg_info">
      <ul class="reg_step">
        <li class="suc"><span class="step_1">填写注册信息</span></li>
        <li class="select"><span class="step_2">通过邮件确认</span></li>
        <li><span class="step_3">注册成功</span></li>
      </ul>
      <div class="reg_info_con">
        <ul class="confirm">
          <li class="send">确认信已经成功发送到你的邮箱<span class="cue">280654805@qq.com</span>了<br />查看收件箱...点击确认信中的链接地址，就可以完成注册了！</li>
          <li class="ques">如果你很长时间还没有收到ITeye的确认信，请... <br />确认邮件是否被你提供的邮箱系统自动拦截，或被误认为垃圾邮件放到垃圾箱了<br />如果你确认邮箱地址正确，可以请求<a href="/users/resend_active_key/4153d91c-5cea-35ba-a76f-ba5b005b8cbd">再次发送确认信</a><br />如果还不能解决你的问题，可以发邮件给ITeye管理员寻求帮助：webmaster<img src='{{url('index/picture')}}/email_1.gif' alt="Email" />iteye.com</li>
        </ul>
      </div>
    </div>
    <!-- company register -->
    <div class="company_reg">
      <div class="btn_area_2"><a href="/companies/new" class="btn_3">企业用户注册</a></div>
      <dl>
        <dt>如果您是公司用户想发布招聘信息，请注册企业会员</dt>
        <dd>欢迎注册iteye的会员。注册成为会员，注册成功，帐号即时开通，马上能够读站内短信，能够修改个人资料和密码，邀请朋友和推荐文章。</dd>
        <dd>注册满一天以后，您将拥有全部权限，包括在论坛发技术帖和招聘帖，对别人的帖子进行评分，下载附件，写博客，发站内短信，申请专栏和发起群组等。</dd>
        <dd>如果您是第一次使用ITeye，请仔细阅读<a href="/index/help" target="_blank">ITeye帮助</a></dd>
        <dd class="last">有任何问题，可以webmaster<img src='{{url('index/picture')}}/email_1.gif' alt="Email" />iteye.com， ITeye和您一同成长。</dd>
      </dl>
    </div>
  </div>
</div>

        </div>
@endsection