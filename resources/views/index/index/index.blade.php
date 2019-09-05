@extends('public.index')
@section('title', '')
@section('content')  
 <!--      <div id="header">--> 
   <!--        <div class="clearfix"></div>--> 
   <!--      </div>--> 
   <div id="content" class="clearfix"> 
    <div id="main"> 
     <div id="news"> 
      <div class="news_picture"> 
       <div> 
        <table class="ge" id="ge" cellspacing="0" cellpadding="0"> 
         <tbody> 
          <tr> 
           <td class="pic" id="bimg"> 
            <div id="top_pictures"> 
             <div class="dis" id="top_picture_image_0" style=""> 
              <a href="https://edu.csdn.net/topic/python115?utm_source=iteyebanner" target="_blank" title="Python全栈工程师"><img alt="336" src="picture/336.jpg" /></a> 
             </div> 
             <div class="dis" id="top_picture_image_1" style="display: none;"> 
              <a href="https://edu.csdn.net/topic/python115?utm_source=iteyebanner" target="_blank" title="Python全栈工程师"><img alt="微信图片_20181023091840" src="picture/微信图片_20181023091840.png" /></a> 
             </div> 
             <div class="dis" id="top_picture_image_2" style="display: none;"> 
              <a href="https://edu.csdn.net/topic/ai20?utm_source=iteyebanner" target="_blank" title="人工智能工程师"><img alt="微信图片_20181023091427" src="picture/微信图片_20181023091427.png" /></a> 
             </div> 
            </div> 
            <table id="font_hd" cellspacing="0" cellpadding="0"> 
             <tbody> 
              <tr> 
               <td class="lkff" id="info"> 
                <div class="dis" id="top_picture_title_0" style=""> 
                 <a href="https://edu.csdn.net/topic/python115?utm_source=iteyebanner" target="_blank" title="Python全栈工程师">Python全栈工程师</a> 
                </div> 
                <div class="dis" id="top_picture_title_1" style="display: none;"> 
                 <a href="https://edu.csdn.net/topic/python115?utm_source=iteyebanner" target="_blank" title="Python全栈工程师">Python全栈工程师</a> 
                </div> 
                <div class="dis" id="top_picture_title_2" style="display: none;"> 
                 <a href="https://edu.csdn.net/topic/ai20?utm_source=iteyebanner" target="_blank" title="人工智能工程师">人工智能工程师</a> 
                </div> </td> 
               <td id="simg"> 
                <div id="simg-wrap"> 
                 <div class="dis " id="top_picture_button_0">
                   1 
                 </div> 
                 <div class="dis f1" id="top_picture_button_1">
                   2 
                 </div> 
                 <div class="dis f1" id="top_picture_button_2">
                   3 
                 </div> 
                </div> </td> 
              </tr> 
             </tbody> 
            </table> </td> 
          </tr> 
         </tbody> 
        </table> 
        <script type="text/javascript">
                    (function(){
                      var total = 3;
                      var current = 0;
                      var auto_play_on = true;

                      $('bimg').observe('mouseover', function() {auto_play_on = false;});
                      $('bimg').observe('mouseout', function() {auto_play_on = true;});

                      var showPicture = function(index) {
                        if (current !== index) {
                          new Effect.Fade('top_picture_image_' + current);
                          new Effect.Appear('top_picture_image_' + index);
                          $('top_picture_title_' + current).hide();
                          $('top_picture_title_' + index).show();
                          $('top_picture_button_' + current).addClassName('f1');
                          $('top_picture_button_' + index).removeClassName('f1');
                          current = index;
                        }
                      };

                      for (var i = 0; i < total; i++) {
                        $('top_picture_button_' + i).observe('click', (function(i) {
                          return function(ev) {
                            showPicture(i);
                          }
                        })(i));
                      };

                      var autoPlay = function() {
                        if (total !== 0 && auto_play_on) {
                          var next = (current < (total - 1)) ? (current + 1) : 0;
                          showPicture(next);
                        }
                      };
                      setInterval(autoPlay, 5000);
                    })();
                  </script> 
       </div> 
      </div> 
      <div class="news_content"> 
       <h3><span>热点聚焦</span></h3> 
       <dl> 
        <dt>
         <a href="http://www.iteye.com/news/33001" target="_blank" title="TIOBE 5 月编程语言排行榜：暴涨的 C，逆袭的 Scala">TIOBE 5 月编程语言排行榜：暴涨的 C，逆袭的 Scala</a>
        </dt> 
        <dd>
          TIOBE 刚刚发布了 5 月编程语言排行榜。本月榜单最大的不同在于，Scala 编程语言终于进入了 Top 20，成功挤掉了 PL/SQL。 
         <a href="http://www.iteye.com/news/33001" target="_blank" title="TIOBE 5 月编程语言排行榜：暴涨的 C，逆袭的 Scala">[详情]</a> 
        </dd> 
        <dt>
         <a href="http://www.iteye.com/news/32997" target="_blank" title="怎样解决编程语言之间的差异性问题？">怎样解决编程语言之间的差异性问题？</a>
        </dt> 
        <dd>
          毫无疑问，不同的编程语言间存在着很多差异性。那么对于这种差异性开发者应如何解决？本文就来一探究竟。 
         <a href="http://www.iteye.com/news/32997" target="_blank" title="怎样解决编程语言之间的差异性问题？">[详情]</a> 
        </dd> 
        <dt>
         <a href="http://www.iteye.com/news/32993" target="_blank" title=" 嘴上说着喜爱Java 9 ，身体却诚实地拥抱了Java 8 "> 嘴上说着喜爱Java 9 ，身体却诚实地拥抱了Java 8 </a>
        </dt> 
        <dd>
          五一假日期间，JAXcenter再放大招，为我们带来了完整的2018年备受关注的编程语言榜单。 
         <a href="http://www.iteye.com/news/32993" target="_blank" title=" 嘴上说着喜爱Java 9 ，身体却诚实地拥抱了Java 8 ">[详情]</a> 
        </dd> 
       </dl> 
      </div> 
     </div> 
     <div class="tuiguang"> 
      <!-- Ads ID 225 --> 
      <div id="kp_box_225" data-pid="225">
       <iframe src="https://adaccount.csdn.net/#/preview/262?m=pSLpbcQpQLLiLHbcDybtppHicQnpiEALLJmAAbnALiEiinfHDDtnipiEpvASHbLSDXDSHQEbLAniWiDLtHpSinAbAtciiQAptEnQ&amp;k=" frameborder="0" width="100%" height="75px" scrolling="no"></iframe>
       <img class="pre-img-lasy" data-src="picture/1.png" />
      </div> 
     </div> 
     <div class="after"> 
      <div class="main_left" style="width: 706px"> 
       <h3> <a href="/news" target="_blank">每日资讯</a> <a href="/news" class="more" target="_blank">[更多]</a> </h3> 
       <ul style="width: 750px"> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="/news/33001" target="_blank" title="TIOBE 5 月编程语言排行榜：暴涨的 C，逆袭的 Scala">TIOBE 5 月编程语言排行榜：暴涨的 C，逆袭 ...</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="/news/32999" target="_blank" title="葡萄城多款优秀控件产品发布全新版本">葡萄城多款优秀控件产品发布全新版本</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="/news/32997" target="_blank" title="怎样解决编程语言之间的差异性问题？">怎样解决编程语言之间的差异性问题？</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="/news/32993" target="_blank" title="嘴上说着喜爱Java 9 ，身体却诚实地拥抱了Java 8 ">嘴上说着喜爱Java 9 ，身体却诚实地拥抱了 ...</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="/news/32988" target="_blank" title="5 种使用 Python 代码轻松实现数据可视化的方法">5 种使用 Python 代码轻松实现数据可视化的 ...</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="/news/32985" target="_blank" title="现代前端开发路线图：从零开始，一步步成为前端工程师">现代前端开发路线图：从零开始，一步步成为 ...</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="/news/32983" target="_blank" title="七行JSON代码将你的网站变成移动应用">七行JSON代码将你的网站变成移动应用</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="/news/32982" target="_blank" title="Python 人气王，JS 比 Java 更受公司青睐">Python 人气王，JS 比 Java 更受公司青睐</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="/news/32980" target="_blank" title="深入理解Android消息机制">深入理解Android消息机制</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="/news/32979" target="_blank" title="高级Java开发人员最常访问的几个网站">高级Java开发人员最常访问的几个网站</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="/news/32978" target="_blank" title="改进 JavaScript 和 Rust 的互操作性：深入认识 wasm-bindgen 组件 ">改进 JavaScript 和 Rust 的互操作性：深入 ...</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="/news/32977" target="_blank" title="趣味算法图解，文科生都看懂了">趣味算法图解，文科生都看懂了</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="/news/32974" target="_blank" title="ES6 javascript 实用开发技巧 ">ES6 javascript 实用开发技巧 </a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="/news/32972" target="_blank" title="用JavaScript写一个区块链">用JavaScript写一个区块链</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="/news/32971" target="_blank" title="常用的几种大数据架构剖析 ">常用的几种大数据架构剖析 </a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="/news/32969" target="_blank" title="Redis 在现实世界的 5 个用法">Redis 在现实世界的 5 个用法</a> </li> 
       </ul> 
      </div> 
     </div> 
     <div class="tuiguang"> 
     </div> 
     <div id="column"> 
      <h3> <a href="/forums/hot_topics" target="_blank">热门讨论</a> <a href="/forums/hot_topics" class="more" target="_blank">[更多]</a> </h3> 
      <ul class="column_left"> 
       <li> <a href="https://www.iteye.com/topic/1148718" target="_blank" title="Spark进阶-大数据离线与实时项目实战">Spark进阶-大数据离线与实时项目实战</a> </li> 
       <li> <a href="https://www.iteye.com/topic/1148726" target="_blank" title="用php模拟登陆报400错">用php模拟登陆报400错</a> </li> 
       <li> <a href="https://www.iteye.com/topic/1148724" target="_blank" title="深度舆情：拯救企业口碑 还原事件真相">深度舆情：拯救企业口碑 还原事件真相</a> </li> 
       <li> <a href="https://www.iteye.com/topic/1148725" target="_blank" title="联想笔记本l电脑专用GHOST XP游戏版V2019.09">联想笔记本l电脑专用GHOST XP游戏版V2019.09</a> </li> 
       <li> <a href="https://www.iteye.com/topic/1148727" target="_blank" title="机器学习如何入门">机器学习如何入门</a> </li> 
       <li> <a href="https://www.iteye.com/topic/1148728" target="_blank" title="深度学习如何入门">深度学习如何入门</a> </li> 
      </ul> 
     </div> 
     <div id="column"> 
      <h3> <a href="/groups/all_topics" target="_blank">群组热门讨论</a> <a href="/groups/all_topics" class="more" target="_blank">[更多]</a> </h3> 
      <table class="grid"> 
       <thead> 
        <tr> 
         <td style="width:400px;">话题</td> 
         <td style="width:120px;">群组</td> 
         <td style="width:80px;">回复/点击</td> 
         <td style="width:100px;">最后回复</td> 
        </tr> 
       </thead> 
       <tbody> 
        <tr onmouseover="$(this).addClassName('mouse_over');" onmouseout="$(this).removeClassName('mouse_over');"> 
         <td> <a href="https://EXT-group.iteye.com/group/topic/125627" title="tabpanel滚动" target="_blank">tabpanel滚动</a> </td> 
         <td class="group"><a href="https://EXT-group.iteye.com" target="_blank">EXT</a></td> 
         <td class="group">1 / 391</td> 
         <td class="date">2019-08-30 <a href="http://EXT-group.iteye.com/group/topic/125627/post/356914" target="_blank"><img alt="浏览最新的文章" src="picture/icon_last_post.gif" /></a></td> 
        </tr> 
        <tr onmouseover="$(this).addClassName('mouse_over');" onmouseout="$(this).removeClassName('mouse_over');"> 
         <td> <a href="https://drools-group.iteye.com/group/topic/125611" title="drools7开启多线程提示The rete network cannot be partitioned: disabling multithread eval" target="_blank">drools7开启多线程提示The rete network c ...</a> </td> 
         <td class="group"><a href="https://drools-group.iteye.com" target="_blank">Drools</a></td> 
         <td class="group">1 / 1069</td> 
         <td class="date">2019-08-20 <a href="http://drools-group.iteye.com/group/topic/125611/post/356898" target="_blank"><img alt="浏览最新的文章" src="picture/icon_last_post.gif" /></a></td> 
        </tr> 
        <tr onmouseover="$(this).addClassName('mouse_over');" onmouseout="$(this).removeClassName('mouse_over');"> 
         <td> <a href="https://Activiti-group.iteye.com/group/topic/125609" title="执行taskService.complete(task.getId())报错this activity doesn" t="" accept="" signals'="" target="_blank">执行taskService.complete(task.getId())报 ...</a> </td> 
         <td class="group"><a href="https://Activiti-group.iteye.com" target="_blank">Activiti</a></td> 
         <td class="group">1 / 1343</td> 
         <td class="date">2019-08-12 <a href="http://Activiti-group.iteye.com/group/topic/125609/post/356896" target="_blank"><img alt="浏览最新的文章" src="picture/icon_last_post.gif" /></a></td> 
        </tr> 
       </tbody> 
      </table> 
     </div> 
     <div class="after"> 
      <div class="main_left" style="width: 706px" id="album_detail_wrap"> 
       <h3 style="color: #16387C;"> 博文推荐 </h3> 
       <ul style="width: 750px" class="clearfix"> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="https://www.iteye.com/blog/java-tj-2444057" target="_blank" title="uniapp爬坑之路知识点">uniapp爬坑之路知识点</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="https://www.iteye.com/blog/m17001581018-2444054" target="_blank" title="springcloud vue 微服务分布式 activiti工作流 前后分离 集成代码生成器 shiro权限">springcloud vue 微服务分布式 activiti工 ...</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="https://www.iteye.com/blog/sihailoveyan-2444050" target="_blank" title="Java8 的 Stream 流式操作之王者归来">Java8 的 Stream 流式操作之王者归来</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="https://www.iteye.com/blog/miaonly-2444042" target="_blank" title="Java 添加文本框到PPT幻灯片">Java 添加文本框到PPT幻灯片</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="https://www.iteye.com/blog/chinahuyong-2444033" target="_blank" title="RDIFramework.NET ━ .NET敏捷开发框架全新发布-最好用的.NET开发框架 100%源码授权">RDIFramework.NET ━ .NET敏捷开发框架全 ...</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="https://www.iteye.com/blog/m17191464500-2444029" target="_blank" title="java 企业门户网站 源码 自适应响应式 freemarker 静态引擎 html5 SSM">java 企业门户网站 源码 自适应响应式 f ...</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="https://www.iteye.com/blog/manzhizhen-2444017" target="_blank" title="Java Agent实战">Java Agent实战</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="https://www.iteye.com/blog/gaojingsong-2444014" target="_blank" title="【LiteIDE 介绍】">【LiteIDE 介绍】</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="https://www.iteye.com/blog/xiaoheng-2444011" target="_blank" title="dubbo 线程池">dubbo 线程池</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="https://www.iteye.com/blog/knight-black-bob-2444009" target="_blank" title="k8s kubernetes 安装">k8s kubernetes 安装</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="https://www.iteye.com/blog/knight-black-bob-2444008" target="_blank" title="linux spark 安装">linux spark 安装</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="https://www.iteye.com/blog/kaizi1992-2443997" target="_blank" title="Javaweb-类加载器-类加载器的了解入门">Javaweb-类加载器-类加载器的了解入门</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="https://www.iteye.com/blog/gaojingsong-2444015" target="_blank" title="【微信小程序】">【微信小程序】</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="https://www.iteye.com/blog/kaizi1992-2443974" target="_blank" title="设计模式之命令模式-使用命令模式实现遥控器及总结">设计模式之命令模式-使用命令模式实现遥控 ...</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="https://www.iteye.com/blog/liyihz2008-2443932" target="_blank" title="O2OA 稳定版 V4.2235 发布，功能性能等多方面优化升级">O2OA 稳定版 V4.2235 发布，功能性能等多 ...</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="https://www.iteye.com/blog/xiaoheng-2443926" target="_blank" title="关于 dubbo 的 SpiExtensionFactory 的一点说明">关于 dubbo 的 SpiExtensionFactory 的一 ...</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="https://www.iteye.com/blog/jerrywang-sap-2444010" target="_blank" title="从SAP社区上的一篇博客开始，聊聊SAP产品命名背后的那份情怀">从SAP社区上的一篇博客开始，聊聊SAP产品 ...</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="https://www.iteye.com/blog/elim-2443924" target="_blank" title="Spring Cloud（07）——Hystrix Dashboard">Spring Cloud（07）——Hystrix Dashboard</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="https://www.iteye.com/blog/elim-2443923" target="_blank" title="Spring Cloud（06）——断路器Hystrix">Spring Cloud（06）——断路器Hystrix</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="https://www.iteye.com/blog/lobin-2443919" target="_blank" title="Linux: Guide">Linux: Guide</a> </li> 
       </ul> 
      </div> 
     </div> 
    </div> 
    <div id="local"> 
     <!--          <div class="search column">--> 
     <!--            <form action="/search"  method="get">--> 
     <!--              <input type="hidden" name="type" value="all" />--> 
     <!--              <input type="text" name="query" class="text" id="query"  style="width: 152px; *width:145px; "/>--> 
     <!--              <input type="submit" value="搜索" class="submit"/>--> 
     <!--            </form>--> 
     <!--          </div>--> 
     <div class="tuiguang"> 
      <!-- Ads ID 226 --> 
      <div id="kp_box_226" data-pid="226">
       <iframe src="https://adaccount.csdn.net/#/preview/291?m=bcDniUHpcEAUpEStniAmLLHEcLJLtQoiSDHJipDiDXbtHLptnDocHQWJLtXtASLpvibEtLoJJpLSEEJvLpotfpbmQSXvHncSScJo&amp;k=" frameborder="0" width="300px" height="250px" scrolling="no"></iframe>
       <img class="pre-img-lasy" data-src="picture/1.png" />
      </div> 
     </div> 
     <div id="recommend" class="box "> 
      <h3>推荐精华文章</h3> 
      <ul> 
       <li><a href="/magazines/134-IDE-Comparison" target="_blank" title="编程语言 IDE 对比">编程语言 IDE 对比</a></li> 
       <li><a href="/magazines/133-Static-Site-Generators" target="_blank" title="最全的静态网站生成器（开源项目）">最全的静态网站生成器（开源项目）</a></li> 
       <li><a href="/magazines/132-Java-NIO" target="_blank" title="Java NIO 系列教程">Java NIO 系列教程</a></li> 
       <li><a href="/magazines/131-Java-Concurrency" target="_blank" title="Java并发教程（Oracle官方资料）">Java并发教程（Oracle官方资料）</a></li> 
       <li><a href="/magazines/130" target="_blank" title="编程精华资源（ITeye优秀专栏）大汇总">编程精华资源（ITeye优秀专栏）大汇总</a></li> 
       <li><a href="/magazines/129-Java-8-Tutorial" target="_blank" title="Java 8 简明教程 ">Java 8 简明教程 </a></li> 
      </ul> 
     </div> 
     <div class="tuiguang"> 
      <!-- Ads ID 227 --> 
      <div id="kp_box_227" data-pid="227" data-report-view="{&quot;mod&quot;:&quot;kp_popu_227-646&quot;,&quot;keyword&quot;:&quot;&quot;}" data-report-click="{&quot;mod&quot;:&quot;kp_popu_227-646&quot;,&quot;keyword&quot;:&quot;&quot;}">
       <!-- 广告位开始 --> 
       <ins data-revive-zoneid="515" data-revive-id="8c38e720de1c90a6f6ff52f3f89c4d57"></ins> 
       <!-- 广告位结束 --> 
       <!--
