@extends('public.index')
@section('title', '')
@section('content')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>ITeye博客频道首页</title>
    <meta name="description" content="Java博客,Agile博客,AJAX博客,Ruby on Rails博客,IT blog" />
    <meta name="keywords" content="博客 Java编程 Spring框架 AJAX技术 Agile敏捷软件开发 ruby on rails实践 软件工程 讨论 论坛 ITeye深度技术社区" />
    <meta name="report" content='{"pid":"iteye"}'>
    <link rel="shortcut icon" href="{{url('index/images')}}/favicon.ico" type="image/x-icon" />
    <link rel="search" type="application/opensearchdescription+xml" href="/open_search.xml" title="ITeye" />
    <link href="/rss/blogs" rel="alternate" title="ITeye博客频道" type="application/rss+xml" />
    <link href="{{url('index/css')}}/blogs.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="{{url('index/js')}}/application_3.js" type="text/javascript"></script>
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
<script src="{{url('index/js')}}/jquery-1.11.1.min_3.js" type="text/javascript"></script>
<script type="text/javascript">var jQuery = jQuery.noConflict();// 解决jq与prototype.js命名空间冲突的问题</script>
<script src="{{url('index/js')}}/fixed-sidebar_2.js" type="text/javascript"></script>

      </head>
  <body>
    <div>
      <!-- Ads ID 267 -->
      
      
    </div>
    <div id="page">
<!--      <div id="header">-->
<!--        <div class="clearfix"></div>-->
<!--      </div>-->

      <div id="content" class="clearfix">
        <div id="main">
          



          

<!--iteye_博客_左竖幅1 262  iteye_博客_左竖幅2 263-->
<div id="side">
  
  

<div class="nav_side">
  <ul>
    <li class='select'>
    <a href="/blogs" id="all">全部分类</a>
    </li>
    
      
      <li >
      <a href="/blogs/category/mobile" id="mobile">移动开发</a>
      </li>
    
      
      <li >
      <a href="/blogs/category/web" id="web">Web前端</a>
      </li>
    
      
      <li >
      <a href="/blogs/category/architecture" id="architecture">企业架构</a>
      </li>
    
      
      <li >
      <a href="/blogs/category/language" id="language">编程语言</a>
      </li>
    
      
      <li >
      <a href="/blogs/category/internet" id="internet">互联网</a>
      </li>
    
      
      <li >
      <a href="/blogs/category/opensource" id="opensource">开源软件</a>
      </li>
    
      
      <li >
      <a href="/blogs/category/os" id="os">操作系统</a>
      </li>
    
      
      <li >
      <a href="/blogs/category/database" id="database">数据库</a>
      </li>
    
      
      <li >
      <a href="/blogs/category/develop" id="develop">研发管理</a>
      </li>
    
      
      <li >
      <a href="/blogs/category/industry" id="industry">行业应用</a>
      </li>
    
      
      <li class='last'>
      <a href="/blogs/category/other" id="other">非技术</a>
      </li>
    
  </ul>
</div>


  
  
  <div class="box">
    <!-- Ads ID 262博客  -->
    <!-- Ads ID 271专栏  -->
    <!-- Ads 262 -->
    
    
      <script type="text/javascript" src="{{url('index/js')}}/2adu.js"></script>
    
  </div>

  
    <div class='box'>
      <h3>博客专栏推荐</h3>
      <ol>
      
        <li class='rank'>
          <div class='rank_info'>
            <a href="/blogs/subjects/spring_security" style="display:block; line-height:18px; height:36px; overflow:hidden;" target="_blank">Spring Security简介</a>
            <span>1011907次</span>
          </div>
          <div class='rank_logo'>
            <div class='logo'>
              <a href="/blogs/subjects/spring_security" target="_blank"><img alt="51592fc3-854c-34f4-9eff-cb82d993ab3a" src="{{url('index/picture')}}/51592fc3-854c-34f4-9eff-cb82d993ab3a.png" /></a>
            </div>
          </div>
        </li>
      
        <li class='rank'>
          <div class='rank_info'>
            <a href="/blogs/subjects/cache" style="display:block; line-height:18px; height:36px; overflow:hidden;" target="_blank">缓存的使用与设计</a>
            <span>84365次</span>
          </div>
          <div class='rank_logo'>
            <div class='logo'>
              <a href="/blogs/subjects/cache" target="_blank"><img alt="C9f66038-7478-3388-8086-d20c1f535495" src="{{url('index/picture')}}/c9f66038-7478-3388-8086-d20c1f535495.jpg" /></a>
            </div>
          </div>
        </li>
      
        <li class='rank'>
          <div class='rank_info'>
            <a href="/blogs/subjects/Maven-Buildings" style="display:block; line-height:18px; height:36px; overflow:hidden;" target="_blank">Maven原理及使用</a>
            <span>40437次</span>
          </div>
          <div class='rank_logo'>
            <div class='logo'>
              <a href="/blogs/subjects/Maven-Buildings" target="_blank"><img alt="2500388b-2dbf-3fb5-bee6-58cb9e751496" src="{{url('index/picture')}}/2500388b-2dbf-3fb5-bee6-58cb9e751496.png" /></a>
            </div>
          </div>
        </li>
      
        <li class='rank'>
          <div class='rank_info'>
            <a href="/blogs/subjects/git-develop" style="display:block; line-height:18px; height:36px; overflow:hidden;" target="_blank">Git使用和实战</a>
            <span>18844次</span>
          </div>
          <div class='rank_logo'>
            <div class='logo'>
              <a href="/blogs/subjects/git-develop" target="_blank"><img alt="Ab49cf69-16db-31fd-b47b-4f5c0b26dfe1" src="{{url('index/picture')}}/ab49cf69-16db-31fd-b47b-4f5c0b26dfe1.png" /></a>
            </div>
          </div>
        </li>
      
      </ol>
    </div>
  

  
    <div class="box">
      <h3>本月博客排行</h3>
      <ol>
        
          
            <li class="rank">
            <div class="rank_info">
              <span style="line-height:2em;">第1名<br /></span>
              <a href='https://www.iteye.com/blog/user/fanshuyao' target='_blank' title='蕃薯耀'>蕃薯耀</a>
            </div>
            <div class="rank_logo">
              <div class="logo"><a href='https://www.iteye.com/blog/user/fanshuyao' target='_blank'><img alt="蕃薯耀的博客" class="logo" src="{{url('index/picture')}}/412d4a00-6f3f-3488-adfe-e943ea2c7cff-thumb_1.jpg" title="蕃薯耀的博客: 蕃薯耀" width="48px" /></a></div>
            </div>
            </li>
          
        
          
            <li class="rank">
            <div class="rank_info">
              <span style="line-height:2em;">第2名<br /></span>
              <a href='https://www.iteye.com/blog/user/chinahuyong' target='_blank' title='chinahuyong'>chinahuyong</a>
            </div>
            <div class="rank_logo">
              <div class="logo"><a href='https://www.iteye.com/blog/user/chinahuyong' target='_blank'><img alt="chinahuyong的博客" class="logo" src="{{url('index/picture')}}/add8c272-fb66-3cc1-8cfc-08b0585438bc-thumb_1.jpg" title="chinahuyong的博客: .NET快速开发框架" width="48px" /></a></div>
            </div>
            </li>
          
        
          
            <li class="rank">
            <div class="rank_info">
              <span style="line-height:2em;">第3名<br /></span>
              <a href='https://www.iteye.com/blog/user/symbiochina' target='_blank' title='symbiochina'>symbiochina</a>
            </div>
            <div class="rank_logo">
              <div class="logo"><a href='https://www.iteye.com/blog/user/symbiochina' target='_blank'><img alt="symbiochina的博客" class="logo" src="{{url('index/picture')}}/user-logo-thumb.gif" title="symbiochina的博客: " width="48px" /></a></div>
            </div>
            </li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/jerrywang-sap' target='_blank' title='JerryWang_SAP'>JerryWang_SAP</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/osseztec' target='_blank' title='OSSEZTEC'>OSSEZTEC</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/javenshi' target='_blank' title='javenshi'>javenshi</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/miaonly' target='_blank' title='Miaonly'>Miaonly</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/sihailoveyan' target='_blank' title='SIHAIloveYAN'>SIHAIloveYAN</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/357029540' target='_blank' title='357029540'>357029540</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/qinzhonghuai' target='_blank' title='957484162'>957484162</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/kaizi1992' target='_blank' title='kaizi1992'>kaizi1992</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/aiytmaole' target='_blank' title='aiytmaole'>aiytmaole</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/surmounting' target='_blank' title='Surmounting'>Surmounting</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/wangjinlongaisong-126-com' target='_blank' title='高级java工程师'>高级java工程师</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/endual' target='_blank' title='endual'>endual</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/xieye' target='_blank' title='xieye'>xieye</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/jwfd123' target='_blank' title='JWFD123'>JWFD123</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/easy518' target='_blank' title='男人50'>男人50</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/shinesuo' target='_blank' title='shinesuo'>shinesuo</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/412887952-qq-com' target='_blank' title='林祥纤'>林祥纤</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/520shuijing' target='_blank' title='miraclerz'>miraclerz</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/784838898' target='_blank' title='沈寅麟'>沈寅麟</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/mengxiang-it' target='_blank' title='mengxiang.com'>mengxiang.com</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/ficicodong' target='_blank' title='苏哈里的时间'>苏哈里的时间</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/pre' target='_blank' title='草料场'>草料场</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/yuqingshui' target='_blank' title='yuqingshui'>yuqingshui</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/java-007' target='_blank' title='java-007'>java-007</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/sillycat' target='_blank' title='sillycat'>sillycat</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/jameskaron' target='_blank' title='繁星水'>繁星水</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/weiqi' target='_blank' title='WEIQI'>WEIQI</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/bikang66666' target='_blank' title='绿色滑板鞋'>绿色滑板鞋</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/m17001581018' target='_blank' title='springcloud微服务'>springcloud微服务</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/xiangjie88' target='_blank' title='xiangjie88'>xiangjie88</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/lobin' target='_blank' title='lobin'>lobin</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/842046313' target='_blank' title='Java架构Coid'>Java架构Coid</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/wanjunlengfeng' target='_blank' title='wanjunlengfeng'>wanjunlengfeng</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/xiaojingjing' target='_blank' title='xiaojingjing'>xiaojingjing</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/elim' target='_blank' title='234390216'>234390216</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/yuhuiblog6956676dfdsfs8883568269' target='_blank' title='y806839048'>y806839048</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/xiaoheng' target='_blank' title='一剪梅'>一剪梅</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/liu86th' target='_blank' title='liu86th'>liu86th</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/mr-zs58' target='_blank' title='Mr_zs58'>Mr_zs58</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/cqh520llr' target='_blank' title='cqh520llr'>cqh520llr</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/lihong11' target='_blank' title='lihong11'>lihong11</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/agilestyle' target='_blank' title='fairy_xzc'>fairy_xzc</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/coollyj' target='_blank' title='coollyj'>coollyj</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/iaiai' target='_blank' title='iaiai'>iaiai</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/xiaoxiaoher' target='_blank' title='xiaoxiaoHer'>xiaoxiaoHer</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/1448995673' target='_blank' title='1448995673'>1448995673</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/knight-black-bob' target='_blank' title='knight_black_bob'>knight_black_bob</a></li>
          
        
      </ol>
    </div>
  

  <div class="box">
    <!-- Ads ID 263 -->
    <!-- Ads ID 263博客  -->
    <!-- Ads ID 272专栏  -->
    <!-- Ads 263 -->
    
    
      <script type="text/javascript" src="{{url('index/js')}}/2adu.js"></script>
    
  </div>

  
    <div class="box">
      <h3>年度博客排行</h3>
      <ol>
        
          
            <li class="rank">
              <div class="rank_info">
                <span style="line-height:2em;">第1名<br /></span>
                <a href='https://www.iteye.com/blog/user/mingzijian' target='_blank' title='明子健'>明子健</a>
              </div>
              <div class="rank_logo">
                <div class="logo"><a href='https://www.iteye.com/blog/user/mingzijian' target='_blank'><img alt="明子健的博客" class="logo" src="{{url('index/picture')}}/1c087bfd-7c39-3b39-ac5f-eb9ec57a6f3b-thumb.jpg" title="明子健的博客: 明子健" width="48px" /></a></div>
              </div>
            </li>
          
        
          
            <li class="rank">
              <div class="rank_info">
                <span style="line-height:2em;">第2名<br /></span>
                <a href='https://www.iteye.com/blog/user/injavawetrust' target='_blank' title='InJavaWeTrust'>InJavaWeTrust</a>
              </div>
              <div class="rank_logo">
                <div class="logo"><a href='https://www.iteye.com/blog/user/injavawetrust' target='_blank'><img alt="InJavaWeTrust的博客" class="logo" src="{{url('index/picture')}}/0ca3cd02-6549-3bbd-b2ff-3e1c513e3b4a-thumb.png" title="InJavaWeTrust的博客: InJavaWeTrust" width="48px" /></a></div>
              </div>
            </li>
          
        
          
            <li class="rank">
              <div class="rank_info">
                <span style="line-height:2em;">第3名<br /></span>
                <a href='https://www.iteye.com/blog/user/jerrywang-sap' target='_blank' title='JerryWang_SAP'>JerryWang_SAP</a>
              </div>
              <div class="rank_logo">
                <div class="logo"><a href='https://www.iteye.com/blog/user/jerrywang-sap' target='_blank'><img alt="JerryWang_SAP的博客" class="logo" src="{{url('index/picture')}}/c4c2d866-240a-3211-84a9-7f30e22eb541-thumb.jpg" title="JerryWang_SAP的博客: " width="48px" /></a></div>
              </div>
            </li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/kanpiaoxue' target='_blank' title='kanpiaoxue'>kanpiaoxue</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/huangyongxing310' target='_blank' title='huangyongxing310'>huangyongxing310</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/fanshuyao' target='_blank' title='蕃薯耀'>蕃薯耀</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/1049638118' target='_blank' title='大家都说我很棒'>大家都说我很棒</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/qiaolevip' target='_blank' title='qiaolevip'>qiaolevip</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/andrew7676' target='_blank' title='andrew7676'>andrew7676</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/570109268' target='_blank' title='青春..荒唐'>青春..荒唐</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/elim' target='_blank' title='234390216'>234390216</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/easy518' target='_blank' title='男人50'>男人50</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/uule' target='_blank' title='uule'>uule</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/endual' target='_blank' title='endual'>endual</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/lobin' target='_blank' title='lobin'>lobin</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/st4024589553' target='_blank' title='st4024589553'>st4024589553</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/xieye' target='_blank' title='xieye'>xieye</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/miaonly' target='_blank' title='Miaonly'>Miaonly</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/shift-alt-ctrl' target='_blank' title='QING____'>QING____</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/osseztec' target='_blank' title='OSSEZTEC'>OSSEZTEC</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/gaojingsong' target='_blank' title='gaojingsong'>gaojingsong</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/xiaoheng' target='_blank' title='一剪梅'>一剪梅</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/fengbin2005' target='_blank' title='fengbin2005'>fengbin2005</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/jameskaron' target='_blank' title='繁星水'>繁星水</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/sillycat' target='_blank' title='sillycat'>sillycat</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/2147775633' target='_blank' title='springcloud关注者'>springcloud关注者</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/bugyun' target='_blank' title='bugyun'>bugyun</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/zw7534313' target='_blank' title='zw7534313'>zw7534313</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/412887952-qq-com' target='_blank' title='林祥纤'>林祥纤</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/357029540' target='_blank' title='357029540'>357029540</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/huan1993' target='_blank' title='huan1993'>huan1993</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/hbxflihua' target='_blank' title='hbxflihua'>hbxflihua</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/yuhuiblog6956676dfdsfs8883568269' target='_blank' title='y806839048'>y806839048</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/adnb34g' target='_blank' title='adnb34g'>adnb34g</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/chenjumin' target='_blank' title='raymond.chen'>raymond.chen</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/cqh520llr' target='_blank' title='cqh520llr'>cqh520llr</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/javenshi' target='_blank' title='javenshi'>javenshi</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/zhengyunfei' target='_blank' title='郑云飞'>郑云飞</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/dy-f' target='_blank' title='dy.f'>dy.f</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/3105620071' target='_blank' title='妮子321'>妮子321</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/yingyingsheji' target='_blank' title='wanggeying'>wanggeying</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/johnsmith9th' target='_blank' title='johnsmith9th'>johnsmith9th</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/schooltop' target='_blank' title='scholltop'>scholltop</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/854369721' target='_blank' title='唯爱酥酥'>唯爱酥酥</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/wallimn' target='_blank' title='wallimn'>wallimn</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/bijian1013' target='_blank' title='bijian1013'>bijian1013</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/igogo007' target='_blank' title='igogo007'>igogo007</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/liyihz2008' target='_blank' title='liyihz2008'>liyihz2008</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/aoyouzi' target='_blank' title='aoyouzi'>aoyouzi</a></li>
          
        
          
            <li><a href='https://www.iteye.com/blog/user/readdot' target='_blank' title='code小生'>code小生</a></li>
          
        
      </ol>
    </div>
  
