@extends('public.index')
@section('title', '')
@section('content')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>ITeye论坛频道首页</title>
    <meta name="description" content="ITeye论坛频道，为软件开发人员提供高质量的交流社区，交流内容主要包括：Java编程，Java企业应用开发，微软.net编程，Ruby on rails，AJAX，Agile敏捷开发，综合技术讨论，求职和招聘交流等" />
    <meta name="keywords" content="论坛, Java, Ruby on Rails, AJAX, .net, Agile, 敏捷开发, 招聘" />
    <meta name="report" content='{"pid":"iteye"}'>
    <link rel="shortcut icon" href="{{url('index/images')}}/favicon.ico" type="image/x-icon" />
    <link href="/rss/forum" rel="alternate" title="ITeye论坛" type="application/rss+xml" />
    <link rel="search" type="application/opensearchdescription+xml" href="/open_search.xml" title="ITeye" />
    <link href="{{url('index/css')}}/forum_2.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="{{url('index/js')}}/application_5.js" type="text/javascript"></script>
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
<script src="{{url('index/js')}}/jquery-1.11.1.min_5.js" type="text/javascript"></script>
<script type="text/javascript">var jQuery = jQuery.noConflict();// 解决jq与prototype.js命名空间冲突的问题</script>
<script src="{{url('index/js')}}/fixed-sidebar_3.js" type="text/javascript"></script>

      </head>
  <body>
    <div>
      <!-- Ads ID 251 -->
      
      
    </div>
    <div id="page">
<!--      <div id="header">-->
<!--        <div class="clearfix"></div>-->
<!--      </div>-->

      <div id="content" class="clearfix">
        <div id="main">
          



          <div id="forum_tab_show" class="clearfix">
  <div id="slides">
    <!-- Ads ID 249 -->
    
    
      <script type="text/javascript" src="{{url('index/js')}}/pxfb.js"></script>
    
  </div>
  <div id="recommended_jobs" class="box" onmousemove="marqueeing = false;" onmouseout="marqueeing = true;">
    <!-- Ads ID 250 -->
    
    
      <script type="text/javascript" src="{{url('index/js')}}/pxfb.js"></script>
    
  </div>
  <div class="last">
    <ul>
      <li><a href="https://www.iteye.com/wiki/digest?category_id=36">热门帖电子书下载</a></li>
      <li><a href="/forums/my_topics">我参与的论坛讨论</a></li>
      <li><a href="/forums/new_topics">本月最新技术讨论</a></li>
      <li><a href="/forums/hot_topics">本月热点技术讨论</a></li>
      <li><a href="/forums/top_view">帖子总点击排行榜</a></li>
      <li><a href="/forums/top_posts">帖子总回复排行榜</a></li>
    </ul>
  </div>
</div>
  <div class="bbs_fath">
  <h2>
    <span class="left"><img alt="移动开发技术" src="{{url('index/picture')}}//bbs_ico_normal_new_16.png" />
      <span class="title"><a href="/forums/board/mobile">移动开发技术论坛</a></span>
      
        <span class="last_topic"><a href="/topic/1148725">联想笔记本l电脑专用GHOST XP游戏版V2019.09</a> <a href="/post/2431306" class="last_post" title="查看最新回复">&nbsp;</a> 19 小时前 <a href='https://www.iteye.com/blog/user/djaw653' target='_blank' title='djaw653'>djaw653</a></span>
      
    </span>
    <span class="amount">4237主题，23814回帖<a href="/forums/board/mobile"><img src="{{url('index/picture')}}//arrow_1.gif" alt="" /></a></span>
  </h2>
  
    <div class="con">
              <dl class="bbs_son">
          <dt><img alt="Android" src="{{url('index/picture')}}//bbs_ico_android.png" /></dt>
          <dd><strong><a href="/forums/tag/Android">Android</a></strong><span class="amount">2290主题 / 16044回帖</span></dd>
        </dl>
              <dl class="bbs_son">
          <dt><img alt="iOS" src="{{url('index/picture')}}//bbs_ico_ios.png" /></dt>
          <dd><strong><a href="/forums/tag/iOS">iOS</a></strong><span class="amount">441主题 / 2581回帖</span></dd>
        </dl>
              <dl class="bbs_son">
          <dt><img alt="wp7" src="{{url('index/picture')}}//bbs_ico_wp7.png" /></dt>
          <dd><strong><a href="/forums/tag/wp7">wp7</a></strong><span class="amount">154主题 / 338回帖</span></dd>
        </dl>
            <div class="tags">
                  <a href="/forums/tag/J2ME">J2ME</a>
                  <a href="/forums/tag/%E7%A7%BB%E5%8A%A8%E7%BB%BC%E5%90%88">移动综合</a>
                  <a href="/forums/tag/Symbian">Symbian</a>
                  <a href="/forums/tag/BlackBerry">BlackBerry</a>
                  <a href="/forums/tag/WAP">WAP</a>
              </div>
    </div>
  
  
