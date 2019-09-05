@extends('public.index')
@section('title', '')
@section('content')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Android讨论 - ITeye论坛频道</title>
    <meta name="description" content="移动开发技术版面讨论, 智能手机和上网本，移动应用平台领域的开发和应用

分类:
J2ME
Android
BlackBerry
iphone
Symbian
Palm
Maemo
WAP" />
    <meta name="keywords" content="Android" />
    <meta name="report" content='{"pid":"iteye"}'>
    <link rel="shortcut icon" href="{{url('index/images')}}/favicon.ico" type="image/x-icon" />
    <link href="/rss/tag/Android" rel="alternate" title="ITeye论坛" type="application/rss+xml" />
    <link rel="search" type="application/opensearchdescription+xml" href="/open_search.xml" title="ITeye" />
    <link href="{{url('index/css')}}/forum_3.css" media="screen" rel="stylesheet" type="text/css" />
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
    <div id="page">
<!--      <div id="header">-->
<!--        <div class="clearfix"></div>-->
<!--      </div>-->

      <div id="content" class="clearfix">
        <div id="main">
          



          

<div class="clearfix">
  <div class="crumbs">
    <a href="/forums">论坛首页</a>
    
      <span class="arrow">&rarr;</span>
      <a href="/forums/board/mobile">移动开发技术论坛</a>
    
    <span class="arrow">&rarr;</span> <a href="/forums/tag/Android">Android</a>
    
    <select id="forum_urlname" name="forum[urlname]" onchange="window.location='/forums/board/'+this.value"><option value="mobile" selected="selected">移动开发技术</option>
<option value="web">Web前端技术</option>
<option value="Java">Java企业应用</option>
<option value="language">编程语言技术</option>
<option value="Tech">综合技术</option>
<option value="New">入门技术</option>
<option value="Job">招聘求职</option>
<option value="Life">海阔天空</option></select>
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
              <dl class="bbs_son active">
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



<div class="actions">
  
    <div class="buttons"><a href="/forums/48/topics/new?tag=Android" class="new_topic" title="发表新帖">&nbsp;</a></div>
    <!-- <div class="buttons"><a href="/problems/new?tag=Android" class="new_question" title="我要提问">&nbsp;</a></div> -->
    <div class="buttons"><a href="https://ask.csdn.net/" class="new_question" title="我要提问" target="_blank">&nbsp;</a></div>
  
  <div class="wrapper">
    <div class="pagination"><span class="disabled prev_page">&laquo; 上一页</span> <span class="current">1</span> <a href="/forums/tag/Android?page=2" rel="next">2</a> <a href="/forums/tag/Android?page=3">3</a> <span class="gap">&hellip;</span> <a href="/forums/tag/Android?page=76">76</a> <a href="/forums/tag/Android?page=77">77</a> <a href="/forums/tag/Android?page=2" class="next_page" rel="next">下一页 &raquo;</a></div>
    <div class="info">
      <a href="/forums/tag_hot/Android">Android本月热门讨论</a>
      <a href="/forums/tag_good/Android">Android精华良好贴</a>
    </div>
  </div>
</div>