</div>


<div id="index_main">
  
      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/mobile">[移动开发]</a></span>
      
      <a href='https://www.iteye.com/blog/java-tj-2444057' title='uniapp爬坑之路知识点' target='_blank'>uniapp爬坑之路知识点</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/java-tj' target='_blank'><img alt="Java_tj的博客" class="logo" src="{{url('index/picture')}}/510f205f-34b1-3019-b891-8b61fdee31c4-thumb.jpg" title="Java_tj的博客: " width="48px" /></a></div>
      
uniapp爬坑之路知识点
 
1、uniapp页面参数传递
(1)、链接传递
要传递参数的页面：&lt;navigator :url=&quot; './nav?index='+navData&quot;&gt;点击传递参数&lt;/navigator&gt;
接收参数页面:
onload(options){
    console.log(options.index);
}
 ...
    </div>
    <div class='news_tag'><a href="http://www.iteye.com/blogs/tag/uni-app">uni-app</a><a href="http://www.iteye.com/blogs/tag/%E5%85%A8%E5%B1%80%E5%8F%98%E9%87%8F">全局变量</a><a href="http://www.iteye.com/blogs/tag/%E5%8F%82%E6%95%B0%E4%BC%A0%E9%80%92">参数传递</a>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2444057'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/java-tj' target='_blank' title='Java_tj'>Java_tj</a>
      <span class="comment"><a href="https://www.iteye.com/blog/java-tj-2444057#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有13人浏览</span>
      <span class='date'>2019-09-03 10:33</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/architecture">[企业架构]</a></span>
      
      <a href='https://www.iteye.com/blog/m17001581018-2444054' title='springcloud vue 微服务分布式 activiti工作流 前后分离 集成代码生成器 shiro权限' target='_blank'>springcloud vue 微服务分布式 activiti工作流 前后分离 集成代码生成器 shiro权限</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/m17001581018' target='_blank'><img alt="springcloud微服务的博客" class="logo" src="{{url('index/picture')}}/58e840dd-d270-31e6-90e1-3b87e753a2eb-thumb.png" title="springcloud微服务的博客: " width="48px" /></a></div>
      
代码介绍 -------------
本框架为 ：springcloud + Springboot 微服务\分布式 工作流 前后分离 + 跨域 版本 （权限控制到菜单和按钮）
后台框架 ：springcloud Greenw ...
    </div>
    <div class='news_tag'><a href="http://www.iteye.com/blogs/tag/springcloud">springcloud</a><a href="http://www.iteye.com/blogs/tag/%E5%BE%AE%E6%9C%8D%E5%8A%A1">微服务</a><a href="http://www.iteye.com/blogs/tag/%E5%88%86%E5%B8%83%E5%BC%8F">分布式</a><a href="http://www.iteye.com/blogs/tag/activiti">activiti</a><a href="http://www.iteye.com/blogs/tag/%E5%B7%A5%E4%BD%9C%E6%B5%81">工作流</a>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2444054'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/m17001581018' target='_blank' title='springcloud微服务'>springcloud微服务</a>
      <span class="comment"><a href="https://www.iteye.com/blog/m17001581018-2444054#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有19人浏览</span>
      <span class='date'>2019-09-03 10:03</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/language">[编程语言]</a></span>
      
      <a href='https://www.iteye.com/blog/sihailoveyan-2444050' title='Java8 的 Stream 流式操作之王者归来' target='_blank'>Java8 的 Stream 流式操作之王者归来</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/sihailoveyan' target='_blank'><img alt="SIHAIloveYAN的博客" class="logo" src="{{url('index/picture')}}/4ced13c5-0c40-3b77-9cb5-c7309a78ef86-thumb.jpeg" title="SIHAIloveYAN的博客: sihai" width="48px" /></a></div>
      

个人博客地址：http://blog.ouyangsihai.cn/java8-de-stream-liu-shi-cao-zuo-zhi-wang-zhe-gui-lai.html

