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
    <link href="{{url('index/css')}}/forum_5.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="{{url('index/js')}}/application_8.js" type="text/javascript"></script>
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
<script src="{{url('index/js')}}/jquery-1.11.1.min_7.js" type="text/javascript"></script>
<script type="text/javascript">var jQuery = jQuery.noConflict();// 解决jq与prototype.js命名空间冲突的问题</script>
<script src="{{url('index/js')}}/fixed-sidebar_5.js" type="text/javascript"></script>

    
  <link href="{{url('index/css')}}/passport_1.css" media="screen" rel="stylesheet" type="text/css" />
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
    <h1 class="tit_2"><img src="{{url('index/picture')}}/tit_reg.gif" title="个人用户注册" alt="个人用户注册" />个人用户注册</h1>
    <!-- register info -->
    <div class="reg_info">
      <ul class="reg_step">
        <li class="select"><span class="step_1">填写注册信息</span></li>
        <li><span class="step_2">通过邮件确认</span></li>
        <li><span class="step_3">注册成功</span></li>
      </ul>
      <div class="reg_info_con">
        <form action="/users" id="signup_form" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="onf7bkfkZyfFxZdm0Sfj7/1N1upPES1voLWfV4M7/r0=" /></div>
          <table border="0" cellspacing="0" cellpadding="0" class="table_2">
            <colgroup><col width="85" /><col /></colgroup>
            <tr>
              <th valign="top"><span class="must">*</span>用户名:</th>
              <td><input class="input_1 required min-length-3 validate-ajax-/users/validate_user_name" id="user_name" maxlength="20" name="user[name]" placeholder="全站唯一" size="30" type="text" />
                  <p>3-20个字符，允许中文，英文字母、数字和符号.-_。为了避免被垃圾邮件抓取，请勿使用邮件地址作为用户名</p></td>
            </tr>
            <tr>
              <th valign="top"><span class="must">*</span>邮件地址:</th>
              <td><input class="input_1 required validate-email validate-ajax-/users/validate_email" id="user_email" name="user[email]" size="30" type="text" />
                <ul>
                  <li>请不要使用Yahoo邮箱注册，Yahoo邮件服务器会拒绝ITeye发送的邮件</li>
                  <li>如果您没有收到ITeye发送的邮件，请注意查看您邮箱中的垃圾邮件。</li>
                  <li>并且把来自ITeye的邮件设置成不是垃圾邮件，方便接受站内邮件。</li>
                </ul>
              </td>
            </tr>
            <tr>
              <th valign="top"><span class="must">*</span>密码:</th>
              <td><input class="required min-length-6 max-length-20 validate-ajax-/users/validate_password input_1" id="user_password" name="user[password]" placeholder="6-20个字符" size="30" type="password" />
                <p>请选用安全的密码，不允许使用只包含纯数字，纯大写或者小写字母的密码</p></td>
            </tr>
            <tr>
              <th><span class="must">*</span>确认密码:</th>
              <td><input class="required equals-user_password input_1" id="user_password_confirmation" name="user[password_confirmation]" size="30" type="password" /></td>
            </tr>
            <tr>
              <td colspan="2" class="line">&nbsp;</td>
            </tr>
            <tr>
              <th>来自:</th>
              <td class="from">
                <div class="from">
                  <input class="comboText" id="user_fromto" name="user[fromto]" placeholder="填写或选择" size="30" type="text" />
                  <select class="select_1 combobox" id="user_fromto" name="user[fromto]"><option value=""></option>
<option value="北京">北京</option>
<option value="上海">上海</option>
<option value="广州">广州</option>
<option value="深圳">深圳</option>
<option value="杭州">杭州</option>
<option value="南京">南京</option>
<option value="成都">成都</option>
<option value="武汉">武汉</option>
<option value="西安">西安</option>
<option value="大连">大连</option>
<option value="青岛">青岛</option>
<option value="济南">济南</option>
<option value="天津">天津</option>
<option value="沈阳">沈阳</option>
<option value="苏州">苏州</option>
<option value="厦门">厦门</option>
<option value="珠海">珠海</option></select>
                  <span>如果列表中没有您的城市，可直接输入</span>
                </div>
              </td>
            </tr>
            <tr>
              <th>性别:</th>
              <td>
                <select class="select_2" id="user_gender" name="user[gender]"><option value=""></option>
<option value="1">男</option>
<option value="2">女</option></select>
              </td>
            </tr>
            <tr>
              <th>职业:</th>
              <td>
                <select class="select_1" id="user_occ" name="user[occ]"><option value=""></option>
<option value="CEO/总裁">CEO/总裁</option>
<option value="CTO/CIO/技术总监">CTO/CIO/技术总监</option>
<option value="部门经理/部门主管">部门经理/部门主管</option>
<option value="项目经理/项目主管">项目经理/项目主管</option>
<option value="高级软件架构师">高级软件架构师</option>
<option value="高级软件工程师">高级软件工程师</option>
<option value="需求分析师">需求分析师</option>
<option value="咨询师">咨询师</option>
<option value="售前工程师">售前工程师</option>
<option value="软件实施顾问">软件实施顾问</option>
<option value="软件工程师">软件工程师</option>
<option value="软件测试">软件测试</option>
<option value="技术支持/维护工程师">技术支持/维护工程师</option>
<option value="系统工程师SA">系统工程师SA</option>
<option value="数据库DBA">数据库DBA</option>
<option value="其他">其他</option></select>
              </td>
            </tr>
            <tr>
              <th>行业:</th>
              <td>
                <select class="select_1" id="user_industry" name="user[industry]"><option value=""></option>