<script language="javascript" type="text/javascript" src="js/async_new.js"></script>
-->
       <img class="pre-img-lasy" data-src="picture/1.png" />
      </div> 
     </div> 
     <div class="tuiguang"> 
     </div> 
     <div id="groups" class="box"> 
      <h3>活跃群组</h3> 
      <div class="group"> 
       <div class="logo">
        <a href="https://javaeye-admin-group.iteye.com" target="_blank"><img src="picture/32858d7c-ed39-4ce4-bba3-16d380cb4e9e.gif" alt="站务讨论群组" title="站务讨论: ITeye站务圈子" height="48" width="48" /></a>
       </div> 
       <span> <a href="https://javaeye-admin-group.iteye.com" target="_blank"><strong>站务讨论</strong></a> <br />成员：434人 </span> 
      </div> 
      <div class="group"> 
       <div class="logo">
        <a href="https://solr-group.iteye.com" target="_blank"><img src="picture/3b46fcc6-1fd5-37a7-8106-1e4faab088fb.jpg" alt="solr交流圈群组" title="solr交流圈: solr 是基于lucene搜索库的一个搜索引擎框架，本圈子旨在聚集对solr感兴趣的朋友一起讨论，互相学习，共同进步。" height="48" width="48" /></a>
       </div> 
       <span> <a href="https://solr-group.iteye.com" target="_blank"><strong>solr交流圈</strong></a> <br />成员：437人 </span> 
      </div> 
      <div class="group"> 
       <div class="logo">
        <a href="https://drools-group.iteye.com" target="_blank"><img src="picture/c7b631fc-35b4-46d1-aeaf-dab2a3ab9515.bmp" alt="Drools群组" title="Drools: 规则引擎在电信、金融业有广阔的应用空间。