</div>

  <div class="bbs_fath">
  <h2>
    <span class="left"><img alt="Web前端技术" src="{{url('index/picture')}}//bbs_ico_normal_new_16.png" />
      <span class="title"><a href="/forums/board/web">Web前端技术论坛</a></span>
      
        <span class="last_topic"><a href="/topic/1148647">AutoCode上线VUE和bootstrap4前端模...</a> <a href="/post/2431225" class="last_post" title="查看最新回复">&nbsp;</a> 2019-08-04 <a href='https://www.iteye.com/blog/user/sniciq' target='_blank' title='sniciq'>sniciq</a></span>
      
    </span>
    <span class="amount">10879主题，78302回帖<a href="/forums/board/web"><img src="{{url('index/picture')}}//arrow_1.gif" alt="" /></a></span>
  </h2>
  
    <div class="con">
              <dl class="bbs_son">
          <dt><img alt="JavaScript" src="{{url('index/picture')}}//bbs_ico_javascript.png" /></dt>
          <dd><strong><a href="/forums/tag/JavaScript">JavaScript</a></strong><span class="amount">6995主题 / 48633回帖</span></dd>
        </dl>
              <dl class="bbs_son">
          <dt><img alt="HTML5" src="{{url('index/picture')}}//bbs_ico_html5.png" /></dt>
          <dd><strong><a href="/forums/tag/HTML5">HTML5</a></strong><span class="amount">994主题 / 3380回帖</span></dd>
        </dl>
              <dl class="bbs_son">
          <dt><img alt="jQuery" src="{{url('index/picture')}}//bbs_ico_jquery.png" /></dt>
          <dd><strong><a href="/forums/tag/jQuery">jQuery</a></strong><span class="amount">1753主题 / 9785回帖</span></dd>
        </dl>
              <dl class="bbs_son">
          <dt><img alt="CSS" src="{{url('index/picture')}}//bbs_ico_css.png" /></dt>
          <dd><strong><a href="/forums/tag/CSS">CSS</a></strong><span class="amount">995主题 / 3638回帖</span></dd>
        </dl>
            <div class="tags">
                  <a href="/forums/tag/EXT">EXT</a>
                  <a href="/forums/tag/Ajax">Ajax</a>
                  <a href="/forums/tag/Web%E7%BB%BC%E5%90%88">Web综合</a>
                  <a href="/forums/tag/%E7%95%8C%E9%9D%A2%E8%AE%BE%E8%AE%A1">界面设计</a>
                  <a href="/forums/tag/DWR">DWR</a>
              </div>
    </div>
  
  
