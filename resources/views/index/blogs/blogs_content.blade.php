@extends('public.index')
@section('title', '')
@section('content')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" dir="ltr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>
    uniapp爬坑之路知识点 -  - ITeye博客
  </title>
  <meta name="description" content="  uniapp爬坑之路知识点     1、uniapp页面参数传递  (1)、链接传递  要传递参数的页面：&lt;navigator :url=&quot; './nav?index='+navData&quot;&gt;点击传递参数&lt;/navigator&gt;  接收参数页面:  onload(options){      console.log(options.index);  }  ..." />
  <meta name="keywords" content="uni-app, 全局变量, 参数传递 uniapp爬坑之路知识点" />
  <meta name="report" content='{"pid":"iteye"}'>
  <link rel="shortcut icon" href="{{url('index/images')}}/favicon.ico" type="image/x-icon" />
  <link rel="search" type="application/opensearchdescription+xml" href="/open_search.xml" title="ITeye" />
  <link href="/rss" rel="alternate" title="" type="application/rss+xml" />
  <link href="{{url('index/css')}}/blog.css" media="screen" rel="stylesheet" type="text/css" />
<link href="{{url('index/css')}}/blue.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="{{url('index/js')}}/application_4.js" type="text/javascript"></script>
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
<script src="{{url('index/js')}}/jquery-1.11.1.min_4.js" type="text/javascript"></script>
<script type="text/javascript">var jQuery = jQuery.noConflict();// 解决jq与prototype.js命名空间冲突的问题</script>
<script src="{{url('index/js')}}/fixed-sidebar_2.js" type="text/javascript"></script>

    <link href="{{url('index/css')}}/syntaxhighlighter.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="{{url('index/js')}}/shcorecommon.js" type="text/javascript"></script>
<script src="{{url('index/js')}}/hotkey.js" type="text/javascript"></script>
  <script src="{{url('index/js')}}/code_favorites.js" type="text/javascript"></script>
<script src="{{url('index/js')}}/weiboshare.js" type="text/javascript"></script>

  <!-- 请置于所有广告位代码之前 -->
  <script src="{{url('index/js')}}/ds.js"></script>
  <link ref="canonical" href="http://www.iteye.com/blog/java-tj-2444057">
  <script src="{{url('index/js')}}/c.js"></script>
  <script src="{{url('index/js')}}/recommend.js"></script>
</head>

<body>
  <div id="header">
    <div id="blog_site_nav">
  <a href="https://www.iteye.com/" class="homepage">首页</a>
  <a href="https://www.iteye.com/news">资讯</a>
  <a href="https://www.iteye.com/magazines">精华</a>
  <a href="https://www.iteye.com/forums">论坛</a>
  <a href="https://www.iteye.com/ask">问答</a>
  <a href="https://www.iteye.com/blogs">博客</a>
  <a href="https://www.iteye.com/blogs/subjects">专栏</a>
  <a href="https://www.iteye.com/groups">群组</a>
  <a href="https://www.iteye.com/resources">下载</a>
</div>

    <div id="user_nav">

      <a href="/login" class="welcome" title="登录">您还未登录!</a>
    <a href="/login">登录</a>
    <a href="/signup" class="nobg">注册</a>
    <!--<a href="https://passport.csdn.net/account/mobileregister?from=https://www.iteye.com">注册</a>-->
  </div>


  </div>

  <div id="page">
<!--    <div id="branding" class="clearfix">-->
<!--      <div id="blog_name">-->
<!--        <h1><a href="/">-->
<!--            </a></h1>-->
<!--      </div>-->
<!--      <div id='fd'></div>-->
<!--      <div id="blog_navbar">-->
<!--        <ul>-->
          
          
          
          
          
          
<!--        </ul>-->