相对于Java8之前的Java的相关操作简直是天差地别，Java8 的流式操作的出现，也很大程度上改变了开发者对于Java的繁琐的操作的印象，从此，Java也走向了函数式编程的道路！
1 流的创建
1. ...
    </div>
    <div class='news_tag'><a href="http://www.iteye.com/blogs/tag/java8">java8</a><a href="http://www.iteye.com/blogs/tag/stream">stream</a><a href="http://www.iteye.com/blogs/tag/%E6%B5%81%E5%BC%8F%E6%93%8D%E4%BD%9C">流式操作</a>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2444050'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/sihailoveyan' target='_blank' title='SIHAIloveYAN'>SIHAIloveYAN</a>
      <span class="comment"><a href="https://www.iteye.com/blog/sihailoveyan-2444050#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有30人浏览</span>
      <span class='date'>2019-09-03 09:07</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/language">[编程语言]</a></span>
      
      <a href='https://www.iteye.com/blog/miaonly-2444042' title='Java 添加文本框到PPT幻灯片' target='_blank'>Java 添加文本框到PPT幻灯片</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/miaonly' target='_blank'><img alt="Miaonly的博客" class="logo" src="{{url('index/picture')}}/82123082-2e4d-3b0a-b8cb-2251dd915324-thumb_1.jpg" title="Miaonly的博客: MIAO" width="48px" /></a></div>
      
本文将介绍图和通过Java程序添加文本框到PPT幻灯片的方法。包括设置文本框边框样式、填充效果、阴影效果、文本框旋转、文字样式等。
 
使用工具：Free Spire.Presentation for Java （免费版）
Jar文件获取及导入：
 
方法1：通过E-iceblue官网下载jar文件包。下载后，解压文件，并将lib文件夹下的Spire.Presentation.jar文 ...
    </div>
    <div class='news_tag'><a href="http://www.iteye.com/blogs/tag/Spire.Presentation%20for%20Java">Spire.Presentation for Java</a><a href="http://www.iteye.com/blogs/tag/PPT">PPT</a><a href="http://www.iteye.com/blogs/tag/%E6%96%87%E6%9C%AC%E6%A1%86">文本框</a><a href="http://www.iteye.com/blogs/tag/java">java</a><a href="http://www.iteye.com/blogs/tag/maven">maven</a>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2444042'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/miaonly' target='_blank' title='Miaonly'>Miaonly</a>
      <span class="comment"><a href="https://www.iteye.com/blog/miaonly-2444042#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有96人浏览</span>
      <span class='date'>2019-09-02 16:46</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/architecture">[企业架构]</a></span>
      
      <a href='https://www.iteye.com/blog/chinahuyong-2444033' title='RDIFramework.NET ━ .NET敏捷开发框架全新发布-最好用的.NET开发框架 100%源码授权' target='_blank'>RDIFramework.NET ━ .NET敏捷开发框架全新发布-最好用的.NET开发框架 100%源码授权</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/chinahuyong' target='_blank'><img alt="chinahuyong的博客" class="logo" src="{{url('index/picture')}}/add8c272-fb66-3cc1-8cfc-08b0585438bc-thumb_1.jpg" title="chinahuyong的博客: .NET快速开发框架" width="48px" /></a></div>
      





RDIFramework.NET，基于.NET的快速信息化系统敏捷开发框架。10年沉淀、历经上千项目检验，致力于企业智能化开发，帮助提升软件开发效率。最好用的.NET开发框架，100%源码授权。


1、RDIFramework.NET敏捷开发框架介绍
RDIFramework.NET敏捷开发框架，基于.NET的快速信息化系统开发、整合框架，为企业或个人快速开发系统提供 ...
    </div>
    <div class='news_tag'><a href="http://www.iteye.com/blogs/tag/RDIFramework.NET">RDIFramework.NET</a><a href="http://www.iteye.com/blogs/tag/%E6%95%8F%E6%8D%B7%E5%BC%80%E5%8F%91%E6%A1%86%E6%9E%B6">敏捷开发框架</a><a href="http://www.iteye.com/blogs/tag/.NET%E5%BF%AB%E9%80%9F%E5%BC%80%E5%8F%91%E6%A1%86%E6%9E%B6">.NET快速开发框架</a><a href="http://www.iteye.com/blogs/tag/%E5%B7%A5%E4%BD%9C%E6%B5%81">工作流</a><a href="http://www.iteye.com/blogs/tag/Web%E5%BC%80%E5%8F%91%E6%A1%86%E6%9E%B6">Web开发框架</a>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2444033'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/chinahuyong' target='_blank' title='chinahuyong'>chinahuyong</a>
      <span class="comment"><a href="https://www.iteye.com/blog/chinahuyong-2444033#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有39人浏览</span>
      <span class='date'>2019-09-02 11:15</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/architecture">[企业架构]</a></span>
      
      <a href='https://www.iteye.com/blog/m17191464500-2444029' title='java 企业门户网站 源码 自适应响应式 freemarker 静态引擎 html5 SSM' target='_blank'>java 企业门户网站 源码 自适应响应式 freemarker 静态引擎 html5 SSM</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/m17191464500' target='_blank'><img alt="springboot框架的博客" class="logo" src="{{url('index/picture')}}/83238664-7c5b-37d8-8062-25fb8125fcbc-thumb.png" title="springboot框架的博客: " width="48px" /></a></div>
      
代码介绍：
1.网站后台采用主流的 SSM 框架 jsp JSTL，网站后台采用freemaker静态化模版引擎生成html
2.因为是生成的html，所以访问速度快，轻便，对服务器负担小
3.网站前端采用主流的响应式布局，同一页面同时支持PC、平板、手机（三合一）浏览器访问
4.springmvc +spring4.3.7+ mybaits3.3 SSM 普通java web（非mave ...
    </div>
    <div class='news_tag'><a href="http://www.iteye.com/blogs/tag/ssm">ssm</a><a href="http://www.iteye.com/blogs/tag/springmvc">springmvc</a><a href="http://www.iteye.com/blogs/tag/freemarker">freemarker</a><a href="http://www.iteye.com/blogs/tag/html5">html5</a><a href="http://www.iteye.com/blogs/tag/%E4%BC%81%E4%B8%9A%E7%AB%99">企业站</a>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2444029'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/m17191464500' target='_blank' title='springboot框架'>springboot框架</a>
      <span class="comment"><a href="https://www.iteye.com/blog/m17191464500-2444029#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有48人浏览</span>
      <span class='date'>2019-09-02 10:11</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/language">[编程语言]</a></span>
      
      <a href='https://www.iteye.com/blog/manzhizhen-2444017' title='Java Agent实战' target='_blank'>Java Agent实战</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/manzhizhen' target='_blank'><img alt="manzhizhen的博客" class="logo" src="{{url('index/picture')}}/da5bc953-8ed3-3feb-bd61-4e6a64bd808d-thumb.png" title="manzhizhen的博客: 大步流星" width="48px" /></a></div>
      
简单来说，Java Agent就是JVM为了应用程序提供的具有检测功能的软件组件。在Java Agent的上下文中，通过JDK1.5出现的java.lang.instrument.Instrumentation来提供重新定义在运行时加载的类的内容的能力。那么这有什么用？其实对我们实现一些需要通过字节码的形式隐式注入到业务代码中的中间件非常有用（注意，这和Java的远程debug使用的JDWP（Ja ...
    </div>
    <div class='news_tag'><a href="http://www.iteye.com/blogs/tag/Java%20Agent%E5%AE%9E%E6%88%98">Java Agent实战</a><a href="http://www.iteye.com/blogs/tag/Java%20Agent">Java Agent</a>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2444017'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/manzhizhen' target='_blank' title='manzhizhen'>manzhizhen</a>
      <span class="comment"><a href="https://www.iteye.com/blog/manzhizhen-2444017#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有54人浏览</span>
      <span class='date'>2019-09-01 15:25</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/language">[编程语言]</a></span>
      
      <a href='https://www.iteye.com/blog/gaojingsong-2444014' title='【LiteIDE 介绍】' target='_blank'>【LiteIDE 介绍】</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/gaojingsong' target='_blank'><img alt="gaojingsong的博客" class="logo" src="{{url('index/picture')}}/fdf7a688-c4c7-3712-b110-74d332d96b39-thumb.jpg" title="gaojingsong的博客: 计算机软件技术分享--赠人玫瑰,手遗余香（QQ群516569942）" width="48px" /></a></div>
      
LiteIDE 是一款简单，开源，跨平台的 Go IDE。LiteIDE 是国人开发的 Google Go 语言的一个开发工具
Features
 

Core features
System environment management
MIME type management
Configurable build commands
Support files search re ...
    </div>
    <div class='news_tag'>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2444014'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/gaojingsong' target='_blank' title='gaojingsong'>gaojingsong</a>
      <span class="comment"><a href="https://www.iteye.com/blog/gaojingsong-2444014#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有68人浏览</span>
      <span class='date'>2019-09-01 09:22</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/opensource">[开源软件]</a></span>
      
      <a href='https://www.iteye.com/blog/xiaoheng-2444011' title='dubbo 线程池' target='_blank'>dubbo 线程池</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/xiaoheng' target='_blank'><img alt="一剪梅的博客" class="logo" src="{{url('index/picture')}}/26d1fbb3-8208-3760-8e7c-01b27a610c10-thumb.jpg" title="一剪梅的博客: 一剪梅" width="48px" /></a></div>
      dubbo 中有四个线程池：
CachedThreadPool：每隔 1 分钟回收空闲线程
FixedThreadPool：固定数量线程
LimitedThreadPool：动态扩展，但是不会收缩
EagerThreadPool：调整了JDK 线程池的工作流程
总结：这四类线程池都是基于 JDK 中的线程池.
需要注意的是 EagerThreadPool. 它修改了 JDK 中线程池的工作流程.
1 ...
    </div>
    <div class='news_tag'><a href="http://www.iteye.com/blogs/tag/dubbo">dubbo</a><a href="http://www.iteye.com/blogs/tag/threaepool">threaepool</a>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2444011'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/xiaoheng' target='_blank' title='一剪梅'>一剪梅</a>
      <span class="comment"><a href="https://www.iteye.com/blog/xiaoheng-2444011#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有152人浏览</span>
      <span class='date'>2019-08-31 23:18</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/language">[编程语言]</a></span>
      
      <a href='https://www.iteye.com/blog/knight-black-bob-2444009' title='k8s kubernetes 安装' target='_blank'>k8s kubernetes 安装</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/knight-black-bob' target='_blank'><img alt="knight_black_bob的博客" class="logo" src="{{url('index/picture')}}/14477e66-9fb8-356d-b509-628d12e7e289-thumb.jpg" title="knight_black_bob的博客: Ctrl+C&amp;Ctrl+V" width="48px" /></a></div>
      
k8s kubernetes 安装
 
-1.准备工作 hadoop 服务器
 
