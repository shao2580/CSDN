<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" dir="ltr">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <title>ITeye软件开发交流社区-@yield('title') </title> 
  <meta name="description" content="Java编程,Spring Struts Webwork框架深入,XMLHTTP Ajax开发,Java Web开发,Java企业应用,Java设计模式,Java开源框架,Java应用服务器,Rich Client讨论,Ruby编程,Ruby DSL开发,Ruby on rails实践,JavaScript编程,敏捷软件开发XP TDD,软件配置管理,软件测试,项目管理UML,数据库,C#/.net C/C++ Erlang/FP PHP/Linux平台,精通Hibernate" /> 
  <meta name="keywords" content="Java编程 Spring框架 Ajax技术 agile敏捷软件开发 ruby on rails实践 ITeye深度技术社区" /> 
  <meta name="baidu_union_verify" content="7b2a15d73dd1b1b6a67d7a4ddcfffa33" /> 
  <meta name="report" content="{&quot;pid&quot;:&quot;iteye&quot;}" /> 
  <link rel="shortcut icon" href="{{url('index/images')}}/favicon.ico" type="image/x-icon" /> 
  <link rel="search" type="application/opensearchdescription+xml" href="/open_search.xml" title="ITeye" /> 
  <link href="/rss" rel="alternate" title="ITeye技术网站RSS频道订阅" type="application/rss+xml" /> 
  <link href="{{url('index/css')}}/new_homepage.css" media="screen" rel="stylesheet" type="text/css" /> 
  <script src="{{url('index/js')}}/application_2.js" type="text/javascript"></script> 
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
  <script src="{{url('index/js')}}/jquery-1.11.1.min_2.js" type="text/javascript"></script> 
  <script type="text/javascript">var jQuery = jQuery.noConflict();// 解决jq与prototype.js命名空间冲突的问题</script> 
  <script src="{{url('index/js')}}/fixed-sidebar_2.js" type="text/javascript"></script> 

  <link href="{{url('index/css')}}/passport.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="{{url('index/css')}}/passport_1.css" media="screen" rel="stylesheet" type="text/css" />
 </head> 
 <body> 
  <div> 
   <!-- Ads ID 229 --> 
  </div> 
  <div id="page"> 
@yield('content')
<div id="nav"> 
     <div class="wrapper"> 
      <ul> 
       <li><a href="index" class="selected">ITeye首页</a></li> 
       <li><a href="blogs">博客</a></li> 
       <li><a href="forums">论坛</a></li> 
       <li><a href="answer_list">问答</a></li>
       <li><a href="download_list">下载</a></li>  
       <li><a href="">资讯</a></li> 
       <li><a href="">精华</a></li>    
       <li><a href="">专栏</a></li> 
       <li class="last"><a href="">群组</a></li> 
       <div class="login-fr"> 
        <a href="login" class="welcome" title="登录"> 您还未登录! </a>| 
        <a href="login">登录</a>| 
        <a href="register_1">注册</a> 
       </div> 
      </ul> 
     </div> 
    </div> 
    <style>
