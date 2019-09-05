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
    <link href="{{url('index/css')}}/forum_4.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="{{url('index/js')}}/application_7.js" type="text/javascript"></script>
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
<script src="{{url('index/js')}}/jquery-1.11.1.min_6.js" type="text/javascript"></script>
<script type="text/javascript">var jQuery = jQuery.noConflict();// 解决jq与prototype.js命名空间冲突的问题</script>
<script src="{{url('index/js')}}/fixed-sidebar_4.js" type="text/javascript"></script>

    
  <link href="{{url('index/css')}}/passport.css" media="screen" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="page">
<!--      <div id="header">-->
<!--        <div class="clearfix"></div>-->
<!--      </div>-->

      <div id="content" class="clearfix">
        <div id="main">
          



          

<div id="wrap">
  <div class="passport">
    <h1 class="tit_1"><img src="{{url('index/picture')}}/tit_login.gif" title="用户登录" alt="用户登录" />用户登录</h1>
    <!-- login -->
    <div class="login">
      <ul id="tags" class="tab">
        <li class="selectTag"><a class="iteye">ITeye账号登录</a></li>
        <li><a class="csdn" href="/auth/csdn" title="使用 CSDN OAuth 登录">CSDN账号登录</a></li>

      </ul>
      <div id="tagContent">
        <div class="tagContent selectTag" id="tagContent0">
          <!--ITeye form tab-->
          <form action="/login" id="login_form" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="nHxZG3PZSIAaMfTpMpmj84gjgUFcqk3Z60F102oI5xE=" /></div>            <table border="0" cellspacing="0" cellpadding="0" class="table_1">
              <colgroup><col width="60" /><col /></colgroup>
              <tr>
                <th>账号</th>
                <td>
                  <input class="input_1 required" id="user_name" name="name" placeholder="用户名或邮箱" tabindex="1" type="text" value="" />
                </td>
              </tr>
              <tr>
                <th>密码</th>
                <td>
                  <input class="input_1 required" id="password" name="password" tabindex="2" type="password" value="" /></td>
              </tr>
              <tr>
                <th>&nbsp;</th>
                <td>
                  <input id="auto" name="remember_me" tabindex="3" type="checkbox" value="1" />
                  <label for="auto">下次自动登录</label>
                  <a href="/users/forget">忘记密码？</a>
                </td>
              </tr>
              <tr>
                <th>&nbsp;</th>
                <td><input type="submit" name="button" id="button" value="登　录" class="btn_1 submit" tabindex="4" /></td>
              </tr>
            </table>
          </form>
        </div>
      </div>

      <div class="third">
        第三方账号登录：
        <!--<a href="/auth/google" title="Google帐号登录"><img src="{{url('index/picture')}}/google.png" alt="Google账号登录" /></a>-->
        <a href="/auth/weibo" title="新浪微博帐号登录"><img src="{{url('index/picture')}}/sina.png" alt="新浪微博账号登录" /></a>
        <!--<a href="/auth/tqq" title="腾讯微博登录"><img src="{{url('index/picture')}}/t.qq.png" alt="腾讯微博登录" /></a>-->
        <!--<a href="/auth/qzone" title="腾讯登录"><img src="{{url('index/picture')}}/qq.png" alt="腾讯账号登录" /></a>-->
      </div>
    </div>
    <div class="login_info">
  <dl>
    <dt>ITeye是软件开发深度交流社区,加入ITeye</dt>
    <dd>你能够：</dd>
    <dd>
    <ul>
      <li>加入优质的深度技术论坛</li>
      <li>马上拥有新颖的技术博客</li>
      <li>获得技术群组的人际交往</li>
      <li>获得职业发展方面的建议</li>
    </ul>
    </dd>
   
  </dl>
</div>

  </div>
</div>
<!-- 登录的 js-->
  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-127895514-6');
  </script>
  <!-- 完 -->
<script type="text/javascript">
  new Validation("login_form");
  new Validation("csdn_form");
</script>

        </div>
@endsection