<table id="forum_main" cellspacing="1">
  <thead>
    <tr>
      <td colspan="2" style="border-left: 1px solid white;">主题</td>
      <td style="width: 50px;">回复</td>
      <td style="width: 100px;">作者</td>
      <td style="width: 50px;">阅读</td>
      <td style="width: 120px; border-right: 1px solid white;">最新文章</td>
    </tr>
  </thead>
  <tbody>
    

    
    <tr>
  <td class="topic_icon sticky_topic"></td>
  <td class="topic_title">
    置顶:  <a href="/topic/1143237" >---请求提示协助两个系统会话通信的框架</a>
    
  </td>
  <td class="topic_replies">2</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/bzhao' target='_blank' title='bzhao'>bzhao</a></td>
  <td class="topic_view_count">3026</td>
  <td class="topic_last_post">
    2016-10-08<br/>
    <a href='https://www.iteye.com/blog/user/knight-black-bob' target='_blank' title='knight_black_bob'>knight_black_bob</a>
    <a href="/post/2427106" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1148721" >美资电商内推- 首席Android 开发 （30k-50k)</a>
    
  </td>
  <td class="topic_replies">0</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/yanli929' target='_blank' title='yanli929'>yanli929</a></td>
  <td class="topic_view_count">30</td>
  <td class="topic_last_post">
    前天<br/>
    <a href='https://www.iteye.com/blog/user/yanli929' target='_blank' title='yanli929'>yanli929</a>
    <a href="/post/2431302" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1148707" >在存储过程中获取当前用户信息</a>
    
  </td>
  <td class="topic_replies">0</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/ficicodong' target='_blank' title='苏哈里的时间'>苏哈里的时间</a></td>
  <td class="topic_view_count">220</td>
  <td class="topic_last_post">
    2019-08-26<br/>
    <a href='https://www.iteye.com/blog/user/ficicodong' target='_blank' title='苏哈里的时间'>苏哈里的时间</a>
    <a href="/post/2431288" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1148706" >通过Math.atan2 计算角度</a>
    
  </td>
  <td class="topic_replies">0</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/ficicodong' target='_blank' title='苏哈里的时间'>苏哈里的时间</a></td>
  <td class="topic_view_count">108</td>
  <td class="topic_last_post">
    2019-08-26<br/>
    <a href='https://www.iteye.com/blog/user/ficicodong' target='_blank' title='苏哈里的时间'>苏哈里的时间</a>
    <a href="/post/2431287" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1148460" >ssss\\');&lt;/script&gt;&lt;script&gt;alert(21)&lt;/script&gt;//');</a>
    
  </td>
  <td class="topic_replies">6</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/kevinflynn' target='_blank' title='kevinflynn'>kevinflynn</a></td>
  <td class="topic_view_count">3367</td>
  <td class="topic_last_post">
    2019-01-10<br/>
    <a href='https://www.iteye.com/blog/user/kevinflynn' target='_blank' title='kevinflynn'>kevinflynn</a>
    <a href="/post/2430996" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1148364" >3个最受欢迎的android和ios以太坊sdk</a>
    
  </td>
  <td class="topic_replies">0</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/it-node' target='_blank' title='it_node'>it_node</a></td>
  <td class="topic_view_count">2558</td>
  <td class="topic_last_post">
    2018-10-18<br/>
    <a href='https://www.iteye.com/blog/user/it-node' target='_blank' title='it_node'>it_node</a>
    <a href="/post/2430846" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1148325" >Android用代码打开系统设置-&gt;桌面设置的Activity遇上问题</a>
    
  </td>
  <td class="topic_replies">0</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/szuzsq' target='_blank' title='szuzsq'>szuzsq</a></td>
  <td class="topic_view_count">1425</td>
  <td class="topic_last_post">
    2018-09-22<br/>
    <a href='https://www.iteye.com/blog/user/szuzsq' target='_blank' title='szuzsq'>szuzsq</a>
    <a href="/post/2430798" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1148290" >Android与以太坊智能合约交互</a>
    
  </td>
  <td class="topic_replies">1</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/it-node' target='_blank' title='it_node'>it_node</a></td>
  <td class="topic_view_count">2094</td>
  <td class="topic_last_post">
    2018-09-07<br/>
    <a href='https://www.iteye.com/blog/user/it-node' target='_blank' title='it_node'>it_node</a>
    <a href="/post/2430773" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1148196" >java和android如何使用web3j开发以太坊智能合约并进行交易的教程</a>
    
  </td>
  <td class="topic_replies">1</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/it-node' target='_blank' title='it_node'>it_node</a></td>
  <td class="topic_view_count">2923</td>
  <td class="topic_last_post">
    2018-07-19<br/>
    <a href='https://www.iteye.com/blog/user/it-node' target='_blank' title='it_node'>it_node</a>
    <a href="/post/2430686" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1148191" >寻求安卓马甲上架技术</a>
    
  </td>
  <td class="topic_replies">0</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/894456739' target='_blank' title='天使彦'>天使彦</a></td>
  <td class="topic_view_count">1961</td>
  <td class="topic_last_post">
    2018-06-21<br/>
    <a href='https://www.iteye.com/blog/user/894456739' target='_blank' title='天使彦'>天使彦</a>
    <a href="/post/2430628" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1148188" >希望能和大家开发一个人脸识别护眼App保护所有人的视力</a>
    
  </td>
  <td class="topic_replies">1</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/brilliantsun' target='_blank' title='ljy325'>ljy325</a></td>
  <td class="topic_view_count">1945</td>
  <td class="topic_last_post">
    2018-06-20<br/>
    <a href='https://www.iteye.com/blog/user/brilliantsun' target='_blank' title='ljy325'>ljy325</a>
    <a href="/post/2430626" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1148144" >在线制作安卓证书keystore文件</a>
    
  </td>
  <td class="topic_replies">0</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/qtb000' target='_blank' title='qtb000'>qtb000</a></td>
  <td class="topic_view_count">1936</td>
  <td class="topic_last_post">
    2018-05-24<br/>
    <a href='https://www.iteye.com/blog/user/qtb000' target='_blank' title='qtb000'>qtb000</a>
    <a href="/post/2430545" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1147470" >AndroidAPP上架</a>
    
  </td>
  <td class="topic_replies">2</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/qqqq123211' target='_blank' title='qqqq123211'>qqqq123211</a></td>
  <td class="topic_view_count">2121</td>
  <td class="topic_last_post">
    2018-05-08<br/>
    <a href='https://www.iteye.com/blog/user/qqqq123211' target='_blank' title='qqqq123211'>qqqq123211</a>
    <a href="/post/2430504" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1148078" >html代码打包封装成APP教程</a>
    
  </td>
  <td class="topic_replies">0</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/qtb000' target='_blank' title='qtb000'>qtb000</a></td>
  <td class="topic_view_count">3414</td>
  <td class="topic_last_post">
    2018-04-09<br/>
    <a href='https://www.iteye.com/blog/user/qtb000' target='_blank' title='qtb000'>qtb000</a>
    <a href="/post/2430448" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1147159" >AndroidAPP上架</a>
    
  </td>
  <td class="topic_replies">0</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/binni58' target='_blank' title='binni58'>binni58</a></td>
  <td class="topic_view_count">1572</td>
  <td class="topic_last_post">
    2018-02-21<br/>
    <a href='https://www.iteye.com/blog/user/binni58' target='_blank' title='binni58'>binni58</a>
    <a href="/post/2429492" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1147143" >AndroidAPP上架</a>
    
  </td>
  <td class="topic_replies">0</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/894456739' target='_blank' title='天使彦'>天使彦</a></td>
  <td class="topic_view_count">1293</td>
  <td class="topic_last_post">
    2018-02-17<br/>
    <a href='https://www.iteye.com/blog/user/894456739' target='_blank' title='天使彦'>天使彦</a>
    <a href="/post/2429473" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1147057" >高仿京东微信小程序的研究</a>
    
  </td>
  <td class="topic_replies">0</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/erdangjiade66' target='_blank' title='erdangjiade66'>erdangjiade66</a></td>
  <td class="topic_view_count">3763</td>
  <td class="topic_last_post">
    2018-01-03<br/>
    <a href='https://www.iteye.com/blog/user/erdangjiade66' target='_blank' title='erdangjiade66'>erdangjiade66</a>
    <a href="/post/2429324" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1147042" >EditText上关闭软键盘但保留闪烁游标的方法</a>
    
  </td>
  <td class="topic_replies">0</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/yiyu' target='_blank' title='yiyu'>yiyu</a></td>
  <td class="topic_view_count">2006</td>
  <td class="topic_last_post">
    2017-12-22<br/>
    <a href='https://www.iteye.com/blog/user/yiyu' target='_blank' title='yiyu'>yiyu</a>
    <a href="/post/2429306" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1146993" >NFC手机读身份证</a>
    
  </td>
  <td class="topic_replies">0</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/cjyyouyou' target='_blank' title='cjyyouyou'>cjyyouyou</a></td>
  <td class="topic_view_count">5635</td>
  <td class="topic_last_post">
    2017-11-29<br/>
    <a href='https://www.iteye.com/blog/user/cjyyouyou' target='_blank' title='cjyyouyou'>cjyyouyou</a>
    <a href="/post/2429230" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1146971" >全球安卓手机或遭遇重大安全威胁，安卓安全核心TrustZone再遭攻破</a>
    
  </td>
  <td class="topic_replies">0</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/ffeliza' target='_blank' title='ffeliza'>ffeliza</a></td>
  <td class="topic_view_count">2444</td>
  <td class="topic_last_post">
    2017-11-23<br/>
    <a href='https://www.iteye.com/blog/user/ffeliza' target='_blank' title='ffeliza'>ffeliza</a>
    <a href="/post/2429197" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1146855" >全球安卓手机或遭遇重大安全威胁，安卓安全核心TrustZone再遭攻破</a>
    
  </td>
  <td class="topic_replies">0</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/280609712' target='_blank' title='深山人'>深山人</a></td>
  <td class="topic_view_count">3310</td>
  <td class="topic_last_post">
    2017-09-18<br/>
    <a href='https://www.iteye.com/blog/user/280609712' target='_blank' title='深山人'>深山人</a>
    <a href="/post/2429035" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1146777" >移动APP云测试平台测评分析</a>
    
  </td>
  <td class="topic_replies">0</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/devcloud' target='_blank' title='devcloud'>devcloud</a></td>
  <td class="topic_view_count">2587</td>
  <td class="topic_last_post">
    2017-08-04<br/>
    <a href='https://www.iteye.com/blog/user/devcloud' target='_blank' title='devcloud'>devcloud</a>
    <a href="/post/2428911" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1146776" >培训班出身的程序员为什么遭人嫌弃</a>
    
  </td>
  <td class="topic_replies">0</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/2444904359' target='_blank' title='蓝神100'>蓝神100</a></td>
  <td class="topic_view_count">1898</td>
  <td class="topic_last_post">
    2017-08-04<br/>
    <a href='https://www.iteye.com/blog/user/2444904359' target='_blank' title='蓝神100'>蓝神100</a>
    <a href="/post/2428910" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1146766" >测评：华为最新移动应用/APP测试工具MobileTest</a>
    
  </td>
  <td class="topic_replies">0</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/devcloud' target='_blank' title='devcloud'>devcloud</a></td>
  <td class="topic_view_count">2989</td>
  <td class="topic_last_post">
    2017-07-28<br/>
    <a href='https://www.iteye.com/blog/user/devcloud' target='_blank' title='devcloud'>devcloud</a>
    <a href="/post/2428896" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1146765" >如何将Android Studio与华为软件开发云代码仓库无缝对接（一）</a>
    
  </td>
  <td class="topic_replies">0</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/devcloud' target='_blank' title='devcloud'>devcloud</a></td>
  <td class="topic_view_count">2806</td>
  <td class="topic_last_post">
    2017-07-28<br/>
    <a href='https://www.iteye.com/blog/user/devcloud' target='_blank' title='devcloud'>devcloud</a>
    <a href="/post/2428895" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1146764" >java未来趋势 Java促进大数据的大发展</a>
    
  </td>
  <td class="topic_replies">0</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/2444904359' target='_blank' title='蓝神100'>蓝神100</a></td>
  <td class="topic_view_count">1925</td>
  <td class="topic_last_post">
    2017-07-27<br/>
    <a href='https://www.iteye.com/blog/user/2444904359' target='_blank' title='蓝神100'>蓝神100</a>
    <a href="/post/2428894" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1146748" >Java基础 Java 泛型</a>
    
  </td>
  <td class="topic_replies">0</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/2444904359' target='_blank' title='蓝神100'>蓝神100</a></td>
  <td class="topic_view_count">1749</td>
  <td class="topic_last_post">
    2017-07-20<br/>
    <a href='https://www.iteye.com/blog/user/2444904359' target='_blank' title='蓝神100'>蓝神100</a>
    <a href="/post/2428871" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1146722" >测试请求开发</a>
    
  </td>
  <td class="topic_replies">0</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/walkes' target='_blank' title='walkes'>walkes</a></td>
  <td class="topic_view_count">2395</td>
  <td class="topic_last_post">
    2017-07-12<br/>
    <a href='https://www.iteye.com/blog/user/walkes' target='_blank' title='walkes'>walkes</a>
    <a href="/post/2428837" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1146705" >如何使用搜索技巧来成为一名高效的程序员</a>
    
  </td>
  <td class="topic_replies">0</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/2444904359' target='_blank' title='蓝神100'>蓝神100</a></td>
  <td class="topic_view_count">1757</td>
  <td class="topic_last_post">
    2017-07-04<br/>
    <a href='https://www.iteye.com/blog/user/2444904359' target='_blank' title='蓝神100'>蓝神100</a>
    <a href="/post/2428815" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>