<!--        <div class="search">-->
<!--          <form action="/blog/search" method="get">-->
<!--            <input class="search_text" id="query" name="query" style="margin-left: 10px;width: 110px;" type="text"-->
<!--              value="" />-->
<!--            <input class="submit_search" type="submit" value="" />-->
<!--          </form>-->
<!--        </div>-->
<!--        <div id="fd"></div>-->
<!--      </div>-->
<!--    </div>-->
    `
    <div id="content" class="clearfix">
      <div id="local">
        <div class="local_top"></div>
        <div id="blog_owner">
  <div id="blog_owner_logo"><a href='https://www.iteye.com/blog/user/java-tj'><img alt="Java_tj的博客" class="logo" src="{{url('index/picture')}}/510f205f-34b1-3019-b891-8b61fdee31c4.jpg" title="Java_tj的博客: " width="" /></a></div>
  <div id="blog_owner_name">Java_tj</div>
</div>

        <div id="blog_actions">
          <ul>
            <li>浏览:
              3593 次</li>
            
            <li>性别:
              <img alt="Icon_minigender_2" src="{{url('index/picture')}}/icon_minigender_2.gif" title="女" />
            </li>
            
            
            <li>来自:
              长沙
            </li>
            
            <li>
              <img src='{{url('index/picture')}}/offline.gif'/>
            </li>
            
          </ul>
        </div>

        <div id="user_visits" class="clearfix">
          <h5>最近访客 <span style='font-weight:normal;font-size:12px;padding-left:30px;'>
              <a href="/blog/user_visits">更多访客&gt;&gt;</a></span></h5>
          
          <div class="user_visit">
            <div class="logo"><a href='https://www.iteye.com/blog/user/1452721672' target='_blank'><img alt="那块砖头的博客" class="logo" src="{{url('index/picture')}}/user-logo-thumb_1.gif" title="那块砖头的博客: " width="48px" /></a></div>
            <div class="left">
              <a href='https://www.iteye.com/blog/user/1452721672' target='_blank' title='那块砖头'>那块砖头</a>
            </div>
          </div>
          
          <div class="user_visit">
            <div class="logo"><a href='https://www.iteye.com/blog/user/zmrwego' target='_blank'><img alt="ZMRWEGO的博客" class="logo" src="{{url('index/picture')}}/user-logo-thumb_1.gif" title="ZMRWEGO的博客: " width="48px" /></a></div>
            <div class="left">
              <a href='https://www.iteye.com/blog/user/zmrwego' target='_blank' title='ZMRWEGO'>ZMRWEGO</a>
            </div>
          </div>
          
          <div class="user_visit">
            <div class="logo"><a href='https://www.iteye.com/blog/user/mafei11011' target='_blank'><img alt="拥抱夏天的风的博客" class="logo" src="{{url('index/picture')}}/b6731ea7-2565-3eac-8d39-3a704cfc3306-thumb.jpg" title="拥抱夏天的风的博客: " width="48px" /></a></div>
            <div class="left">
              <a href='https://www.iteye.com/blog/user/mafei11011' target='_blank' title='拥抱夏天的风'>拥抱夏天的风</a>
            </div>
          </div>
          
          <div class="user_visit">
            <div class="logo"><a href='https://www.iteye.com/blog/user/zhouyi123' target='_blank'><img alt="zhouyi123的博客" class="logo" src="{{url('index/picture')}}/user-logo-thumb_1.gif" title="zhouyi123的博客: " width="48px" /></a></div>
            <div class="left">
              <a href='https://www.iteye.com/blog/user/zhouyi123' target='_blank' title='zhouyi123'>zhouyi123</a>
            </div>
          </div>
          
        </div>

        <div id="user_title_list" class="clearfix">
          <h5>博主相关</h5>
          <li>
            <a href="https://www.iteye.com/blog/user/java-tj">博客</a>
          </li>

          <li>
            <a href="/weibo">微博</a>
          </li>

          <li>
            <a href="/album">相册</a>
          </li>

          <li>
            <a href="/link">收藏</a>
          </li>

          <li>
            <a href="/blog/guest_book">留言</a>
          </li>

          <li>
            <a href="/blog/profile">关于我</a>
          </li>
        </div>

        

                <div id="blog_menu">
          <h5>文章分类</h5>
          <ul>
            <li>
              <a href="/">全部博客 (5)</a>
            </li>
            
            <li>
              <a href="/category/376475">Java知识点 (0)</a>
              </li>
              
            <li>
              <a href="/category/376499">java (4)</a>
              </li>
              
            <li>
              <a href="/category/379310">javaIO (0)</a>
              </li>
              
            <li>
              <a href="/category/383693">uniapp (1)</a>
              </li>
              
          </ul>
        </div>
        <div id='month_blogs'>
          <h5>社区版块</h5>
          <ul>
            <li>
              <a href="/blog/news">我的资讯</a> (
              0)</li>
            <li>
              <a href="/blog/post">我的论坛</a> (
              0)
            </li>
            <li>
              <a href="/blog/answered_problems">我的问答</a> (
              0)</li>
          </ul>
        </div>
        <div id="month_blogs">
          <h5>存档分类</h5>
          <ul>
            
            <li>
              <a href="/blog/monthblog/2019-09">2019-09</a>
              (
              1)</li>
            
            <li>
              <a href="/blog/monthblog/2018-04">2018-04</a>
              (
              1)</li>
            
            <li>
              <a href="/blog/monthblog/2017-11">2017-11</a>
              (
              3)</li>
            
            <li>
              <a href="/blog/monthblog_more">更多存档...</a>
            </li>
          </ul>
        </div>
        
        

        <div id="guest_books">
          <h5>最新评论</h5>
          <ul>
            
          </ul>
        </div>

        <div class="local_bottom"></div>
        
        <div id="nav_show_top_stop">
            <div>
              <!-- 广告位：PC端-iteye博客详情页左侧Button1-200*200 -->
              
              <!-- Ads ID 423 -->
              
                <div style="text-align: center">
                  <div id="kp_box_423" data-pid="423"><iframe  src="https://adaccount.csdn.net/#/preview/291?m=LJcipJDUJHbScpUmHpbcQtoptSbDHLfiDAAJJLtUALHDioJncHUJmcLLbWDUoAbLiiULAnJLAEbLnnyniynLnvbUEEpvmSHEccio&k=" frameborder="0" width= "300px"  height= "250px" scrolling="no" ></iframe><img class="pre-img-lasy" data-src="{{url('index/picture')}}/1_2.png"></div>
                </div>
              
            </div>
            <div>
              <!-- 广告位：PC端-iteye博客详情页左侧Button2-200*200 -->
              
              <!-- Ads ID 424 -->
              
            </div>
          </div>
      </div>
      
      <div id="main" class="not_exist_right_recommend">
        



        


<div class="h-entry" style='display:none'>
  <a href="https://www.iteye.com/blog/user/java-tj" class="p-author" target="_blank">Java_tj</a>
</div>


<div class="blog_main">
  <script type="application/ld+json">
    {
        "@context": "https://zhanzhang.baidu.com/contexts/cambrian.jsonld",
        "@id": "http://www.iteye.com/blog/java-tj-2444057",
        "title": "uniapp爬坑之路知识点",
        "images": [],
        "description": "",
        "pubDate": "2019-09-03T10:33:42"
    }
  </script>
  <div class="blog_title">
    <h3>
      uniapp爬坑之路知识点
      <em class="actions">      </em>
    </h3>
    <ul class='blog_categories'><strong>博客分类：</strong> <li><a href="/category/383693">uniapp</a></li> </ul>
        <div class='news_tag'><a href="http://www.iteye.com/blogs/tag/uni-app">uni-app</a><a href="http://www.iteye.com/blogs/tag/%E5%85%A8%E5%B1%80%E5%8F%98%E9%87%8F">全局变量</a><a href="http://www.iteye.com/blogs/tag/%E5%8F%82%E6%95%B0%E4%BC%A0%E9%80%92">参数传递</a>&nbsp;</div>
  </div>

  <div id="blog_content" class="hide-main-content">
    <div class="hide-article-box text-center">
      <a class="btn" id="btn-readmore">阅读更多</a>
    </div>
    <div class="iteye-blog-content-contain" style="font-size: 14px;">
<p style="text-align: center;"><span style="font-size: 18px;"><strong>uniapp爬坑之路知识点</strong></span></p>
<p> </p>
<p>1、uniapp页面参数传递</p>
<p>(1)、链接传递</p>
<p>要传递参数的页面：&lt;navigator :url=" './nav?index='+navData"&gt;点击传递参数&lt;/navigator&gt;</p>
<p>接收参数页面:</p>
<p>onload(options){</p>
<p>    console.log(options.index);</p>
<p>}</p>
<p>(2)、事件传递多个参数    传递数组用事件传递，需要转换成字符串</p>
<p>&lt;button @click="dataClick"&gt;点击事件&lt;/button&gt;   </p>
<p>methods:{</p>
<p>    dataClick(){</p>
<p>         var nvaData=JSON.stringify(this.nvaData);   //转换成字符串</p>
<p>         uni.navigateTo({</p>
<p>                    url:'./nav?index='+nvaData<br>          })</p>
<p>    }</p>
<p>}</p>
<p>接收的页面：</p>
<p>onload(options){</p>
<p>       var data = JSON.parse(options.index); // 字符串转对象</p>
<p>       console.log(data)</p>
<p>}</p>
<p>2、全局变量   参考资料：<a href="https://ask.dcloud.net.cn/article/35021">https://ask.dcloud.net.cn/article/35021</a></p>
<p>两种方式：一种公用页面  使用时引入  一种直接在main.js中进入vue.prototype中的自定义属性，全局可以调用this.属性。</p>
<p>3、flex布局方式</p>
<p> </p>
</div>

  


  <div id="bottoms" class="clearfix">
    <div id="digg_bottom" class="clearfix"><div class='digged'><strong>0</strong> <br/>顶</div><div class='digged'><strong>0</strong> <br/>踩</div></div>
    <div id="share_weibo">分享到：
      <a data-type='sina' href="javascript:;" title="分享到新浪微博"><img src="{{url('index/picture')}}/sina.jpg"></a>
      <a data-type='qq' href="javascript:;" title="分享到腾讯微博"><img src="{{url('index/picture')}}/tec.jpg"></a>
    </div>
  </div>

  <div class="blog_nav">
    <div class="pre_next">
      
      
      <a href="/blog/2415165" class="pre" title="java反射">java反射</a>
    </div>
  </div>
  <div class="blog_bottom">
    <ul>
      <li>1 小时前</li>
      <li>浏览 15</li>
      <li><a href="#comments">评论(0)</a></li>
      
      
      <li>分类:<a href="https://www.iteye.com/blogs/category/mobile">移动开发</a></li>      
      <li class='last'><a href="https://www.iteye.com/wiki/blog/2444057" target="_blank" class="more">查看更多</a></li>
    </ul>    
  </div>
    
  <div class="blog_comment">
    <h5>评论</h5>
    <a id="comments" name="comments"></a>
    
    
    
  </div>

  <div class="blog_comment">
    <h5>发表评论</h5>
            <p style="text-align:center; margin-top:30px;margin-bottom:0px;"><a href="/login" style="background-color:white;"> <img src="{{url('index/picture')}}/login_icon.png" style="vertical-align:middle; margin-right: 10px;" /></a><a href="/login">  您还没有登录,请您登录后再发表评论 </a></p>
      </div>
  </div>
</div>


<script type="text/javascript">
  dp.SyntaxHighlighter.HighlightAll('code', true, true);

  $$('#main .blog_content pre[name=code]').each(function(pre, index){ // blog content
    var post_id = 2444057;
    var location = window.location;
    source_url = location.protocol + "//" + location.host + location.pathname + location.search;
    pre.writeAttribute('codeable_id', post_id);
    pre.writeAttribute('codeable_type', "Blog");
    pre.writeAttribute('source_url', source_url);
    pre.writeAttribute('pre_index', index);
    pre.writeAttribute('title', 'uniapp爬坑之路知识点');
  });

  fix_image_size($$('div.blog_content img'), 700);

  function processComment() {
    $$('#main .blog_comment > div').each(function(comment){// comment
      var post_id = comment.id.substr(2);
      $$("#"+comment.id+" pre[name=code]").each(function(pre, index){
        var location = window.location;
        source_url = location.protocol + "//" + location.host + location.pathname + location.search;
        source_url += "#" + comment.id;
        pre.writeAttribute('codeable_id', post_id);
        pre.writeAttribute('codeable_type', "BlogComment");
        pre.writeAttribute('source_url', source_url);
        pre.writeAttribute('pre_index', index);
        pre.writeAttribute('title', 'uniapp爬坑之路知识点');
      });
    });
  }

  function quote_comment(id) {
    new Ajax.Request('/editor/quote', {
      parameters: {'id':id, 'type':'BlogComment'},
      onSuccess:function(response){editor.bbcode_editor.textarea.insertAfterSelection(response.responseText);
        Element.scrollTo(editor.bbcode_editor.textarea.element);}
    });
  }

  code_favorites_init();
  processComment();
  new WeiboShare({share_buttons: $('share_weibo'), img_scope: $('blog_content')});
</script>




      </div>
            <script>
        setTimeout(function () {
          var naviga_offsetTop = 0;

          function onload_function() {
            naviga_offsetTop = jQuery("#nav_show_top_stop").position().top;
            jQuery(window).bind("scroll", naviga_stay_top);
            jQuery(window).bind("mousewheel", naviga_stay_top);
            jQuery(document).bind("scroll", naviga_stay_top);
            jQuery(document).bind("mousewheel", naviga_stay_top);
          }

          function naviga_stay_top() {

            var scrollTop = jQuery(document).scrollTop();
            if (scrollTop > (naviga_offsetTop + 250)) {
              jQuery("#nav_show_top_stop").css({
                "position": "fixed"
              });
              jQuery("#nav_show_top_stop").css({
                "top": "0px"
              });
            } else {
              jQuery("#nav_show_top_stop").css({
                "position": "fixed"
              });
              jQuery("#nav_show_top_stop").css({
                "top": naviga_offsetTop + 250 - scrollTop + "px"
              });
            }
          }
          jQuery(document).ready(onload_function());
        }, 200);
      </script>
    </div>
    
    <div id="footer" class="clearfix">
      <!-- <div id="copyright">
        <hr />
        声明：ITeye文章版权属于作者，受法律保护。没有作者书面许可不得转载。若作者同意转载，必须以超链接形式标明文章原始出处和作者。<br />
        &copy; 2003-
        2019 ITeye.com. All rights reserved. [ 京ICP证110151号 京公网安备110105010620 ]
      </div> -->
      <div id="ad_pop">
        <div class="J_adv" data-view="true" data-mod="ad_popu_64" data-mtp="62" data-order="21" data-con="ad_content_2070">
          <!-- 广告位：PC端-iteye博客详情右侧弹窗-300*250 -->
          
          
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  document.write("<img src='{{url('index/picture')}}/379470ea9bd545cf9b194df1f51a7166.gif"+ encodeURIComponent(document.location.href) + "&referrer=" + encodeURIComponent(document.referrer) + "&user_id=' width='0' height='0' />");
</script>



   Global site tag (gtag.js) - Google Analytics
  <script async src="{{url('index/js')}}/5702bdcf5cba4f0987ef922434a0f2dd.js"></script>
  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-127895514-6');
  </script>

  
  
  <script src="{{url('index/js')}}/jquery-1.11.1.min_4.js" type="text/javascript"></script>
<script src="{{url('index/js')}}/report_1.js" type="text/javascript"></script>
<style>
  .userinfo {display: none !important;}
  .persion_article h3{
    background: none !important;
    border-bottom: none!important;
    padding: 0!important;
    margin-bottom: 0!important;
    line-height: 1!important;
  }
  .persion_article .right_box{
    margin-top: 0!important;
  }
  .persion_article .footer_box .feed_new_tit span{
    padding-left: 0!important;
  }
</style>
<script>
(function($){
  var windowHeight = $(window).height(),
      contentHeight = $(".hide-main-content").height()
      windowHeight = windowHeight * 1.2 //获得可视区域高度
      if(contentHeight > windowHeight){
        $(".hide-article-box").show()
        $(".hide-main-content").css({'height': windowHeight,'overflow':'hidden'})
        $(".hide-article-box").find("#btn-readmore").click(function(){
          $(this).parents('.hide-main-content').removeAttr('style')
          $(this).parent().hide()
        })
      }
})(jQuery)
</script>
<script type="text/javascript">var $csdn_iteye_jq = jQuery.noConflict();// 解决jq与prototype.js命名空间冲突的问题</script>


  
  
  <script src="{{url('index/js')}}/web-storage-cache.min.js" type="text/javascript"></script>
  <script src="{{url('index/js')}}/replace.min.js" type="text/javascript"></script>
  

</body>
@endsection