10.156.50.35 yanfabu2-35.base.app.dev.yf zk1  hadoop1 master1 master sparkmaster  k8s-master
10.156.50.36 yanfabu2-36.base.app.dev.yf zk2  hadoop2 master2 ...
    </div>
    <div class='news_tag'><a href="http://www.iteye.com/blogs/tag/k8s">k8s</a><a href="http://www.iteye.com/blogs/tag/kubernetes">kubernetes</a><a href="http://www.iteye.com/blogs/tag/%E5%AE%89%E8%A3%85">安装</a>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2444009'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/knight-black-bob' target='_blank' title='knight_black_bob'>knight_black_bob</a>
      <span class="comment"><a href="https://www.iteye.com/blog/knight-black-bob-2444009#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有81人浏览</span>
      <span class='date'>2019-08-31 18:11</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/language">[编程语言]</a></span>
      
      <a href='https://www.iteye.com/blog/knight-black-bob-2444008' title='linux spark 安装' target='_blank'>linux spark 安装</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/knight-black-bob' target='_blank'><img alt="knight_black_bob的博客" class="logo" src="{{url('index/picture')}}/14477e66-9fb8-356d-b509-628d12e7e289-thumb.jpg" title="knight_black_bob的博客: Ctrl+C&amp;Ctrl+V" width="48px" /></a></div>
      
linux spark 安装
 
0.准备工作 hadoop 服务器
10.156.50.35 yanfabu2-35.base.app.dev.yf zk1  hadoop1 master1 master sparkmaster
10.156.50.36 yanfabu2-36.base.app.dev.yf zk2  hadoop2 master2        sparkwork1
 ...
    </div>
    <div class='news_tag'><a href="http://www.iteye.com/blogs/tag/linux">linux</a><a href="http://www.iteye.com/blogs/tag/spark">spark</a><a href="http://www.iteye.com/blogs/tag/%E5%AE%89%E8%A3%85">安装</a>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2444008'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/knight-black-bob' target='_blank' title='knight_black_bob'>knight_black_bob</a>
      <span class="comment"><a href="https://www.iteye.com/blog/knight-black-bob-2444008#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有231人浏览</span>
      <span class='date'>2019-08-31 17:45</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/language">[编程语言]</a></span>
      
      <a href='https://www.iteye.com/blog/kaizi1992-2443997' title='Javaweb-类加载器-类加载器的了解入门' target='_blank'>Javaweb-类加载器-类加载器的了解入门</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/kaizi1992' target='_blank'><img alt="kaizi1992的博客" class="logo" src="{{url('index/picture')}}/user-logo-thumb.gif" title="kaizi1992的博客: " width="48px" /></a></div>
      

 
前面的动态代理学完了，以后在学习Spring的时候会用到这些动态代理的知识和原理，像目标对象，增强这两个术语，会经常听到。学习动态代理，就是学习JDK中反射包下的一个Proxy类，具体来说，我们只是学习newProxyInstance(ClassLoader, interfaces, hander)这个方法。这篇开始来学习下，加载器，我们在学习获取动态代理，第一个要准备的参数就是，类加载 ...
    </div>
    <div class='news_tag'>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2443997'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/kaizi1992' target='_blank' title='kaizi1992'>kaizi1992</a>
      <span class="comment"><a href="https://www.iteye.com/blog/kaizi1992-2443997#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有77人浏览</span>
      <span class='date'>2019-08-31 08:20</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/mobile">[移动开发]</a></span>
      
      <a href='https://www.iteye.com/blog/gaojingsong-2444015' title='【微信小程序】' target='_blank'>【微信小程序】</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/gaojingsong' target='_blank'><img alt="gaojingsong的博客" class="logo" src="{{url('index/picture')}}/fdf7a688-c4c7-3712-b110-74d332d96b39-thumb.jpg" title="gaojingsong的博客: 计算机软件技术分享--赠人玫瑰,手遗余香（QQ群516569942）" width="48px" /></a></div>
      
微信小程序
小程序是一种新的开放能力，开发者可以快速地开发一个小程序。小程序可以在微信内被便捷地获取和传播，同时具有出色的使用体验。
 
 
接入流程
1）注册
在微信公众平台注册小程序，完成注册后可以同步进行信息完善和开发。
 
2)小程序信息完善
填写小程序基本信息，包括名称、头像、介绍及服务范围等。
 
3)开发小程序
完成小程序开发者绑定、开发信息配置后，开发者可下 ...
    </div>
    <div class='news_tag'>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2444015'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/gaojingsong' target='_blank' title='gaojingsong'>gaojingsong</a>
      <span class="comment"><a href="https://www.iteye.com/blog/gaojingsong-2444015#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有61人浏览</span>
      <span class='date'>2019-09-01 09:32</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/language">[编程语言]</a></span>
      
      <a href='https://www.iteye.com/blog/kaizi1992-2443974' title='设计模式之命令模式-使用命令模式实现遥控器及总结' target='_blank'>设计模式之命令模式-使用命令模式实现遥控器及总结</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/kaizi1992' target='_blank'><img alt="kaizi1992的博客" class="logo" src="{{url('index/picture')}}/user-logo-thumb.gif" title="kaizi1992的博客: " width="48px" /></a></div>
      
设计模式之命令模式-使用命令模式实现遥控器及总结
先来看看项目结构：

说明：
1：命令接口对象
2：电灯打开或关闭命令
3：音响打开或关闭命令
4：音响音量增加或减少命令
来源：凯哥Java(kaigejava)
电灯开或关代码：
/**
* Created by kaigejava on 2019/8/30.
* 关灯的命令对象
*/

    </div>
    <div class='news_tag'>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2443974'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/kaizi1992' target='_blank' title='kaizi1992'>kaizi1992</a>
      <span class="comment"><a href="https://www.iteye.com/blog/kaizi1992-2443974#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有114人浏览</span>
      <span class='date'>2019-08-30 09:39</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/opensource">[开源软件]</a></span>
      
      <a href='https://www.iteye.com/blog/liyihz2008-2443932' title='O2OA 稳定版 V4.2235 发布，功能性能等多方面优化升级' target='_blank'>O2OA 稳定版 V4.2235 发布，功能性能等多方面优化升级</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/liyihz2008' target='_blank'><img alt="liyihz2008的博客" class="logo" src="{{url('index/picture')}}/user-logo-thumb.gif" title="liyihz2008的博客: liyihz2008" width="48px" /></a></div>
      
O2OA是基于J2EE架构，集成移动办公、智能办公，支持私有化部署，自适应负载能力的，能够很大程度上节约企业软件开发成本的基于AGPL协议开放源代码的企业信息化系统需求定制开发解决方案，对外提供专业的开发运维等技术服务。


最新版本 O2OA V4.2235

 

    </div>
    <div class='news_tag'><a href="http://www.iteye.com/blogs/tag/O2OA">O2OA</a><a href="http://www.iteye.com/blogs/tag/%E4%BF%A1%E6%81%AF%E5%8C%96%E5%BB%BA%E8%AE%BE">信息化建设</a><a href="http://www.iteye.com/blogs/tag/%E4%BC%81%E4%B8%9A%E4%BF%A1%E6%81%AF%E5%8C%96">企业信息化</a><a href="http://www.iteye.com/blogs/tag/%E4%BC%81%E4%B8%9A%E5%8A%9E%E5%85%AC">企业办公</a><a href="http://www.iteye.com/blogs/tag/%E5%BC%80%E6%BA%90%E8%BD%AF%E4%BB%B6">开源软件</a>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2443932'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/liyihz2008' target='_blank' title='liyihz2008'>liyihz2008</a>
      <span class="comment"><a href="https://www.iteye.com/blog/liyihz2008-2443932#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有97人浏览</span>
      <span class='date'>2019-08-29 09:18</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/opensource">[开源软件]</a></span>
      
      <a href='https://www.iteye.com/blog/xiaoheng-2443926' title='关于 dubbo 的 SpiExtensionFactory 的一点说明' target='_blank'>关于 dubbo 的 SpiExtensionFactory 的一点说明</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/xiaoheng' target='_blank'><img alt="一剪梅的博客" class="logo" src="{{url('index/picture')}}/26d1fbb3-8208-3760-8e7c-01b27a610c10-thumb.jpg" title="一剪梅的博客: 一剪梅" width="48px" /></a></div>
      关于 dubbo 的 SpiExtensionFactory 的一点说明：
本篇文章不想比较 dubbo 的 spi 和 jdk spi 的异同，网上有太多文章写了这块，本篇文章主要想说 dubbo @Adaptive 注� ...
    </div>
    <div class='news_tag'><a href="http://www.iteye.com/blogs/tag/dubbo">dubbo</a><a href="http://www.iteye.com/blogs/tag/spi">spi</a>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2443926'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/xiaoheng' target='_blank' title='一剪梅'>一剪梅</a>
      <span class="comment"><a href="https://www.iteye.com/blog/xiaoheng-2443926#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有159人浏览</span>
      <span class='date'>2019-08-29 00:30</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/architecture">[企业架构]</a></span>
      
      <a href='https://www.iteye.com/blog/jerrywang-sap-2444010' title='从SAP社区上的一篇博客开始，聊聊SAP产品命名背后的那份情怀' target='_blank'>从SAP社区上的一篇博客开始，聊聊SAP产品命名背后的那份情怀</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/jerrywang-sap' target='_blank'><img alt="JerryWang_SAP的博客" class="logo" src="{{url('index/picture')}}/c4c2d866-240a-3211-84a9-7f30e22eb541-thumb.jpg" title="JerryWang_SAP的博客: " width="48px" /></a></div>
      
最近Jerry在SAP社区上看到一篇博客：It's Steampunk now.
博客原文：https://blogs.sap.com/2019/08/20/its-steampunk-now/

什么是Steampunk(蒸汽朋克)? 豆瓣上有一篇名为10� ...
    </div>
    <div class='news_tag'><a href="http://www.iteye.com/blogs/tag/sap">sap</a><a href="http://www.iteye.com/blogs/tag/SAP%E6%88%90%E9%83%BD%E7%A0%94%E7%A9%B6%E9%99%A2">SAP成都研究院</a><a href="http://www.iteye.com/blogs/tag/SAP%20Cloud%20Platform">SAP Cloud Platform</a><a href="http://www.iteye.com/blogs/tag/SAP%E4%BA%91%E5%B9%B3%E5%8F%B0">SAP云平台</a><a href="http://www.iteye.com/blogs/tag/SAP">SAP</a>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2444010'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/jerrywang-sap' target='_blank' title='JerryWang_SAP'>JerryWang_SAP</a>
      <span class="comment"><a href="https://www.iteye.com/blog/jerrywang-sap-2444010#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有62人浏览</span>
      <span class='date'>2019-08-31 21:05</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/opensource">[开源软件]</a></span>
      
      <a href='https://www.iteye.com/blog/elim-2443924' title='Spring Cloud（07）——Hystrix Dashboard' target='_blank'>Spring Cloud（07）——Hystrix Dashboard</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/elim' target='_blank'><img alt="234390216的博客" class="logo" src="{{url('index/picture')}}/392b0b83-7725-374c-a0eb-f9f5b7ab3ddd-thumb.jpg" title="234390216的博客: Elim的博客" width="48px" /></a></div>
      
