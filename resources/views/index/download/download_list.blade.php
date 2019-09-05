@extends('public.index')
@section('title', '')
@section('content')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>ITeye Java编程 Spring框架 AJAX技术 Agile敏捷软件开发 ruby on rails实践-ITeye软件开发交流社区</title>
    <meta name="description" content="Java编程,Spring Struts Webwork框架深入,XMLHTTP AJAX开发,Java Web开发,Java企业应用,Java设计模式,Java开源框架,Java应用服务器,Rich Client讨论,Ruby编程,Ruby DSL开发,Ruby on rails实践,JavaScript编程,敏捷软件开发XP TDD,软件配置管理,软件测试,项目管理UML,数据库,C#/.net C/C++ Erlang/FP PHP/Linux平台,精通Hibernate" />
    <meta name="keywords" content="Java编程 Spring框架 AJAX技术 Agile敏捷软件开发 ruby on rails实践 软件工程 讨论 论坛 ITeye深度技术社区" />
    <meta name="report" content='{"pid":"iteye"}'>
    <link rel="search" type="application/opensearchdescription+xml" href="/open_search.xml" title="ITeye" />
    <link rel="shortcut icon" href="{{url('index/images')}}/favicon.ico" type="image/x-icon" />
    <link href="/rss/forum" rel="alternate" title="ITeye论坛" type="application/rss+xml" />
    <link href="{{url('index/css')}}/forum.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="{{url('index/js')}}/application.js" type="text/javascript"></script>
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
<script src="{{url('index/js')}}/jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript">var jQuery = jQuery.noConflict();// 解决jq与prototype.js命名空间冲突的问题</script>
<script src="{{url('index/js')}}/fixed-sidebar.js" type="text/javascript"></script>

      </head>
  <body>
    <div id="page">
<!--      <div id="header">-->
<!--        <div class="clearfix"></div>-->
<!--      </div>-->

      <div id="content" class="clearfix">
        <div id="main">
          



          <link href="{{url('index/css')}}/dl_main.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{url('index/css')}}/font-awesome.min.css">