</div>

  <div class="bbs_fath">
  <h2>
    <span class="left"><img alt="Java企业应用" src="{{url('index/picture')}}//bbs_ico_normal_new_16.png" />
      <span class="title"><a href="/forums/board/Java">Java企业应用论坛</a></span>
      
        <span class="last_topic"><a href="/topic/1148718">Spark进阶-大数据离线与实时项目实战</a> <a href="/post/2431299" class="last_post" title="查看最新回复">&nbsp;</a> 2019-08-30 <a href='https://www.iteye.com/blog/user/chengdada8' target='_blank' title='成大大的'>成大大的</a></span>
      
    </span>
    <span class="amount">24069主题，226138回帖<a href="/forums/board/Java"><img src="{{url('index/picture')}}//arrow_1.gif" alt="" /></a></span>
  </h2>
  
    <div class="con">
              <dl class="bbs_son">
          <dt><img alt="Hibernate" src="{{url('index/picture')}}//bbs_ico_hibernate.png" /></dt>
          <dd><strong><a href="/forums/tag/Hibernate">Hibernate</a></strong><span class="amount">3846主题 / 26606回帖</span></dd>
        </dl>
              <dl class="bbs_son">
          <dt><img alt="Spring" src="{{url('index/picture')}}//bbs_ico_spring.png" /></dt>
          <dd><strong><a href="/forums/tag/Spring">Spring</a></strong><span class="amount">2849主题 / 21962回帖</span></dd>
        </dl>
              <dl class="bbs_son">
          <dt><img alt="Struts" src="{{url('index/picture')}}//bbs_ico_struts.png" /></dt>
          <dd><strong><a href="/forums/tag/Struts">Struts</a></strong><span class="amount">3048主题 / 20979回帖</span></dd>
        </dl>
              <dl class="bbs_son">
          <dt><img alt="iBATIS" src="{{url('index/picture')}}//bbs_ico_ibatis.png" /></dt>
          <dd><strong><a href="/forums/tag/iBATIS">iBATIS</a></strong><span class="amount">445主题 / 3959回帖</span></dd>
        </dl>
              <dl class="bbs_son">
          <dt><img alt="企业应用" src="{{url('index/picture')}}//bbs_ico_business.png" /></dt>
          <dd><strong><a href="/forums/tag/%E4%BC%81%E4%B8%9A%E5%BA%94%E7%94%A8">企业应用</a></strong><span class="amount">5652主题 / 55174回帖</span></dd>
        </dl>
              <dl class="bbs_son">
          <dt><img alt="Lucene" src="{{url('index/picture')}}//bbs_ico_lucene.png" /></dt>
          <dd><strong><a href="/forums/tag/Lucene">Lucene</a></strong><span class="amount">288主题 / 1752回帖</span></dd>
        </dl>
              <dl class="bbs_son">
          <dt><img alt="SOA" src="{{url('index/picture')}}//bbs_ico_soa.png" /></dt>
          <dd><strong><a href="/forums/tag/SOA">SOA</a></strong><span class="amount">577主题 / 4239回帖</span></dd>
        </dl>
            <div class="tags">
                  <a href="/forums/tag/Java%E7%BB%BC%E5%90%88">Java综合</a>
                  <a href="/forums/tag/Tomcat">Tomcat</a>
                  <a href="/forums/tag/%E8%AE%BE%E8%AE%A1%E6%A8%A1%E5%BC%8F">设计模式</a>
                  <a href="/forums/tag/OO">OO</a>
                  <a href="/forums/tag/JBoss">JBoss</a>
              </div>
    </div>
  
  
</div>

  <div class="bbs_fath">
  <h2>
    <span class="left"><img alt="编程语言技术" src="{{url('index/picture')}}//bbs_ico_normal_new_16.png" />
      <span class="title"><a href="/forums/board/language">编程语言技术论坛</a></span>
      
        <span class="last_topic"><a href="/topic/1148728">深度学习如何入门</a> <a href="/post/2431309" class="last_post" title="查看最新回复">&nbsp;</a> 1 小时前 <a href='https://www.iteye.com/blog/user/2785938474' target='_blank' title='加班使我又白又胖'>加班使我又白又胖</a></span>
      
    </span>
    <span class="amount">7877主题，50042回帖<a href="/forums/board/language"><img src="{{url('index/picture')}}//arrow_1.gif" alt="" /></a></span>
  </h2>
  
    <div class="con">
              <dl class="bbs_son">
          <dt><img alt="Ruby" src="{{url('index/picture')}}//bbs_ico_ruby.png" /></dt>
          <dd><strong><a href="/forums/tag/Ruby">Ruby</a></strong><span class="amount">1310主题 / 9538回帖</span></dd>
        </dl>
              <dl class="bbs_son">
          <dt><img alt="Python" src="{{url('index/picture')}}//bbs_ico_python.png" /></dt>
          <dd><strong><a href="/forums/tag/Python">Python</a></strong><span class="amount">750主题 / 4552回帖</span></dd>
        </dl>
              <dl class="bbs_son">
          <dt><img alt="PHP" src="{{url('index/picture')}}//bbs_ico_php.png" /></dt>
          <dd><strong><a href="/forums/tag/PHP">PHP</a></strong><span class="amount">1185主题 / 4294回帖</span></dd>
        </dl>
              <dl class="bbs_son">
          <dt><img alt="Flash" src="{{url('index/picture')}}//bbs_ico_flash.png" /></dt>
          <dd><strong><a href="/forums/tag/Flash">Flash</a></strong><span class="amount">857主题 / 3881回帖</span></dd>
        </dl>
              <dl class="bbs_son">
          <dt><img alt="C++" src="{{url('index/picture')}}//bbs_ico_cpp.png" /></dt>
          <dd><strong><a href="/forums/tag/C++">C++</a></strong><span class="amount">450主题 / 2635回帖</span></dd>
        </dl>
              <dl class="bbs_son">
          <dt><img alt=".net" src="{{url('index/picture')}}//bbs_ico_.net.png" /></dt>
          <dd><strong><a href="/forums/tag/.net">.net</a></strong><span class="amount">505主题 / 2357回帖</span></dd>
        </dl>
            <div class="tags">
                  <a href="/forums/tag/Rails">Rails</a>
                  <a href="/forums/tag/Flex">Flex</a>
                  <a href="/forums/tag/C">C</a>
                  <a href="/forums/tag/C%23">C#</a>
                  <a href="/forums/tag/Windows">Windows</a>
              </div>
    </div>
  
  