Hystrix Dashboard
Spring Cloud也基于Spring Boot的监控规范提供了Hystrix的指标监控信息。为了看到这些监控信息，首先需要在pom.xml中添加如下依赖。

&lt;dependency&gt;
    &lt;groupId&gt;org.springframework.boot&lt;/groupId&gt;
    &lt;artifact ...
    </div>
    <div class='news_tag'><a href="http://www.iteye.com/blogs/tag/Spring%20Cloud">Spring Cloud</a><a href="http://www.iteye.com/blogs/tag/Hystrix">Hystrix</a><a href="http://www.iteye.com/blogs/tag/Dashboard">Dashboard</a><a href="http://www.iteye.com/blogs/tag/%E9%9D%A2%E6%9D%BF">面板</a><a href="http://www.iteye.com/blogs/tag/%E7%86%94%E6%96%AD">熔断</a>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2443924'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/elim' target='_blank' title='234390216'>234390216</a>
      <span class="comment"><a href="https://www.iteye.com/blog/elim-2443924#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有157人浏览</span>
      <span class='date'>2019-08-28 22:47</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/opensource">[开源软件]</a></span>
      
      <a href='https://www.iteye.com/blog/elim-2443923' title='Spring Cloud（06）——断路器Hystrix' target='_blank'>Spring Cloud（06）——断路器Hystrix</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/elim' target='_blank'><img alt="234390216的博客" class="logo" src="{{url('index/picture')}}/392b0b83-7725-374c-a0eb-f9f5b7ab3ddd-thumb.jpg" title="234390216的博客: Elim的博客" width="48px" /></a></div>
      
断路器Hystrix
Hystrix是Netflix实现的断路器，其github地址是https://github.com/Netflix/Hystrix。当对一个服务的调用次数超过了circuitBreaker.requestVolumeThreshold（默认是20），且在指定的时间窗口metrics.rollingStats.timeInMilliseconds（默认是10秒）内，失败的比 ...
    </div>
    <div class='news_tag'><a href="http://www.iteye.com/blogs/tag/Spring">Spring</a><a href="http://www.iteye.com/blogs/tag/Cloud">Cloud</a><a href="http://www.iteye.com/blogs/tag/%E6%96%AD%E8%B7%AF%E5%99%A8">断路器</a><a href="http://www.iteye.com/blogs/tag/Hystrix">Hystrix</a><a href="http://www.iteye.com/blogs/tag/%E7%86%94%E6%96%AD">熔断</a>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2443923'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/elim' target='_blank' title='234390216'>234390216</a>
      <span class="comment"><a href="https://www.iteye.com/blog/elim-2443923#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有129人浏览</span>
      <span class='date'>2019-08-28 22:45</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/os">[操作系统]</a></span>
      
      <a href='https://www.iteye.com/blog/lobin-2443919' title='Linux: Guide' target='_blank'>Linux: Guide</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/lobin' target='_blank'><img alt="lobin的博客" class="logo" src="{{url('index/picture')}}/fa421121-fafa-36bd-ae2c-ea67bc07e14e-thumb.jpg" title="lobin的博客: 一窥混沌" width="48px" /></a></div>
      
 
 
http://mm.iit.uni-miskolc.hu/Data/texts/Linux
Linux Installation and Getting Started
The Linux Kernel Hackers' Guide
The Linux Programmer's Guide
The Linux Users' Guide
The Linux Network ...
    </div>
    <div class='news_tag'>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2443919'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/lobin' target='_blank' title='lobin'>lobin</a>
      <span class="comment"><a href="https://www.iteye.com/blog/lobin-2443919#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有227人浏览</span>
      <span class='date'>2019-08-28 19:19</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/language">[编程语言]</a></span>
      
      <a href='https://www.iteye.com/blog/xiaojingjing-2443917' title='python3使用request来post文件请求' target='_blank'>python3使用request来post文件请求</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/xiaojingjing' target='_blank'><img alt="xiaojingjing的博客" class="logo" src="{{url('index/picture')}}/d204e47a-dedd-3241-b06f-86c69d77e262-thumb.jpg" title="xiaojingjing的博客: " width="48px" /></a></div>
      
最近尝试使用request来发送上传文件的post请求，网上找了很多直接post文件的例子，借鉴发现这个方法行不通，于是尝试了另外一种方式：通过第三方包requests_toolbelt讲文件转为数据流来发送请求，尝试成功。
 
第一类，单个文件，包含在消息体
# -*- coding: utf-8 -*-

import requests
#引入requests_toolbelt包， ...
    </div>
    <div class='news_tag'><a href="http://www.iteye.com/blogs/tag/python">python</a><a href="http://www.iteye.com/blogs/tag/request">request</a><a href="http://www.iteye.com/blogs/tag/post">post</a><a href="http://www.iteye.com/blogs/tag/%E6%96%87%E4%BB%B6">文件</a><a href="http://www.iteye.com/blogs/tag/requests_toolbelt">requests_toolbelt</a>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2443917'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/xiaojingjing' target='_blank' title='xiaojingjing'>xiaojingjing</a>
      <span class="comment"><a href="https://www.iteye.com/blog/xiaojingjing-2443917#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有230人浏览</span>
      <span class='date'>2019-08-28 17:35</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/language">[编程语言]</a></span>
      
      <a href='https://www.iteye.com/blog/miaonly-2443902' title='Java 打印PPT幻灯片' target='_blank'>Java 打印PPT幻灯片</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/miaonly' target='_blank'><img alt="Miaonly的博客" class="logo" src="{{url('index/picture')}}/82123082-2e4d-3b0a-b8cb-2251dd915324-thumb_1.jpg" title="Miaonly的博客: MIAO" width="48px" /></a></div>
      
本篇文章将介绍通过Java程序打印PPT幻灯片的方法。包括打印幻灯片的所有页、打印幻灯片中的指定页面。
使用工具：Free Spire.Presentation for Java （免费版）
 
Jar文件获取及导入：
方法1：通过官网下载jar文件包。下载后，解压文件，并将lib文件夹下的Spire.Presentation.jar文件导入java程序。
方法2：可通过maven仓库安 ...
    </div>
    <div class='news_tag'><a href="http://www.iteye.com/blogs/tag/java">java</a><a href="http://www.iteye.com/blogs/tag/Spire.Presentation%20for%20Java">Spire.Presentation for Java</a><a href="http://www.iteye.com/blogs/tag/%E5%85%8D%E8%B4%B9PPT%E6%8E%A7%E4%BB%B6">免费PPT控件</a><a href="http://www.iteye.com/blogs/tag/%E6%89%93%E5%8D%B0">打印</a><a href="http://www.iteye.com/blogs/tag/maven">maven</a>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2443902'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/miaonly' target='_blank' title='Miaonly'>Miaonly</a>
      <span class="comment"><a href="https://www.iteye.com/blog/miaonly-2443902#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有210人浏览</span>
      <span class='date'>2019-08-28 15:12</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/internet">[互联网]</a></span>
      
      <a href='https://www.iteye.com/blog/osseztec-2443886' title='Confluence 6.15 附件宏参数' target='_blank'>Confluence 6.15 附件宏参数</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/osseztec' target='_blank'><img alt="OSSEZTEC的博客" class="logo" src="{{url('index/picture')}}/e1b6a5d8-321a-3daf-9772-2dc4238acb21-thumb_1.jpg" title="OSSEZTEC的博客: OSSEZTEC" width="48px" /></a></div>
      
参数


参数名称


默认值


描述


Filename Patterns(patterns)
all

 


Attachment Labels(labels)
(None)


标签（labels）的列表，用来过滤附件的显示。如� ...
    </div>
    <div class='news_tag'>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2443886'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/osseztec' target='_blank' title='OSSEZTEC'>OSSEZTEC</a>
      <span class="comment"><a href="https://www.iteye.com/blog/osseztec-2443886#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有171人浏览</span>
      <span class='date'>2019-08-28 06:47</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/language">[编程语言]</a></span>
      
      <a href='https://www.iteye.com/blog/357029540-2443860' title='如何保证在Java多线程中的原子性操作？' target='_blank'>如何保证在Java多线程中的原子性操作？</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/357029540' target='_blank'><img alt="357029540的博客" class="logo" src="{{url('index/picture')}}/5668264e-f433-3625-8918-665cb5f7f493-thumb.jpg" title="357029540的博客: " width="48px" /></a></div>
      
       在单线程的模式下，我们针对某个变量的修改是不会产生数据的脏读和脏写的，因为它只有一个操作来对变量进行读写操作，但是在多线程模式 ...
    </div>
    <div class='news_tag'><a href="http://www.iteye.com/blogs/tag/cas">cas</a><a href="http://www.iteye.com/blogs/tag/%E5%A4%9A%E7%BA%BF%E7%A8%8B%E4%B8%AD%E7%9A%84%E5%8E%9F%E5%AD%90%E6%80%A7">多线程中的原子性</a>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2443860'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/357029540' target='_blank' title='357029540'>357029540</a>
      <span class="comment"><a href="https://www.iteye.com/blog/357029540-2443860#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有158人浏览</span>
      <span class='date'>2019-08-27 18:46</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/architecture">[企业架构]</a></span>
      
      <a href='https://www.iteye.com/blog/jerrywang-sap-2443987' title='使用SAP Cloud Platform Leonardo机器学习提取图片的特征向量' target='_blank'>使用SAP Cloud Platform Leonardo机器学习提取图片的特征向量</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/jerrywang-sap' target='_blank'><img alt="JerryWang_SAP的博客" class="logo" src="{{url('index/picture')}}/c4c2d866-240a-3211-84a9-7f30e22eb541-thumb.jpg" title="JerryWang_SAP的博客: " width="48px" /></a></div>
      
这个机器学习服务的文档：https://help.sap.com/viewer/b04a8fe9c04745b98ad8652ccd5d636f/1907B/en-US/d6fee2fd184d48d5b221928a8db4c2fd.html?q=Customizable%20Image%20Feature%20Extraction
测试控制台：

输入是任意一个图片文件，输出是一串特征矩 ...
    </div>
    <div class='news_tag'><a href="http://www.iteye.com/blogs/tag/SAP">SAP</a><a href="http://www.iteye.com/blogs/tag/SAP%20Cloud%20Platform">SAP Cloud Platform</a><a href="http://www.iteye.com/blogs/tag/SAP%E4%BA%91%E5%B9%B3%E5%8F%B0">SAP云平台</a><a href="http://www.iteye.com/blogs/tag/CloudFoundry">CloudFoundry</a>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2443987'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/jerrywang-sap' target='_blank' title='JerryWang_SAP'>JerryWang_SAP</a>
      <span class="comment"><a href="https://www.iteye.com/blog/jerrywang-sap-2443987#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有95人浏览</span>
      <span class='date'>2019-08-30 15:17</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/architecture">[企业架构]</a></span>
      
      <a href='https://www.iteye.com/blog/jerrywang-sap-2443986' title='使用SAP Cloud Platform Leonardo机器学习的测试控制台' target='_blank'>使用SAP Cloud Platform Leonardo机器学习的测试控制台</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/jerrywang-sap' target='_blank'><img alt="JerryWang_SAP的博客" class="logo" src="{{url('index/picture')}}/c4c2d866-240a-3211-84a9-7f30e22eb541-thumb.jpg" title="JerryWang_SAP的博客: " width="48px" /></a></div>
      