Drools是基于Charles Forgy的RETE算法的开源规则引擎实现。
" height="48" width="48" /></a>
       </div> 
       <span> <a href="https://drools-group.iteye.com" target="_blank"><strong>Drools</strong></a> <br />成员：1975人 </span> 
      </div> 
      <div class="group"> 
       <div class="logo">
        <a href="https://EXT-group.iteye.com" target="_blank"><img src="picture/309c7401-521b-4d29-936f-c053d1b33172.bmp" alt="EXT群组" title="EXT: 
想知道有多好，登录下面的网址就知道了：http://qwikioffice.com/desktop-demo/
马总说不做电子商务你会后悔：http://shop61583468.taobao.com/" height="48" width="48" /></a>
       </div> 
       <span> <a href="https://EXT-group.iteye.com" target="_blank"><strong>EXT</strong></a> <br />成员：6194人 </span> 
      </div> 
      <div class="group"> 
       <div class="logo">
        <a href="https://crawl-group.iteye.com" target="_blank"><img src="picture/af8ab93d-9559-3d4e-9cc8-5901c8bc5220.jpg" alt="网络爬虫群组" title="网络爬虫: 本圈子主要讨论网络爬虫技术。讨论爬虫的一些具体技术问题，如爬Ajax网站，爬需要验证的网站，分布式爬虫,网页信息抽取算法等等网页采集难题。主要是Java开源组件Heritrix，nutch爬虫的源码剖析，功能扩展，当然还可以其他的爬虫。" height="48" width="48" /></a>
       </div> 
       <span> <a href="https://crawl-group.iteye.com" target="_blank"><strong>网络爬虫</strong></a> <br />成员：733人 </span> 
      </div> 
     </div> 
     <div id="groups" class="box"> 
      <h3>热门专栏</h3> 
      <div class="group"> 
       <div class="logo"> 
        <a href="/blogs/subjects/Spring-Cloud" target="_blank"><img alt="12d8ea3d-4199-3941-8a17-acd5024729b8" height="48" src="picture/12d8ea3d-4199-3941-8a17-acd5024729b8.jpg" width="48" /></a> 
       </div> 
       <span> <a href="/blogs/subjects/Spring-Cloud" target="_blank">Spring_Cloud构建云架构</a><br /> 创建者：springcloud关注者 </span> 
      </div> 
      <div class="group"> 
       <div class="logo"> 
        <a href="/blogs/subjects/spring4" target="_blank"><img alt="23e1c30e-ef8c-3702-aa3c-e83277ffca91" height="48" src="picture/23e1c30e-ef8c-3702-aa3c-e83277ffca91.png" width="48" /></a> 
       </div> 
       <span> <a href="/blogs/subjects/spring4" target="_blank">Spring基础知识</a><br /> 创建者：234390216 </span> 
      </div> 
     </div> 
     <div id="groups" class="box"> 
      <h3>推荐博主</h3> 
      <div class="group"> 
       <div class="logo">
        <a href="https://www.iteye.com/blog/user/fanshuyao" target="_blank"><img alt="蕃薯耀的博客" class="logo" src="picture/412d4a00-6f3f-3488-adfe-e943ea2c7cff-thumb.jpg" title="蕃薯耀的博客: 蕃薯耀" width="48px" /></a>
       </div> 
       <span> <a href="https://www.iteye.com/blog/user/fanshuyao" target="_blank" title="蕃薯耀">蕃薯耀</a><br /> 浏览量：1452423 </span> 
      </div> 
      <div class="group"> 
       <div class="logo">
        <a href="https://www.iteye.com/blog/user/chinahuyong" target="_blank"><img alt="chinahuyong的博客" class="logo" src="picture/add8c272-fb66-3cc1-8cfc-08b0585438bc-thumb.jpg" title="chinahuyong的博客: .NET快速开发框架" width="48px" /></a>
       </div> 
       <span> <a href="https://www.iteye.com/blog/user/chinahuyong" target="_blank" title="chinahuyong">chinahuyong</a><br /> 浏览量：101980 </span> 
      </div> 
      <div class="group"> 
       <div class="logo">
        <a href="https://www.iteye.com/blog/user/jerrywang-sap" target="_blank"><img alt="JerryWang_SAP的博客" class="logo" src="picture/c4c2d866-240a-3211-84a9-7f30e22eb541-thumb.jpg" title="JerryWang_SAP的博客: " width="48px" /></a>
       </div> 
       <span> <a href="https://www.iteye.com/blog/user/jerrywang-sap" target="_blank" title="JerryWang_SAP">JerryWang_SAP</a><br /> 浏览量：416968 </span> 
      </div> 
      <div class="group"> 
       <div class="logo">
        <a href="https://www.iteye.com/blog/user/osseztec" target="_blank"><img alt="OSSEZTEC的博客" class="logo" src="picture/e1b6a5d8-321a-3daf-9772-2dc4238acb21-thumb.jpg" title="OSSEZTEC的博客: OSSEZTEC" width="48px" /></a>
       </div> 
       <span> <a href="https://www.iteye.com/blog/user/osseztec" target="_blank" title="OSSEZTEC">OSSEZTEC</a><br /> 浏览量：88925 </span> 
      </div> 
      <div class="group"> 
       <div class="logo">
        <a href="https://www.iteye.com/blog/user/miaonly" target="_blank"><img alt="Miaonly的博客" class="logo" src="picture/82123082-2e4d-3b0a-b8cb-2251dd915324-thumb.jpg" title="Miaonly的博客: MIAO" width="48px" /></a>
       </div> 
       <span> <a href="https://www.iteye.com/blog/user/miaonly" target="_blank" title="Miaonly">Miaonly</a><br /> 浏览量：64825 </span> 
      </div> 
     </div> 
     <div class="tuiguang"> 
      <!-- Ads ID 228 --> 
      <div id="kp_box_228" data-pid="228" data-report-view="{&quot;mod&quot;:&quot;kp_popu_228-645&quot;,&quot;keyword&quot;:&quot;&quot;}" data-report-click="{&quot;mod&quot;:&quot;kp_popu_228-645&quot;,&quot;keyword&quot;:&quot;&quot;}">
       <!-- 广告位开始 --> 
       <ins data-revive-zoneid="514" data-revive-id="8c38e720de1c90a6f6ff52f3f89c4d57"></ins> 
       <!-- 广告位结束 --> 
       <script language="javascript" type="text/javascript" src="js/async_new.js"></script>
       <img class="pre-img-lasy" data-src="picture/1.png" />
      </div> 
     </div> 
    </div> 
@endsection