</div>

  <div class="bbs_fath">
  <h2>
    <span class="left"><img alt="综合技术" src="{{url('index/picture')}}//bbs_ico_normal_new_16.png" />
      <span class="title"><a href="/forums/board/Tech">综合技术论坛</a></span>
      
        <span class="last_topic"><a href="/topic/1148724">深度舆情：拯救企业口碑 还原事件真相</a> <a href="/post/2431305" class="last_post" title="查看最新回复">&nbsp;</a> 20 小时前 <a href='https://www.iteye.com/blog/user/48766277' target='_blank' title='火箭少女101'>火箭少女101</a></span>
      
    </span>
    <span class="amount">7948主题，69836回帖<a href="/forums/board/Tech"><img src="{{url('index/picture')}}//arrow_1.gif" alt="" /></a></span>
  </h2>
  
    <div class="con">
              <dl class="bbs_son">
          <dt><img alt="Linux" src="{{url('index/picture')}}//bbs_ico_linux.png" /></dt>
          <dd><strong><a href="/forums/tag/Linux">Linux</a></strong><span class="amount">1275主题 / 4049回帖</span></dd>
        </dl>
              <dl class="bbs_son">
          <dt><img alt="数据库" src="{{url('index/picture')}}//bbs_ico_database.png" /></dt>
          <dd><strong><a href="/forums/tag/%E6%95%B0%E6%8D%AE%E5%BA%93">数据库</a></strong><span class="amount">1675主题 / 7305回帖</span></dd>
        </dl>
              <dl class="bbs_son">
          <dt><img alt="敏捷编程" src="{{url('index/picture')}}//bbs_ico_quickdev.png" /></dt>
          <dd><strong><a href="/forums/tag/%E6%95%8F%E6%8D%B7%E7%BC%96%E7%A8%8B">敏捷编程</a></strong><span class="amount">491主题 / 7739回帖</span></dd>
        </dl>
              <dl class="bbs_son">
          <dt><img alt="数据结构" src="{{url('index/picture')}}//bbs_ico_struct.png" /></dt>
          <dd><strong><a href="/forums/tag/%E6%95%B0%E6%8D%AE%E7%BB%93%E6%9E%84">数据结构</a></strong><span class="amount">460主题 / 3657回帖</span></dd>
        </dl>
              <dl class="bbs_son">
          <dt><img alt="软件测试" src="{{url('index/picture')}}//bbs_ico_test.png" /></dt>
          <dd><strong><a href="/forums/tag/%E8%BD%AF%E4%BB%B6%E6%B5%8B%E8%AF%95">软件测试</a></strong><span class="amount">321主题 / 2440回帖</span></dd>
        </dl>
              <dl class="bbs_son">
          <dt><img alt="项目管理" src="{{url('index/picture')}}//bbs_ico_project.png" /></dt>
          <dd><strong><a href="/forums/tag/%E9%A1%B9%E7%9B%AE%E7%AE%A1%E7%90%86">项目管理</a></strong><span class="amount">1226主题 / 23307回帖</span></dd>
        </dl>
            <div class="tags">
                  <a href="/forums/tag/Oracle">Oracle</a>
                  <a href="/forums/tag/%E4%BA%92%E8%81%94%E7%BD%91">互联网</a>
                  <a href="/forums/tag/%E7%BC%96%E7%A8%8B%E7%BB%BC%E5%90%88">编程综合</a>
                  <a href="/forums/tag/Erlang">Erlang</a>
                  <a href="/forums/tag/MySQL">MySQL</a>
              </div>
    </div>
  
  