.login-fr{
  float: right;
  text-align: right;
  line-height: 27px;
  color:#fff;
  overflow: hidden;
}
.login-fr a{
  display: inline!important;
  padding-left: 7px!important;
  padding-right: 7px!important;
  margin:0 7px!important;
}
</style> 
   </div> 
   <div id="footer"> 
    <div id="site_nav"> 
     <ul> 
      <li><a href="/index/service">广告服务</a></li> 
      <li><a href="https://webmaster.iteye.com">ITeye黑板报</a></li> 
      <li><a href="/index/contactus">联系我们</a></li> 
      <li class="last"><a href="/index/friend_links">友情链接</a></li> 
     </ul> 
    </div> 
    <div id="copyright">
      &copy; 2003-2019 ITeye.com. [ 
     <a href="http://beian.miit.gov.cn/publish/query/indexFirst.action">京ICP备19004658</a> 
     <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010502030278">京公网安备11010502030278</a> ]
     <br /> 北京创新乐知网络技术有限公司 版权所有
     <br /> 
    </div> 
   </div> 
   <center>
    <a href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202012082400500"><img src="picture/biaoshi.gif" /></a>
   </center> 
  </div> 
  <script type="text/javascript">
  document.write("<img src='picture/ffdd2d19ef8745f4a8f33302899cee48.gif"+ encodeURIComponent(document.location.href) + "&referrer=" + encodeURIComponent(document.referrer) + "&user_id=' width='0' height='0' />");
</script> Global site tag (gtag.js) - Google Analytics 
  <script async="" src="{{url('index/js')}}/b0423dba13714ef09050df203c25bd9c.js"></script> 
  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-127895514-6');
  </script> 
  <script type="text/javascript">
      function pongoad57(url_list)
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
            li += "<a target='_blank' href='" + encodeURI(url.joburl) + "'> 诚聘" + url.jobname.escapeHTML() + "</a>";
          }
          html += "<li>" + li + "</li>";
        }
        $$("#recommended ul").first().innerHTML=html;
      }
    </script> 
  <script type="text/javascript">
      var url = encodeURIComponent(document.location.href);
      var id = 57;
      var callbackfun="pongoad57";
      //document.write(unescape('%3Cscript src="http://a.pongo.cn/Job/GetAdForIteyeCallBack%3Fid%3D'+id+'%26Url%3D'+encodeURIComponent(url)+'%26&CallBack%3D'+callbackfun+'" type="text/javascript"%3E%3C/script%3E'));
    </script> 
  <script src="{{url('index/js')}}/jquery-1.11.1.min_2.js" type="text/javascript"></script> 
  <script src="{{url('index/js')}}/report.js" type="text/javascript"></script> 
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
  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-127895514-6');
  </script>
  <script type="text/javascript">

        (function(){
            not_loading = true;
            pageNum = 3
            oList = $csdn_iteye_jq("#album_detail_wrap");
            $csdn_iteye_jq(window).scroll(function() {
                var scrollTop = $csdn_iteye_jq(this).scrollTop();
                var scrollHeight = $csdn_iteye_jq(document).height() ;
                var windowHeight = $csdn_iteye_jq(this).height();
                if (scrollTop + windowHeight >= scrollHeight) {
                    if(not_loading){
                        refreshMore();
                        setTimeout(function(){
                            getMore();
                        },100);
                    }else{
                        $csdn_iteye_jq(".dl_more").remove();
                    }
                }
            });

            function getMore(){
                not_loading = false;
                console.log("getMore......");
                $csdn_iteye_jq.ajax({
                    type: 'get',
                    url: '/blogs/ajax_get_blogs',
                    data:{
                        page:pageNum
                    },
                    //async: false,
                    dataType: 'json',
                    success: function (resobj) {
                        var totalNum = resobj.total_pages;
                        if(pageNum <= totalNum && resobj.oHtml != ''){
                            $csdn_iteye_jq(".dl_more").remove();
                            oList.find('ul').append(resobj.oHtml);
                            refreshMore();
                            not_loading = true;
                            pageNum++;
                        }else{
                            not_loading = false;
                            noMore();
                        }
                    },
                    error: function (err) {
                        console.log(err);
                    }
                });
            }

            function noMore(){
                $csdn_iteye_jq(".dl_more").remove();
                if(oList.find(".dl_no_more").length ==0){
                    oList.append('<div class="dl_no_more" style="font-size:14px; color:#0F8AC6; text-align:center;padding-top:10px; ">我们是很有底线的</div>');
                }
            }

            // function refreshMore(){
            //     if(oList.find(".dl_more").length ==0){
            //         oList.append('<div class="dl_more" style="font-size:14px; color:#0F8AC6; text-align:center;padding-top:10px;">上滑加载更多</div>');
            //     }
            // }
        })();
    </script>   
 </body>
</html>