选中一个需要进行测试的Leonardo机器学习服务，点击Configure Environments：

因为我不想使用sandbox环境，所以我选择了eu10这个region：

维护clientid和secret：

在SAP Cloud Platform cockpit里创建了service key后，会得到这个client id和secret。要消费机器学习api，先要获得Ac ...
    </div>
    <div class='news_tag'><a href="http://www.iteye.com/blogs/tag/SAP%E6%88%90%E9%83%BD%E7%A0%94%E7%A9%B6%E9%99%A2">SAP成都研究院</a><a href="http://www.iteye.com/blogs/tag/SAP%20Cloud%20Platform">SAP Cloud Platform</a><a href="http://www.iteye.com/blogs/tag/SAP%E4%BA%91%E5%B9%B3%E5%8F%B0">SAP云平台</a><a href="http://www.iteye.com/blogs/tag/SAP">SAP</a>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2443986'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/jerrywang-sap' target='_blank' title='JerryWang_SAP'>JerryWang_SAP</a>
      <span class="comment"><a href="https://www.iteye.com/blog/jerrywang-sap-2443986#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有89人浏览</span>
      <span class='date'>2019-08-30 15:16</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/architecture">[企业架构]</a></span>
      
      <a href='https://www.iteye.com/blog/m17191464500-2443977' title='Activiti 工作流引擎 springmvc SSM 流程审批 后台框架 源码 shiro权' target='_blank'>Activiti 工作流引擎 springmvc SSM 流程审批 后台框架 源码 shiro权</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/m17191464500' target='_blank'><img alt="springboot框架的博客" class="logo" src="{{url('index/picture')}}/83238664-7c5b-37d8-8062-25fb8125fcbc-thumb.png" title="springboot框架的博客: " width="48px" /></a></div>
      
工作流模块----------------------------------------------------------------------------------------------------------
1.模型管理 ：web在线流程设计器、预览流程xml、导出xml、� ...
    </div>
    <div class='news_tag'><a href="http://www.iteye.com/blogs/tag/activiti">activiti</a><a href="http://www.iteye.com/blogs/tag/springmvc">springmvc</a><a href="http://www.iteye.com/blogs/tag/ssm">ssm</a><a href="http://www.iteye.com/blogs/tag/shiro">shiro</a><a href="http://www.iteye.com/blogs/tag/%E5%B7%A5%E4%BD%9C%E6%B5%81">工作流</a>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2443977'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/m17191464500' target='_blank' title='springboot框架'>springboot框架</a>
      <span class="comment"><a href="https://www.iteye.com/blog/m17191464500-2443977#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有88人浏览</span>
      <span class='date'>2019-08-30 11:11</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/language">[编程语言]</a></span>
      
      <a href='https://www.iteye.com/blog/sihailoveyan-2443829' title='给女朋友讲ActiveMQ是啥？' target='_blank'>给女朋友讲ActiveMQ是啥？</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/sihailoveyan' target='_blank'><img alt="SIHAIloveYAN的博客" class="logo" src="{{url('index/picture')}}/4ced13c5-0c40-3b77-9cb5-c7309a78ef86-thumb.jpeg" title="SIHAIloveYAN的博客: sihai" width="48px" /></a></div>
      

欢迎访问个人博客：blog.ouyangsihai.cn

1 ActiveMQ是啥
ActiveMQ 就是一个消息中间件，市面上现在有很多的消息中间件开源产品，比如，RocketMQ、RabbitMQ、Kafka等。
拿一个简单的比喻来说，消息中间件就是一个中转站，在程序中加的一个中转站，有了这样一个类似快递的存储站点，可以大大的减轻物流的压力，而对应到程序中，也就是减轻了程序的压力。 ...
    </div>
    <div class='news_tag'><a href="http://www.iteye.com/blogs/tag/activemq">activemq</a>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2443829'><div class='digged'><span class='digg'>1顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/sihailoveyan' target='_blank' title='SIHAIloveYAN'>SIHAIloveYAN</a>
      <span class="comment"><a href="https://www.iteye.com/blog/sihailoveyan-2443829#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有260人浏览</span>
      <span class='date'>2019-08-26 10:48</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/architecture">[企业架构]</a></span>
      
      <a href='https://www.iteye.com/blog/m17001581018-2443939' title='springboot windows10风格 activiti 整合项目框架源码 shiro 安全框架' target='_blank'>springboot windows10风格 activiti 整合项目框架源码 shiro 安全框架</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/m17001581018' target='_blank'><img alt="springcloud微服务的博客" class="logo" src="{{url('index/picture')}}/58e840dd-d270-31e6-90e1-3b87e753a2eb-thumb.png" title="springcloud微服务的博客: " width="48px" /></a></div>
      
此项目为Springboot工作流版本 windows 风格,浏览器访问操作使用，非桌面应用程序。
1.代码生成器： [正反双向](单表、主表、明细表、树形表，快速开发利器) freemaker模版技术 ,0个代码不用写,生成完整的一个模块,带页面、建表sql脚本、处理类、service等完整模块 2.多数据源：（支持同时连接无数个数据库，可以不同的模块连接不同数的据库）支持N个数据源 3.阿里 ...
    </div>
    <div class='news_tag'><a href="http://www.iteye.com/blogs/tag/springboot">springboot</a>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2443939'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/m17001581018' target='_blank' title='springcloud微服务'>springcloud微服务</a>
      <span class="comment"><a href="https://www.iteye.com/blog/m17001581018-2443939#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有142人浏览</span>
      <span class='date'>2019-08-29 10:32</span>
    </div>
  </div>
</div>

      


<div class="blog clearfix" id="" >
  <div class="content">
    <h3>
      
        <span class="category"><a href="/blogs/category/language">[编程语言]</a></span>
      
      <a href='https://www.iteye.com/blog/weiqi-2443805' title='单例模式正确使用方式' target='_blank'>单例模式正确使用方式</a></h3>
    <div>
      <div class="logo"><a href='https://www.iteye.com/blog/user/weiqi' target='_blank'><img alt="WEIQI的博客" class="logo" src="{{url('index/picture')}}/43e7b10f-0d2f-37ac-a878-96b863aa3a4e-thumb.jpeg" title="WEIQI的博客: I_LV_XJ" width="48px" /></a></div>
      
这次分享我们就来谈谈单例模式的使用，其实在本公众号设计模式的第一篇分享就是单例模式，为什么又要讨论单例模式了？主要是那篇文章谈的比较浅，只对单例模式的主要思想做了一个分享，这篇文章会从多个方面去分享单例模式的使用，下面进入正题。
使用Java做程序的小伙伴都知道单例，尤其是使用spring框架做项目的，大家都知道spring框架管理类默认都是单例模式的，并且是线程安全的。那么如果保证一个类只被初 ...
    </div>
    <div class='news_tag'><a href="http://www.iteye.com/blogs/tag/%E5%8D%95%E4%BE%8B%E6%A8%A1%E5%BC%8F">单例模式</a><a href="http://www.iteye.com/blogs/tag/singleton">singleton</a>&nbsp;</div>
    <div class="blog_info">
      <div class='digg' id='d2443805'><div class='digged'><span class='digg'>0顶</span><span class='bury'>0踩</span></div></div>
      <a href='https://www.iteye.com/blog/user/weiqi' target='_blank' title='WEIQI'>WEIQI</a>
      <span class="comment"><a href="https://www.iteye.com/blog/weiqi-2443805#comments" target="_blank">评论(0)</a></span>
      <span class='view'>有371人浏览</span>
      <span class='date'>2019-08-23 22:53</span>
    </div>
  </div>
</div>

    <div class="pagination"><span class="disabled prev_page">&laquo; 上一页</span> <span class="current">1</span> <a href="/blogs?page=2" rel="next">2</a> <a href="/blogs?page=2" class="next_page" rel="next">下一页 &raquo;</a></div>
</div>


        </div>
        <div id="local">
          
            

  <div class='box' style="text-align: center">
    <!-- Ads ID 264 -->
    
    
      <div id="kp_box_264" data-pid="264"><iframe  src="https://adaccount.csdn.net/#/preview/291?m=JEibcDUHcpJUmHncJAiQoDAHLLDXEALLLfSHAnDtJAopEtnbcESHQWcEcStoLQQQtQQnpQiQAiQQAEnAQQQQEtSJAtpAcHEctSco&k=" frameborder="0" width= "300px"  height= "250px" scrolling="no" ></iframe><img class="pre-img-lasy" data-src="{{url('index/picture')}}/1_1.png"></div>
    
  </div>

  
    <div class="hot_tag">
  <h3>最近博客热门TAG</h3>
  <p>
  
          <span><a href="/blogs/tag/Java">Java</a>(141256)</span>
          <span><a href="/blogs/tag/C">C</a>(73614)</span>
          <span><a href="/blogs/tag/C++">C++</a>(68576)</span>
          <span><a href="/blogs/tag/SQL">SQL</a>(64550)</span>
          <span><a href="/blogs/tag/C%23">C#</a>(59457)</span>
          <span><a href="/blogs/tag/XML">XML</a>(59156)</span>
          <span><a href="/blogs/tag/HTML">HTML</a>(59054)</span>
          <span><a href="/blogs/tag/JavaScript">JavaScript</a>(54861)</span>
          <span><a href="/blogs/tag/.net">.net</a>(54694)</span>
          <span><a href="/blogs/tag/Web">Web</a>(54501)</span>
          <span><a href="/blogs/tag/%E5%B7%A5%E4%BD%9C">工作</a>(53994)</span>
          <span><a href="/blogs/tag/Linux">Linux</a>(50847)</span>
          <span><a href="/blogs/tag/Oracle">Oracle</a>(49873)</span>
          <span><a href="/blogs/tag/%E5%BA%94%E7%94%A8%E6%9C%8D%E5%8A%A1%E5%99%A8">应用服务器</a>(43322)</span>
          <span><a href="/blogs/tag/Spring">Spring</a>(40721)</span>
          <span><a href="/blogs/tag/%E7%BC%96%E7%A8%8B">编程</a>(39391)</span>
          <span><a href="/blogs/tag/Windows">Windows</a>(39335)</span>
          <span><a href="/blogs/tag/JSP">JSP</a>(37577)</span>
          <span><a href="/blogs/tag/MySQL">MySQL</a>(37211)</span>
          <span><a href="/blogs/tag/%E6%95%B0%E6%8D%AE%E7%BB%93%E6%9E%84">数据结构</a>(36416)</span>
      
  </p>