<option value="金融">金融</option>
<option value="电信">电信</option>
<option value="互联网">互联网</option>
<option value="物流">物流</option>
<option value="电子政务">电子政务</option>
<option value="旅游">旅游</option>
<option value="制造">制造</option>
<option value="教育">教育</option>
<option value="医疗">医疗</option>
<option value="交通">交通</option>
<option value="移动和手机应用">移动和手机应用</option>
<option value="嵌入式">嵌入式</option>
<option value="网络游戏">网络游戏</option>
<option value="咨询">咨询</option>
<option value="餐饮零售">餐饮零售</option>
<option value="欧美外包">欧美外包</option>
<option value="日本外包">日本外包</option>
<option value="原厂商">原厂商</option>
<option value="SOHO">SOHO</option>
<option value="其他">其他</option></select>
              </td>
            </tr>
            <tr>
              <th>工作年限:</th>
              <td>
                <select class="select_1" id="user_workyear" name="user[workyear]"><option value=""></option>
<option value="在读学生">在读学生</option>
<option value="应届毕业生">应届毕业生</option>
<option value="一年以上">一年以上</option>
<option value="两年以上">两年以上</option>
<option value="三年以上">三年以上</option>
<option value="五年以上">五年以上</option>
<option value="八年以上">八年以上</option>
<option value="十年以上">十年以上</option>
<option value="十五年以上">十五年以上</option>
<option value="二十年以上">二十年以上</option></select>
              </td>
            </tr>
            <tr>
              <th><span class="must">*</span>验证码:</th>
              <td>
                
                <input class="input_3 required" id="user_captcha" name="user[captcha]" size="30" type="text" value="" /><input id="user_captcha_key" name="user[captcha_key]" type="hidden" value="ba223ca0f544ccd4b227a58141e0223e56919023" /><span><img alt="Simple_captcha?distortion=high&amp;image_style=simply_blue&amp;simple_captcha_key=ba223ca0f544ccd4b227a58141e0223e56919023&amp;time=1567579729" src="{{url('index/picture')}}/1aab92f438cb408085748e853dc24c8f.gif" /></span>
              </td>
            </tr>
            <tr>
              <th>&nbsp;</th>
              <td><input name="checkbox" type="checkbox" id="auto" checked="checked" />
                <label for="auto">我已经阅读并同意</label>
                <a href="/topic/29434" target="_blank">注册条款</a></td>
            </tr>
          </table>
          <div class="btn_area_1">
            <input type="submit" name="button" id="button" value="注　册" class="btn_1" />
          </div>
        </form>
      </div>
    </div>
    <!-- company register -->
    <!--<div class="company_reg">-->
      <!--<form>-->
        <!--<div class="btn_area_2"><a href="http://hire.pongo.cn/organ/register" class="btn_3">企业用户注册</a></div>-->
        <!--<dl>-->
          <!--<dt>如果您想发布招聘信息，请注册成为企业会员。-->
          <!--<br>-->
          <!--现在加入会员，即可享受7天线上招聘免费适用服务。</dt>-->
          <!--<dd>欢迎注册iteye的会员。注册成为会员，注册成功，帐号即时开通，马上能够读站内短信，能够修改个人资料和密码，邀请朋友和推荐文章。</dd>-->
          <!--<dd>注册满一天以后，您将拥有全部权限，包括在论坛发技术帖和招聘帖，对别人的帖子进行评分，下载附件，写博客，发站内短信，申请专栏和发起群组等。</dd>-->
          <!--<dd>如果您是第一次使用ITeye，请仔细阅读<a href="/index/help" target="_blank">ITeye帮助</a></dd>-->
          <!--<dd class="last">有任何问题，可以webmaster<img src='{{url('index/picture')}}/email.gif' alt="Email" />iteye.com， ITeye和您一同成长。</dd>-->
        <!--</dl>-->
      <!--</form>-->
    <!--</div>-->

  </div>
</div>

<script type="text/javascript">
  new Validation("signup_form");
  $$('.combobox').each(function(el){
    el.observe('change', function() {
      var input = $(this).previous('input[type=text]');
      input.value = $(this).value;
      Validation.validateElement(input);
    });
  });

  // ie6 does has bug with z-index
  if(navigator.userAgent.indexOf('MSIE') !== -1) {
    $$('div.from')[0].setStyle("position:static;");
    $$('select.combobox')[0].setStyle("position:static;width:80px;");
    $$('input.comboText')[0].setStyle("position:static;height:12px; padding: 4px 5px; border:solid 1px #ccc;");
    $$('div.from span')[0].setStyle("margin:0;");
  }
</script>

        </div>
@endsection