</div>

  <div class="bbs_fath">
  <h2>
    <span class="left"><img alt="入门技术" src="{{url('index/picture')}}//bbs_ico_normal_new_16.png" />
      <span class="title"><a href="/forums/board/New">入门技术论坛</a></span>
      
        <span class="last_topic"><a href="/topic/1148684">《开源安全运维平台OSSIM疑难解析--入门篇》正式出版</a> <a href="/post/2431263" class="last_post" title="查看最新回复">&nbsp;</a> 2019-08-16 <a href='https://www.iteye.com/blog/user/97140' target='_blank' title='97140'>97140</a></span>
      
    </span>
    <span class="amount">19105主题，73962回帖<a href="/forums/board/New"><img src="{{url('index/picture')}}//arrow_1.gif" alt="" /></a></span>
  </h2>
  
  
</div>

  <div class="bbs_fath">
  <h2>
    <span class="left"><img alt="招聘求职" src="{{url('index/picture')}}//bbs_ico_normal_new_16.png" />
      <span class="title"><a href="/forums/board/Job">招聘求职论坛</a></span>
      
        <span class="last_topic"><a href="/topic/1148723">美资电商内推- ios架构师—Coupang外卖业务 ...</a> <a href="/post/2431304" class="last_post" title="查看最新回复">&nbsp;</a> 前天 <a href='https://www.iteye.com/blog/user/yanli929' target='_blank' title='yanli929'>yanli929</a></span>
      
    </span>
    <span class="amount">12221主题，261120回帖<a href="/forums/board/Job"><img src="{{url('index/picture')}}//arrow_1.gif" alt="" /></a></span>
  </h2>
  
  
</div>

  <div class="bbs_fath">
  <h2>
    <span class="left"><img alt="海阔天空" src="{{url('index/picture')}}//bbs_ico_normal_new_16.png" />
      <span class="title"><a href="/forums/board/Life">海阔天空论坛</a></span>
      
        <span class="last_topic"><a href="/topic/1148462">强迫症及其治疗方法</a> <a href="/post/2431074" class="last_post" title="查看最新回复">&nbsp;</a> 2019-03-17 <a href='https://www.iteye.com/blog/user/13661127902' target='_blank' title='小树2012'>小树2012</a></span>
      
    </span>
    <span class="amount">13384主题，201195回帖<a href="/forums/board/Life"><img src="{{url('index/picture')}}//arrow_1.gif" alt="" /></a></span>
  </h2>
  
  
    <div class="con">
      <dl class="bbs_son">
        <dt><img src="{{url('index/picture')}}//bbs_ico_normal_new.png" alt="海阔天空" /></dt>
        <dd style="margin-top: 8px;"><strong><a href="/forums/board/Life">海阔天空</a></strong></dd>
      </dl>
      
        <dl class="bbs_son">
          <dt><img src="{{url('index/picture')}}//bbs_ico_normal.png" alt="老八婆的八卦堡" /></dt>
          <dd style="margin-top: 8px;"><strong><a href="https://tales-group.iteye.com">老八婆的八卦堡</a></strong></dd>
        </dl>
      
        <dl class="bbs_son">
          <dt><img src="{{url('index/picture')}}//bbs_ico_normal.png" alt="站务讨论" /></dt>
          <dd style="margin-top: 8px;"><strong><a href="https://javaeye-admin-group.iteye.com">站务讨论</a></strong></dd>
        </dl>
      
        <dl class="bbs_son">
          <dt><img src="{{url('index/picture')}}//bbs_ico_normal.png" alt="灌水乐园" /></dt>
          <dd style="margin-top: 8px;"><strong><a href="https://javaeye-water-group.iteye.com">灌水乐园</a></strong></dd>
        </dl>
      
    </div>
  