</div>

  
  <div class='box'>
    <h3 style='text-align:center'>博客热门专栏</h3>
    <ul id='hot_subjects' class='hot_blogs'>
    
      <li>
  <span title='浏览次数'>158308</span>
  <a href="/blogs/subjects/Spring-Cloud" target="_blank">Spring_Cloud构建云架构</a>
</li>
<li>
  <span title='浏览次数'>307849</span>
  <a href="/blogs/subjects/spring4" target="_blank">Spring基础知识</a>
</li>

    
    </ul>
    <a href="/blogs/subjects" style="padding-left: 150px;" target="_blank">更多专栏&gt;&gt;</a>
  </div>

  <div class='box' style="text-align: center">
    <!-- Ads ID 265 -->
    
    
      <script type="text/javascript" src="{{url('index/js')}}/jwn7zn.js"></script>
    
  </div>

        <div class="box">
    <h3 style="text-align:center">博客人气排行榜</h3>
    <ul class="blogs_tab">
      <li class="tab selected" id="blog_hot_tab_week"><a href="#" onclick="show_hot_blog('week');return false;">周榜</a></li>
      <li class="tab" id="blog_hot_tab_month"><a href="#" onclick="show_hot_blog('month');return false;">月榜</a></li>
      <li class="tab" id="blog_hot_tab_all"><a href="#" onclick="show_hot_blog('all');return false;">总榜</a></li>
    </ul>
    <ul id="blog_hot_week" class="hot_blogs"><li><span title="浏览次数">228</span> <a href='https://www.iteye.com/blog/xiaojingjing-2443917' title='python3使用request来post文件请求' target='_blank'>python3使用request来post文件请求</a></li>
<li><span title="浏览次数">224</span> <a href='https://www.iteye.com/blog/lobin-2443919' title='Linux: Guide' target='_blank'>Linux: Guide</a></li>
<li><span title="浏览次数">214</span> <a href='https://www.iteye.com/blog/knight-black-bob-2444008' title='linux spark 安装' target='_blank'>linux spark 安装</a></li>
<li><span title="浏览次数">210</span> <a href='https://www.iteye.com/blog/jerrywang-sap-2443848' title='在pivotal cloud foundry上申请账号和部署应用' target='_blank'>在pivotal cloud foundry上申请账号和部署应用</a></li>
<li><span title="浏览次数">208</span> <a href='https://www.iteye.com/blog/miaonly-2443902' title='Java 打印PPT幻灯片' target='_blank'>Java 打印PPT幻灯片</a></li>
<li><span title="浏览次数">191</span> <a href='https://www.iteye.com/blog/ilixin-2443851' title='【工具】华为云服务器的哪个节点好，哪个节点速度快？来ping测一下就知道了' target='_blank'>【工具】华为云服务器的哪个节点好，哪个节点速度快？来ping测一下就知道了</a></li>
<li><span title="浏览次数">171</span> <a href='https://www.iteye.com/blog/osseztec-2443886' title='Confluence 6.15 附件宏参数' target='_blank'>Confluence 6.15 附件宏参数</a></li>
<li><span title="浏览次数">163</span> <a href='https://www.iteye.com/blog/m17001581018-2443889' title='Springboot vue 前后分离 跨域 Activiti6 工作流 集成代码生成器 shiro权限' target='_blank'>Springboot vue 前后分离 跨域 Activiti6 工作流 集成代码生成器 shiro权限</a></li>
<li><span title="浏览次数">159</span> <a href='https://www.iteye.com/blog/powertech-2443911' title='使用ANTLR处理文本' target='_blank'>使用ANTLR处理文本</a></li>
<li><span title="浏览次数">157</span> <a href='https://www.iteye.com/blog/357029540-2443860' title='如何保证在Java多线程中的原子性操作？' target='_blank'>如何保证在Java多线程中的原子性操作？</a></li>
<li><span title="浏览次数">156</span> <a href='https://www.iteye.com/blog/xiaoheng-2443926' title='关于 dubbo 的 SpiExtensionFactory 的一点说明' target='_blank'>关于 dubbo 的 SpiExtensionFactory 的一点说明</a></li>
<li><span title="浏览次数">152</span> <a href='https://www.iteye.com/blog/elim-2443924' title='Spring Cloud（07）——Hystrix Dashboard' target='_blank'>Spring Cloud（07）——Hystrix Dashboard</a></li>
<li><span title="浏览次数">146</span> <a href='https://www.iteye.com/blog/xiaoheng-2444011' title='dubbo 线程池' target='_blank'>dubbo 线程池</a></li>
<li><span title="浏览次数">142</span> <a href='https://www.iteye.com/blog/m17001581018-2443939' title='springboot windows10风格 activiti 整合项目框架源码 shiro 安全框架' target='_blank'>springboot windows10风格 activiti 整合项目框架源码 shiro 安全框架</a></li>
<li><span title="浏览次数">124</span> <a href='https://www.iteye.com/blog/elim-2443923' title='Spring Cloud（06）——断路器Hystrix' target='_blank'>Spring Cloud（06）——断路器Hystrix</a></li>
</ul>
    <ul id="blog_hot_month" class="hot_blogs" style="display:none;"><li><span title="浏览次数">879</span> <a href='https://www.iteye.com/blog/fanshuyao-2443208' title='Eclipse优化，Eclipse调优，Eclipse 卡解决方案' target='_blank'>Eclipse优化，Eclipse调优，Eclipse 卡解决方案</a></li>
<li><span title="浏览次数">872</span> <a href='https://www.iteye.com/blog/fanshuyao-2443220' title='Apache Shiro1.4.1报错Object named 'filterChainResolver'' target='_blank'>Apache Shiro1.4.1报错Object named 'filterChainResolver'</a></li>
<li><span title="浏览次数">694</span> <a href='https://www.iteye.com/blog/fanshuyao-2443263' title='Eclipse创建Maven项目web.xml文件、JDK版本问题解决' target='_blank'>Eclipse创建Maven项目web.xml文件、JDK版本问题解决</a></li>
<li><span title="浏览次数">693</span> <a href='https://www.iteye.com/blog/fanshuyao-2443247' title='shiro ehcache缺少配置报错' target='_blank'>shiro ehcache缺少配置报错</a></li>
<li><span title="浏览次数">686</span> <a href='https://www.iteye.com/blog/chinahuyong-2443177' title='C#实现Hash应用全解' target='_blank'>C#实现Hash应用全解</a></li>
<li><span title="浏览次数">682</span> <a href='https://www.iteye.com/blog/chinahuyong-2443175' title='Quartz.Net实现作业定时调度详解' target='_blank'>Quartz.Net实现作业定时调度详解</a></li>
<li><span title="浏览次数">575</span> <a href='https://www.iteye.com/blog/osseztec-2443194' title='Confluence 6 插入一个文件到你的页面' target='_blank'>Confluence 6 插入一个文件到你的页面</a></li>
<li><span title="浏览次数">563</span> <a href='https://www.iteye.com/blog/aiytmaole-2443272' title='fl studio 20破解版+序列号+破解补丁+完全汉化破解' target='_blank'>fl studio 20破解版+序列号+破解补丁+完全汉化破解</a></li>
<li><span title="浏览次数">556</span> <a href='https://www.iteye.com/blog/symbiochina-2443239' title='中央自动化测试管理平台' target='_blank'>中央自动化测试管理平台</a></li>
<li><span title="浏览次数">469</span> <a href='https://www.iteye.com/blog/surmounting-2443233' title='CIKERS Shane 20190805' target='_blank'>CIKERS Shane 20190805</a></li>
<li><span title="浏览次数">448</span> <a href='https://www.iteye.com/blog/chinahuyong-2443254' title='RDIFramework.NET敏捷开发框架WinForm新增文件中心-实现附件集中管理' target='_blank'>RDIFramework.NET敏捷开发框架WinForm新增文件中心-实现附件集中管理</a></li>
<li><span title="浏览次数">408</span> <a href='https://www.iteye.com/blog/javenshi-2443235' title='SpringIOC源码解析（下）' target='_blank'>SpringIOC源码解析（下）</a></li>
<li><span title="浏览次数">385</span> <a href='https://www.iteye.com/blog/osseztec-2443799' title='Confluence 6 管理文件' target='_blank'>Confluence 6 管理文件</a></li>
<li><span title="浏览次数">376</span> <a href='https://www.iteye.com/blog/jerrywang-sap-2443292' title='SAP官方提供的人脸识别API' target='_blank'>SAP官方提供的人脸识别API</a></li>
<li><span title="浏览次数">369</span> <a href='https://www.iteye.com/blog/weiqi-2443805' title='单例模式正确使用方式' target='_blank'>单例模式正确使用方式</a></li>
</ul>
    <ul id="blog_hot_all" class="hot_blogs" style="display:none;"><li><span title="浏览次数">464346</span> <a href='https://www.iteye.com/blog/injavawetrust-2435948' title='今年要多读书' target='_blank'>今年要多读书</a></li>
<li><span title="浏览次数">464027</span> <a href='https://www.iteye.com/blog/mingzijian-2431053' title='二分查找' target='_blank'>二分查找</a></li>
<li><span title="浏览次数">43760</span> <a href='https://www.iteye.com/blog/qiaolevip-2433268' title='Access to XMLHttpRequest has been blocked by CORS policy: Request header field l' target='_blank'>Access to XMLHttpRequest has been blocked by CORS policy: Request header field l</a></li>
<li><span title="浏览次数">24695</span> <a href='https://www.iteye.com/blog/1049638118-2433925' title='这是一个悲伤的程序员爱情故事' target='_blank'>这是一个悲伤的程序员爱情故事</a></li>
<li><span title="浏览次数">16409</span> <a href='https://www.iteye.com/blog/1049638118-2433159' title='asp.net开发分享，learun  framework工作流审批设计' target='_blank'>asp.net开发分享，learun  framework工作流审批设计</a></li>
<li><span title="浏览次数">15599</span> <a href='https://www.iteye.com/blog/igogo007-2432004' title='网上流行护眼色的RGB值和颜色代码' target='_blank'>网上流行护眼色的RGB值和颜色代码</a></li>
<li><span title="浏览次数">12850</span> <a href='https://www.iteye.com/blog/hbxflihua-2431537' title='Spring-boot构建多模块依赖工程时，maven打包异常：程序包xxx不存在' target='_blank'>Spring-boot构建多模块依赖工程时，maven打包异常：程序包xxx不存在</a></li>
<li><span title="浏览次数">9849</span> <a href='https://www.iteye.com/blog/jacktan123-2432347' title='JSP中使用window.location.href()跳转和传递参数。' target='_blank'>JSP中使用window.location.href()跳转和传递参数。</a></li>
<li><span title="浏览次数">8061</span> <a href='https://www.iteye.com/blog/kanpiaoxue-2433982' title='Mac的touchbar显示F1-F12的功能键' target='_blank'>Mac的touchbar显示F1-F12的功能键</a></li>
<li><span title="浏览次数">7420</span> <a href='https://www.iteye.com/blog/huangyongxing310-2435578' title='vue 实现文件下载' target='_blank'>vue 实现文件下载</a></li>
<li><span title="浏览次数">7103</span> <a href='https://www.iteye.com/blog/siruoxian-2438250' title='[NetworkInfo] Signal strength query returned error: Error Domain=NSPOSIXErrorDom' target='_blank'>[NetworkInfo] Signal strength query returned error: Error Domain=NSPOSIXErrorDom</a></li>
<li><span title="浏览次数">7032</span> <a href='https://www.iteye.com/blog/mrrong-2434767' title='小米手环3NFC版模拟加密门卡' target='_blank'>小米手环3NFC版模拟加密门卡</a></li>
<li><span title="浏览次数">6866</span> <a href='https://www.iteye.com/blog/lfwer-2430462' title='java8  使用lamda遍历list同时获取list下标' target='_blank'>java8  使用lamda遍历list同时获取list下标</a></li>
<li><span title="浏览次数">6621</span> <a href='https://www.iteye.com/blog/shift-alt-ctrl-2433675' title='Springboot自动装配与bean注入' target='_blank'>Springboot自动装配与bean注入</a></li>
<li><span title="浏览次数">6593</span> <a href='https://www.iteye.com/blog/pure-adoration-2440787' title='代码备忘录' target='_blank'>代码备忘录</a></li>
</ul>
  </div>