<tr>
  <td class="topic_icon unread_topic"></td>
  <td class="topic_title">
     <a href="/topic/1146388" >JAVA入门教程</a>
    
  </td>
  <td class="topic_replies">4</td>
  <td class="topic_author"><a href='https://www.iteye.com/blog/user/maocai15' target='_blank' title='maocai15'>maocai15</a></td>
  <td class="topic_view_count">2916</td>
  <td class="topic_last_post">
    2017-04-24<br/>
    <a href='https://www.iteye.com/blog/user/maocai15' target='_blank' title='maocai15'>maocai15</a>
    <a href="/post/2428536" class="last_post" title ="浏览最新的文章">&nbsp;</a>
  </td>
</tr>

  </tbody>
</table>


<div class="actions">
  
    <div class="buttons"><a href="/forums/48/topics/new?tag=Android" class="new_topic" title="发表新帖">&nbsp;</a></div>
    <div class="buttons"><a href="/problems/new?tag=Android" class="new_question" title="我要提问">&nbsp;</a></div>
  
  <div class="wrapper"><div class="pagination"><span class="disabled prev_page">&laquo; 上一页</span> <span class="current">1</span> <a href="/forums/tag/Android?page=2" rel="next">2</a> <a href="/forums/tag/Android?page=3">3</a> <span class="gap">&hellip;</span> <a href="/forums/tag/Android?page=76">76</a> <a href="/forums/tag/Android?page=77">77</a> <a href="/forums/tag/Android?page=2" class="next_page" rel="next">下一页 &raquo;</a></div></div>
</div>

<div id="forum_action">
  <a href="/forums/mark_read_all">标记所有文章为已读</a> <a href="/rss/tag/Android">订阅本版新帖</a>
  <p style="height:25px;padding-top:10px;">跳转论坛： <select id="forum_urlname" name="forum[urlname]" onchange="window.location='/forums/board/'+this.value"><option value="mobile" selected="selected">移动开发技术</option>
<option value="web">Web前端技术</option>
<option value="Java">Java企业应用</option>
<option value="language">编程语言技术</option>
<option value="Tech">综合技术</option>
<option value="New">入门技术</option>
<option value="Job">招聘求职</option>
<option value="Life">海阔天空</option></select></p>
</div>

<script type="text/javascript">
  $$('dl.bbs_son').each(function(dl) {
      var url = dl.down('a').href;
      dl.observe('click', function(el) {
        window.location = url;
      });
  });
</script>

        </div>
@endsection