<div class="home_page_wrap">
  <div class="container main">
    <div class="download_l main_l pull-left">
      <div class="resouces_tab_shows tab_nav J_tabSwitch" style="margin-top: 0px;">
        <div class="tab_bar">
          <ul class="tab_list clearfix">
            <li class="tab_item cur" type="dm" data-href="https://download.csdn.net/search/0/2/0/0/1">代码资源</li>
          </ul>
        </div>
        <div class="tab_con_box">
          <div class="tab_page tab3_con">
            <div class="album_detail_wrap">
              
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744207-11654120">
                        
                        <img src="{{url('index/picture')}}/zip.svg" alt="zip文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744207-11654120" class="album_detail_title">
                        前端项目-html5shiv.zip
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38744207
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743481-11654121">
                        
                        <img src="{{url('index/picture')}}/rar.svg" alt="rar文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743481-11654121" class="album_detail_title">
                        USB单片机CH559模拟U盘应用实例-CH563模拟U盘.rar
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38743481
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743481-11654122">
                        
                        <img src="{{url('index/picture')}}/unkonw.svg" alt="其他文档">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743481-11654122" class="album_detail_title">
                        USB单片机CH559模拟U盘应用实例-CH554DS1.PDF
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38743481
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743506-11654123">
                        
                        <img src="{{url('index/picture')}}/unkonw.svg" alt="其他文档">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743506-11654123" class="album_detail_title">
                        USB单片机CH559模拟U盘应用实例-CH552DS1.PDF
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38743506
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743602-11654124">
                        
                        <img src="{{url('index/picture')}}/zip.svg" alt="zip文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743602-11654124" class="album_detail_title">
                        关于99IOT(九九物联)赠品区资料说明 来围观吧-99固件说明书.zip
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38743602
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743737-11654125">
                        
                        <img src="{{url('index/picture')}}/zip.svg" alt="zip文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743737-11654125" class="album_detail_title">
                        关于99IOT(九九物联)赠品区资料说明 来围观吧-99模组开发资料.zip
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38743737
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744270-11654126">
                        
                        <img src="{{url('index/picture')}}/zip.svg" alt="zip文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744270-11654126" class="album_detail_title">
                        前端项目-breezejs.zip
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38744270
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743968-11654127">
                        
                        <img src="{{url('index/picture')}}/zip.svg" alt="zip文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743968-11654127" class="album_detail_title">
                        关于99IOT(九九物联)赠品区资料说明 来围观吧-99整体方案资料下载.zip
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38743968
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744375-11654128">
                        
                        <img src="{{url('index/picture')}}/zip.svg" alt="zip文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744375-11654128" class="album_detail_title">
                        前端项目-commandz.zip
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38744375
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744435-11654100">
                        
                        <img src="{{url('index/picture')}}/zip.svg" alt="zip文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744435-11654100" class="album_detail_title">
                        前端项目-knuth-shuffle.zip
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38744435
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743481-11654103">
                        
                        <img src="{{url('index/picture')}}/zip.svg" alt="zip文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743481-11654103" class="album_detail_title">
                        前端项目-fuse.js.zip
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38743481
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743481-11654104">
                        
                        <img src="{{url('index/picture')}}/zip.svg" alt="zip文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743481-11654104" class="album_detail_title">
                        前端项目-bootstrap-sidebar.zip
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38743481
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744435-11654105">
                        
                        <img src="{{url('index/picture')}}/pdf.svg" alt="pdf文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744435-11654105" class="album_detail_title">
                        GS8552高精度低温漂运放， GS8092高速运放，性能可媲美欧美系列。性价比高到你想象不到。-GS8552.pdf
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38744435
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743481-11654106">
                        
                        <img src="{{url('index/picture')}}/pdf.svg" alt="pdf文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743481-11654106" class="album_detail_title">
                        GS8552高精度低温漂运放， GS8092高速运放，性能可媲美欧美系列。性价比高到你想象不到。-GS8092_GS8094.pdf
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38743481
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743506-11654107">
                        
                        <img src="{{url('index/picture')}}/zip.svg" alt="zip文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743506-11654107" class="album_detail_title">
                        PIC32MM系列单片机DXP库文件，开发板资料后续上传-PIC32库文件.zip
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38743506
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743602-11654108">
                        
                        <img src="{{url('index/picture')}}/zip.svg" alt="zip文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743602-11654108" class="album_detail_title">
                        前端项目-jQuery-flexImages.zip
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38743602
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/qq_36193211-11654109">
                        
                        <img src="{{url('index/picture')}}/zip.svg" alt="zip文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/qq_36193211-11654109" class="album_detail_title">
                        secoclient.zip
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            qq_36193211
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743737-11654110">
                        
                        <img src="{{url('index/picture')}}/zip.svg" alt="zip文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743737-11654110" class="album_detail_title">
                        前端项目-jquery.ba-bbq.zip
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38743737
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743968-11654111">
                        
                        <img src="{{url('index/picture')}}/zip.svg" alt="zip文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743968-11654111" class="album_detail_title">
                        前端项目-js-quantities.zip
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38743968
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743737-11654112">
                        
                        <img src="{{url('index/picture')}}/pdf.svg" alt="pdf文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38743737-11654112" class="album_detail_title">
                        CV520直接pin对pin替换 MS520，FM17520，直接替换，无需修改硬件以及软件-MS520完美替换CV520_FM17520_V1.0.pdf
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38743737
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744153-11654113">
                        
                        <img src="{{url('index/picture')}}/pdf.svg" alt="pdf文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744153-11654113" class="album_detail_title">
                        WIS800C MQTT客户端连接MQTT服务器使用方法-WIS800C_ATCommand _CN_V1.0.pdf
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38744153
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744207-11654114">
                        
                        <img src="{{url('index/picture')}}/pdf.svg" alt="pdf文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744207-11654114" class="album_detail_title">
                        WIS800C MQTT客户端连接MQTT服务器使用方法-WIS800C_MQTT应用流程指导.pdf
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38744207
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744270-11654115">
                        
                        <img src="{{url('index/picture')}}/pdf.svg" alt="pdf文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744270-11654115" class="album_detail_title">
                        STM32F407IGT6开发板-STM32F407IGT6开发板原理图.pdf
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38744270
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744375-11654116">
                        
                        <img src="{{url('index/picture')}}/zip.svg" alt="zip文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744375-11654116" class="album_detail_title">
                        [开源]可能是功能最全面的MP3蓝牙BLE双模音频芯片模块测试板-KT1025A_蓝牙完整资料打包_V2.3.zip
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38744375
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744153-11654117">
                        
                        <img src="{{url('index/picture')}}/zip.svg" alt="zip文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744153-11654117" class="album_detail_title">
                        前端项目-font-awesome-animation.zip
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38744153
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744435-11654118">
                        
                        <img src="{{url('index/picture')}}/rar.svg" alt="rar文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744435-11654118" class="album_detail_title">
                        USB单片机CH559模拟U盘应用实例-CH559模拟U盘.rar
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38744435
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744270-11654093">
                        
                        <img src="{{url('index/picture')}}/pdf.svg" alt="pdf文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744270-11654093" class="album_detail_title">
                        直插电解电容/4700uF 50V紫高频加垫片，数据手册没有参数？-GR系列电容器.pdf
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38744270
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744375-11654097">
                        
                        <img src="{{url('index/picture')}}/rar.svg" alt="rar文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744375-11654097" class="album_detail_title">
                        大虾网超好的串口调试工具-sscom5.04a.rar-大虾网超好的串口工具-sscom5.04a.rar
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38744375
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744270-11654096">
                        
                        <img src="{{url('index/picture')}}/zip.svg" alt="zip文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744270-11654096" class="album_detail_title">
                        前端项目-Broadway.zip
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38744270
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
                  
                  <dl class="album_detail_list clearfix">
                    <dt>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744375-11654098">
                        
                        <img src="{{url('index/picture')}}/zip.svg" alt="zip文件">
                      </a>
                    </dt>
                    <dd>
                      <a target="_blank" href="//www.iteye.com/resource/weixin_38744375-11654098" class="album_detail_title">
                        前端项目-jsondiffpatch.zip
                      </a>
                      <div class="album_detail_bot clearfix">
                        <label><span>上传者：</span>
                          <em class="upl_name">
                            weixin_38744375
                          </em>
                        </label>
                        <label>
                          <span>上传时间：</span>
                          <em class="upl_time">
                            2019-09-03
                          </em>
                        </label>
                        <strong>
                          <span class="jifen">积分/C币：</span>
                          <em>5</em>
                        </strong>
                      </div>
                    </dd>
                  </dl>
                
              
            </div>
          </div>
          <!-- 翻页 -->
          <div class="page_nav">
            
            
              
                <strong>1</strong>
              
            
              
                <a class="pageliststy" href="/resources/2">2</a>
              
            
              
                <a class="pageliststy" href="/resources/3">3</a>
              
            
              
                <a class="pageliststy" href="/resources/4">4</a>
              
            
              
                <a class="pageliststy" href="/resources/5">5</a>
              
            
              
                <a class="pageliststy" href="/resources/6">6</a>
              
            
              
                <a class="pageliststy" href="/resources/7">7</a>
              
            
              
                <a class="pageliststy" href="/resources/8">8</a>
              
            
              
                <a class="pageliststy" href="/resources/9">9</a>
              
            
              
                <a class="pageliststy" href="/resources/10">10</a>
              
            
            
              <a class="pageliststy" href="">下一页</a>
            
          </div>
        </div>
      </div>
    </div>
    <div class="main_r pull-right">
      <div class="dl_right_fixed">
        <!--我的tag-->
        <div class="tags right_plate_con">
          <div class="com_plate_tit"><span class="plate_title">热门资源标签</span>
          </div>
          <div class="con_detail content clearfix">
            
              
                <a href="https://www.csdn.net/gather_1e/OtTakg3sLWRvd25sb2Fk.html?utm_source=iteye" target="_blank">c# task停止</a>
              
                <a href="https://www.csdn.net/gather_19/OtTakg4sLWRvd25sb2Fk.html?utm_source=iteye" target="_blank">c#使用mongodb</a>
              
                <a href="https://www.csdn.net/gather_1b/OtTakg5sLWRvd25sb2Fk.html?utm_source=iteye" target="_blank">c#入门经典第七版</a>
              
                <a href="https://www.csdn.net/gather_1a/MtTaAgwsMC1kb3dubG9hZAO0O0OO0O0O.html?utm_source=iteye" target="_blank">c#设置超时程序</a>
              
                <a href="https://www.csdn.net/gather_1b/MtTaAgwsMS1kb3dubG9hZAO0O0OO0O0O.html?utm_source=iteye" target="_blank">c#一个日期格式加上时分</a>
              
                <a href="https://www.csdn.net/gather_1f/MtTaAgwsMi1kb3dubG9hZAO0O0OO0O0O.html?utm_source=iteye" target="_blank">c# 按行读取excel</a>
              
                <a href="https://www.csdn.net/gather_1a/MtTaAgwsMy1kb3dubG9hZAO0O0OO0O0O.html?utm_source=iteye" target="_blank">c#画图固定</a>
              
                <a href="https://www.csdn.net/gather_1f/MtTaAgwsNC1kb3dubG9hZAO0O0OO0O0O.html?utm_source=iteye" target="_blank">c# 读取dataset</a>
              
                <a href="https://www.csdn.net/gather_22/MtTaAgwsNS1ibG9n.html?utm_source=iteye" target="_blank">如何c#按钮透明</a>
              
                <a href="https://www.csdn.net/gather_19/MtTaAgwsNi1kb3dubG9hZAO0O0OO0O0O.html?utm_source=iteye" target="_blank">c#能跨平台吗</a>
              
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

        </div>
 @endsection