<script type="text/javascript">
  function show_hot_blog(type) {
    ["week", "month", "all"].each(function(t){
      $('blog_hot_' + t).hide();
      $('blog_hot_tab_' + t).removeClassName("selected");
    });
    $('blog_hot_' + type).show();
    $('blog_hot_tab_' + type).addClassName("selected");
  }
</script> 

  

  <div class='box' style="text-align: center">
    <!-- Ads ID 266 -->
    
    
      <div id="kp_box_266" data-pid="266" data-report-view='{"mod":"kp_popu_266-662","keyword":""}' data-report-click='{"mod":"kp_popu_266-662","keyword":""}'><div style="width:220px;height:220px;margin:0 auto;position:relative;overflow:hidden;"> <a href="https://edu.csdn.net/topic/python115?utm_source=iteye" target="_blank"><img src="{{url('index/picture')}}/201811150919211586.jpg"width="220" height="220"></a><span style="position:absolute;right:0;bottom:0;background:url(images/201608021757063065.png) no-repeat;width:33px;height:18px;display:block;z-index: 9999;"></span></div><img class="pre-img-lasy" data-src="{{url('index/picture')}}/1_1.png"></div>
    
  </div>

          <div class="box">
    <h3  style="text-align:center">博客电子书下载排行 </h3>
    <ul class="blogs_tab">
      <li class="tab selected" id="pdf_hot_tab_month"><a href="#" onclick="show_hot('month');return false;">月榜</a></li>
      <li class="tab" id="pdf_hot_tab_all"><a href="#" onclick="show_hot('all');return false;">总榜</a></li>
    </ul>
    <ul id="pdf_hot_month" class="hot_blogs"></ul>
    <ul id="pdf_hot_all" class="hot_blogs" style="display:none;"></ul>
    <a href="/blogs/pdf" style="padding-left: 130px;">&gt;&gt;浏览更多下载</a>
  </div>

  <script type="text/javascript">
    function show_hot(type) {
      ["month", "all"].each(function(t){
          $('pdf_hot_' + t).hide();
          $('pdf_hot_tab_' + t).removeClassName("selected");
          });
      $('pdf_hot_' + type).show();
      $('pdf_hot_tab_' + type).addClassName("selected");
    }
</script>

  

  <div class='box'>
    <h3 style='text-align:center'>最新博客专栏</h3>
    <ul>
      
        
      
    </ul>
  </div>

    
	  <div class="box">
    <h3>最新发表博客</h3>
    <ul><li><a href='https://www.iteye.com/blog/java-tj-2444057' title='uniapp爬坑之路知识点' target='_blank'>uniapp爬坑之路知识点</a></li><li><a href='https://www.iteye.com/blog/m17001581018-2444054' title='springcloud vue 微服务分布式 activiti工作流 前后分离 集成代码生成器 shiro权限' target='_blank'>springcloud vue 微服务分布式 activiti工作流 前后分离 集成代码生成器 shiro权限</a></li><li><a href='https://www.iteye.com/blog/sihailoveyan-2444050' title='Java8 的 Stream 流式操作之王者归来' target='_blank'>Java8 的 Stream 流式操作之王者归来</a></li><li><a href='https://www.iteye.com/blog/miaonly-2444042' title='Java 添加文本框到PPT幻灯片' target='_blank'>Java 添加文本框到PPT幻灯片</a></li><li><a href='https://www.iteye.com/blog/chinahuyong-2444033' title='RDIFramework.NET ━ .NET敏捷开发框架全新发布-最好用的.NET开发框架 100%源码授权' target='_blank'>RDIFramework.NET ━ .NET敏捷开发框架全新发布-最好用的.NET开发框架 100%源码授权</a></li><li><a href='https://www.iteye.com/blog/m17191464500-2444029' title='java 企业门户网站 源码 自适应响应式 freemarker 静态引擎 html5 SSM' target='_blank'>java 企业门户网站 源码 自适应响应式 freemarker 静态引擎 html5 SSM</a></li><li><a href='https://www.iteye.com/blog/manzhizhen-2444017' title='Java Agent实战' target='_blank'>Java Agent实战</a></li><li><a href='https://www.iteye.com/blog/gaojingsong-2444015' title='【微信小程序】' target='_blank'>【微信小程序】</a></li><li><a href='https://www.iteye.com/blog/gaojingsong-2444014' title='【LiteIDE 介绍】' target='_blank'>【LiteIDE 介绍】</a></li><li><a href='https://www.iteye.com/blog/xiaoheng-2444011' title='dubbo 线程池' target='_blank'>dubbo 线程池</a></li><li><a href='https://www.iteye.com/blog/jerrywang-sap-2444010' title='从SAP社区上的一篇博客开始，聊聊SAP产品命名背后的那份情怀' target='_blank'>从SAP社区上的一篇博客开始，聊聊SAP产品命名背后的那份情怀</a></li><li><a href='https://www.iteye.com/blog/knight-black-bob-2444009' title='k8s kubernetes 安装' target='_blank'>k8s kubernetes 安装</a></li><li><a href='https://www.iteye.com/blog/knight-black-bob-2444008' title='linux spark 安装' target='_blank'>linux spark 安装</a></li><li><a href='https://www.iteye.com/blog/kaizi1992-2443997' title='Javaweb-类加载器-类加载器的了解入门' target='_blank'>Javaweb-类加载器-类加载器的了解入门</a></li><li><a href='https://www.iteye.com/blog/jerrywang-sap-2443987' title='使用SAP Cloud Platform Leonardo机器学习提取图片的特征向量' target='_blank'>使用SAP Cloud Platform Leonardo机器学习提取图片的特征向量</a></li><li><a href='https://www.iteye.com/blog/jerrywang-sap-2443986' title='使用SAP Cloud Platform Leonardo机器学习的测试控制台' target='_blank'>使用SAP Cloud Platform Leonardo机器学习的测试控制台</a></li><li><a href='https://www.iteye.com/blog/m17191464500-2443977' title='Activiti 工作流引擎 springmvc SSM 流程审批 后台框架 源码 shiro权' target='_blank'>Activiti 工作流引擎 springmvc SSM 流程审批 后台框架 源码 shiro权</a></li><li><a href='https://www.iteye.com/blog/kaizi1992-2443974' title='设计模式之命令模式-使用命令模式实现遥控器及总结' target='_blank'>设计模式之命令模式-使用命令模式实现遥控器及总结</a></li><li><a href='https://www.iteye.com/blog/m17001581018-2443939' title='springboot windows10风格 activiti 整合项目框架源码 shiro 安全框架' target='_blank'>springboot windows10风格 activiti 整合项目框架源码 shiro 安全框架</a></li><li><a href='https://www.iteye.com/blog/liyihz2008-2443932' title='O2OA 稳定版 V4.2235 发布，功能性能等多方面优化升级' target='_blank'>O2OA 稳定版 V4.2235 发布，功能性能等多方面优化升级</a></li></ul>
</div>

	    <div id="latest_comments" class="box">
    <h3 style="text-align:center">最新博客评论</h3>
    
      <div >
        Java获取weblogic当前服务器名称Java weblogic 集群节点名称Java 获取web ...<br/>
        <span class="gray">蕃薯耀 评论了</span>
                <a href="https://www.iteye.com/blog/fanshuyao-2443549#comments" target="_blank" title="Java获取weblogic当前服务器名称，Java weblogic 集群节点名称">Java获取weblogic当前服务器名称，Java web ...</a>
      </div>
    
      <div >
        Eclipse创建Maven项目web.xml文件版本问题解决Eclipse创建Maven项目修改默认 ...<br/>
        <span class="gray">蕃薯耀 评论了</span>
                <a href="https://www.iteye.com/blog/fanshuyao-2443263#comments" target="_blank" title="Eclipse创建Maven项目web.xml文件、JDK版本问题解决">Eclipse创建Maven项目web.xml文件、JDK ...</a>
      </div>
    
      <div >
        shiro ehcache缺少配置报错shiro ehcache出错ehcache PropertyA ...<br/>
        <span class="gray">蕃薯耀 评论了</span>
                <a href="https://www.iteye.com/blog/fanshuyao-2443247#comments" target="_blank" title="shiro ehcache缺少配置报错">shiro ehcache缺少配置报错</a>
      </div>
    
      <div >
        Apache Shiro1.4.1报错Object named 'filterChainResolve ...<br/>
        <span class="gray">蕃薯耀 评论了</span>
                <a href="https://www.iteye.com/blog/fanshuyao-2443220#comments" target="_blank" title="Apache Shiro1.4.1报错Object named 'filterChainResolver'">Apache Shiro1.4.1报错Object named 'filt ...</a>
      </div>
    
      <div >
        Eclipse优化Eclipse调优Eclipse 卡解决方案Eclipse卡死优化 ======== ...<br/>
        <span class="gray">蕃薯耀 评论了</span>
                <a href="https://www.iteye.com/blog/fanshuyao-2443208#comments" target="_blank" title="Eclipse优化，Eclipse调优，Eclipse 卡解决方案">Eclipse优化，Eclipse调优，Eclipse 卡解 ...</a>
      </div>
    
  </div>

        </div>
        
@endsection