@extends('public.index')
@section('title', '')
@section('content')
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
       <iframe src="https://adaccount.csdn.net/#/preview/263?m=pcJQQHSJiApLtLcDJybApStLptnSnSLbJHcQSmEAviHipnJnJEiEEpnnDJpADtEAvHpLLDXUHEnEiAJUbbWbptStAtniDpHpcQLQ&amp;k=" frameborder="0" width="100%" height="75px" scrolling="no"></iframe>
       <img class="pre-img-lasy" data-src="picture/1_3.png" />
      </div> 
     </div> 

     <div class="after"> 
      <div class="main_left" style="width: 706px" id="album_detail_wrap"> 
       <h3 style="color: #16387C;"> 博文推荐 <a href="{{url('index/blogs')}}" class="more" target="_blank">[更多]</a></h3> 
       <ul style="width: 750px" class="clearfix">

       @if (!empty($blogs))
        @foreach ($blogs as $k => $v)
          <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="{{url('blogs_content')}}?b_id={{$v->b_id}}" target="_blank" title="{{$v->b_name}}">{{$v->b_name}}</a> </li>
        @endforeach  
       @else

       @endif  

       </ul> 
      </div> 
     </div> 

     <!-- 广告 -->
     <div class="tuiguang"> 
     </div> 

     <div id="column"> 
      <h3> <a href="{{url('index/forums')}}" target="_blank">热门讨论</a> <a href="{{url('index/forums')}}" class="more" target="_blank">[更多]</a> </h3> 
      <ul class="column_left">

        @if (!empty($forums))
        @foreach ($forums as $k => $v)
       <li> <a href="{{url('forums_content')}}?f_id={{$v->f_id}}" target="_blank" title="{{$v->f_name}}">{{$v->f_name}}</a> </li> 
        @endforeach  
       @else

       @endif 

      </ul> 
     </div>

     <div class="after"> 
      <div class="main_left" style="width: 706px"> 
       <h3> <a href="/news" target="_blank">每日资讯【待开发】</a> <a href="/news" class="more" target="_blank">[更多]</a> </h3> 
       <ul style="width: 750px"> 

        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="/news/33001" target="_blank" title="TIOBE 5 月编程语言排行榜：暴涨的 C，逆袭的 Scala">TIOBE 5 月编程语言排行榜：暴涨的 C，逆袭 ...</a> </li> 
        <li class="title" style="width: 355px;margin-right: 10px;float: left"> <a href="/news/32999" target="_blank" title="葡萄城多款优秀控件产品发布全新版本">葡萄城多款优秀控件产品发布全新版本</a> </li> 
   
       </ul> 
      </div> 
     </div>

     <div id="column"> 
      <h3> <a href="/groups/all_topics" target="_blank">群组热门讨论【待开发】</a> <a href="/groups/all_topics" class="more" target="_blank">[更多]</a> </h3> 
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
         <td> <a href="https://Activiti-group.iteye.com/group/topic/125609" title="执行taskService.complete(task.getId())报错this activity doesn" t="" accept="" signals="" target="_blank">执行taskService.complete(task.getId())报 ...</a> </td> 
         <td class="group"><a href="https://Activiti-group.iteye.com" target="_blank">Activiti</a></td> 
         <td class="group">1 / 1343</td> 
         <td class="date">2019-08-12 <a href="http://Activiti-group.iteye.com/group/topic/125609/post/356896" target="_blank"><img alt="浏览最新的文章" src="picture/icon_last_post.gif" /></a></td> 
        </tr> 
       </tbody> 
      </table> 
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
      <div id="kp_box_226" data-pid="226" data-report-view="{&quot;mod&quot;:&quot;kp_popu_226-645&quot;,&quot;keyword&quot;:&quot;&quot;}" data-report-click="{&quot;mod&quot;:&quot;kp_popu_226-645&quot;,&quot;keyword&quot;:&quot;&quot;}">
       <!-- 广告位开始 --> 
       <ins data-revive-zoneid="514" data-revive-id="8c38e720de1c90a6f6ff52f3f89c4d57"></ins> 
       <!-- 广告位结束 --> 
       <script language="javascript" type="text/javascript" src="js/async_new.js"></script>
       <img class="pre-img-lasy" data-src="picture/1_3.png" />
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
       <img class="pre-img-lasy" data-src="picture/1_3.png" />
      </div> 
     </div> 
     <div class="tuiguang"> 
     </div> 
     <div id="groups" class="box"> 
      <h3>活跃群组【待开发】</h3> 

      <div class="group"> 
       <div class="logo">
        <a href="https://javaeye-admin-group.iteye.com" target="_blank"><img src="picture/32858d7c-ed39-4ce4-bba3-16d380cb4e9e.gif" alt="站务讨论群组" title="站务讨论: ITeye站务圈子" height="48" width="48" /></a>
       </div> 
       <span> <a href="https://javaeye-admin-group.iteye.com" target="_blank"><strong>站务讨论</strong></a> <br />成员：434人 </span> 
      </div> 
       <div class="group"> 
       <div class="logo">
        <a href="https://javaeye-admin-group.iteye.com" target="_blank"><img src="picture/32858d7c-ed39-4ce4-bba3-16d380cb4e9e.gif" alt="站务讨论群组" title="站务讨论: ITeye站务圈子" height="48" width="48" /></a>
       </div> 
       <span> <a href="https://javaeye-admin-group.iteye.com" target="_blank"><strong>站务讨论</strong></a> <br />成员：434人 </span> 
      </div>
   
     </div> 

     <div id="groups" class="box"> 
      <h3>热门专栏【待开发】</h3> 

      <div class="group"> 
       <div class="logo"> 
        <a href="/blogs/subjects/Spring-Cloud" target="_blank"><img alt="12d8ea3d-4199-3941-8a17-acd5024729b8" height="48" src="picture/12d8ea3d-4199-3941-8a17-acd5024729b8.jpg" width="48" /></a> 
       </div> 
       <span> <a href="/blogs/subjects/Spring-Cloud" target="_blank">Spring_Cloud构建云架构</a><br /> 创建者：springcloud关注者 </span> 
      </div> 
      <div class="group"> 
       <div class="logo"> 
        <a href="/blogs/subjects/Spring-Cloud" target="_blank"><img alt="12d8ea3d-4199-3941-8a17-acd5024729b8" height="48" src="picture/12d8ea3d-4199-3941-8a17-acd5024729b8.jpg" width="48" /></a> 
       </div> 
       <span> <a href="/blogs/subjects/Spring-Cloud" target="_blank">Spring_Cloud构建云架构</a><br /> 创建者：springcloud关注者 </span> 
      </div> 

     </div> 

     <div id="groups" class="box"> 
      <h3>推荐博主【待开发】</h3>

      <div class="group"> 
       <div class="logo">
        <a href="https://www.iteye.com/blog/user/fanshuyao" target="_blank"><img alt="蕃薯耀的博客" class="logo" src="picture/412d4a00-6f3f-3488-adfe-e943ea2c7cff-thumb.jpg" title="蕃薯耀的博客: 蕃薯耀" width="48px" /></a>
       </div> 
       <span> <a href="https://www.iteye.com/blog/user/fanshuyao" target="_blank" title="蕃薯耀">蕃薯耀</a><br /> 浏览量：1452423 </span> 
      </div>
      <div class="group"> 
       <div class="logo">
        <a href="https://www.iteye.com/blog/user/fanshuyao" target="_blank"><img alt="蕃薯耀的博客" class="logo" src="picture/412d4a00-6f3f-3488-adfe-e943ea2c7cff-thumb.jpg" title="蕃薯耀的博客: 蕃薯耀" width="48px" /></a>
       </div> 
       <span> <a href="https://www.iteye.com/blog/user/fanshuyao" target="_blank" title="蕃薯耀">蕃薯耀</a><br /> 浏览量：1452423 </span> 
      </div>
     

    </div>

     <div class="tuiguang"> 
      <!-- Ads ID 228 --> 
      <div id="kp_box_228" data-pid="228" data-report-view="{&quot;mod&quot;:&quot;kp_popu_228-645&quot;,&quot;keyword&quot;:&quot;&quot;}" data-report-click="{&quot;mod&quot;:&quot;kp_popu_228-645&quot;,&quot;keyword&quot;:&quot;&quot;}">
       <!-- 广告位开始 --> 
       <ins data-revive-zoneid="514" data-revive-id="8c38e720de1c90a6f6ff52f3f89c4d57"></ins> 
       <!-- 广告位结束 --> 
       <script language="javascript" type="text/javascript" src="js/async_new.js"></script>
       <img class="pre-img-lasy" data-src="picture/1_3.png" />
      </div> 
     </div> 
    </div> 
@endsection