</div>


<div id="forum_action" class="clearfix">
  <ul>
    <li><a href="/forums/mark_read_all">标记所有文章已读</a></li>
    <li><a href="/rss/forum" class="rss">订阅全部论坛新帖</a></li>
    <li><a href="/rss/topic" class="rss">订阅全部论坛热点</a></li>
  </ul>
</div>

<div id="online_status">
  <h3>当前在线状态</h3>
  <img src="{{url('index/picture')}}//whosonline.gif"/> 目前共有 <strong>136</strong> 人在线，其中注册会员 <strong>16</strong> 人
  <a href="#" id="show_list" onclick="$('show_list').hide();$('hide_list').show();$('online_users').update('读取中...'); new Ajax.Updater('online_users', '/users/online', {asynchronous:true, evalScripts:true, method:'get', parameters:'authenticity_token=' + encodeURIComponent('7yvDd2J0+0yBin3PKet0HMeGY+SZy0Bmg5l/+llLV00=')}); return false;">显示列表</a><a href="#" id="hide_list" onclick="$('online_users').update(' ');$('show_list').show();$('hide_list').hide();return false;" style="display:none;">隐藏列表</a>
  <a href="/users/online" id="all_list">查看详细状态</a>
  <div id="online_users">&nbsp;</div>
</div>

<script type="text/javascript">
  $$('dl.bbs_son').each(function(dl) {
    var url = dl.down('a').href;
    dl.observe('click', function(el) {
      window.location = url;
    });
  });
  /*
  var current_index = 0;
  var s_adverts = ["\u003C!--AdForward Begin:--\u003E\r\n\u003Cscript type=\"text/javascript\" src=\"http://csdnim.qtmojo.com/main/s?user=iteye|forums|banner2\u0026db=csdnim\u0026border=0\u0026local=yes\u0026js=ie\" charset=\"gbk\"\u003E\u003C/script\u003E\r\n\u003C!--AdForward End--\u003E"];
  alert(s_adverts);
  Event.observe(window,'load',function() {
    show_slide(0);
    new PeriodicalExecuter(show_slide, 600);
  });

  function show_slide(s_index) {
    if(typeof(s_index) != 'number') s_index = current_index + 1;
    if(s_index >= s_adverts.length) s_index = 0;

    $("slides").innerHTML = s_adverts[s_index];
    var s_pagination = s_adverts.inject("<span class='pagination'>", function(memo, value, i) {
      return memo + (s_index == i ? "<span class='current'>" + (i + 1) + "</span>" : "<a href='#' onclick='show_slide(" + i + ");return false;'>" + (i + 1) + "</a>");
    }) + "</span>";


    $("slides").insert(s_pagination);

    current_index = s_index;
  }
  */
  
  function pongoad58(url_list)
  {
    var html = "";
    for(var i = 0;i < url_list.length; i++){
      var url = url_list[i];
      var li = "<a href='<orgurl>' target='_blank'><cityname>:<orgname></a>"
      .replace("<orgurl>", encodeURI(url.orgurl.escapeHTML()))
      .replace("<orgname>", url.orgname.escapeHTML())
      .replace("<joburl>", encodeURI(url.joburl.escapeHTML()))
      .replace("<cityname>", url.cityname.escapeHTML());
      if (url.jobname != null){
        li += "<a href='" + encodeURI(url.joburl.escapeHTML()) + "'> 诚聘" + url.jobname.escapeHTML() + "</a>";
      }
      html += "<li>" + li + "</li>";
    }
    $$("#recommended_jobs ul").first().innerHTML=html;
  }
</script>


<script type="text/javascript">
  var url = encodeURIComponent(document.location.href);
  var id = 58;
  var callbackfun="pongoad58";
  //document.write(unescape('%3Cscript src="http://a.pongo.cn/Job/GetAdForIteyeCallBack%3Fid%3D'+id+'%26Url%3D'+encodeURIComponent(url)+'%26&CallBack%3D'+callbackfun+'" type="text/javascript"%3E%3C/script%3E'));
</script>

        </div>
@endsection