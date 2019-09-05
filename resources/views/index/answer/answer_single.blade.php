@extends('public.index')
@section('title', '')
@section('content')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>系统对于多业务模式的解决方案思路 - ITeye问答</title>
    <meta name="description" content="系统对于多业务模式的解决方案思路 1）不同层级差异：中心机构、省会机构、地市机构、县级机构，不同级别的机构业务上存在一定的差异 2）不同地区差异：区域政策、管理模式会有一定的差异 在系统设计的思路 有什么比较好的思路去解决这种差异 比如：配置不同的参数，制定不同的规则策略，希望大家能提供更多跟好的思路以供参考 谢谢 " />
    <meta name="keywords" content="企业应用 Java" />
    <meta name="report" content='{"pid":"iteye"}'>
    <link rel="search" type="application/opensearchdescription+xml" href="/open_search.xml" title="ITeye" />
    <link rel="shortcut icon" href="{{url('index/images')}}/favicon.ico" type="image/x-icon" />
    <link href="/rss/ask" rel="alternate" title="ITeye问答" type="application/rss+xml" />
    <script src="{{url('index/js')}}/application_6.js" type="text/javascript"></script>
    <link href="{{url('index/css')}}/ask_1.css" media="screen" rel="stylesheet" type="text/css" />
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

      <link href="{{url('index/css')}}/syntaxhighlighter_2.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="{{url('index/js')}}/shcorecommon_2.js" type="text/javascript"></script>
  <script src="{{url('index/js')}}/code_favorites_2.js" type="text/javascript"></script>
  <script type="text/javascript">
    window.recommend_tags = {"44":"","55":"Ruby, Python, PHP, Flash, C++, .net","39":"Hibernate, Spring, Struts, iBATIS, \u4f01\u4e1a\u5e94\u7528, Lucene, SOA","45":"","46":"","41":"JavaScript, HTML5, jQuery, CSS, ","48":"Android, iOS, wp7","43":"Linux, \u6570\u636e\u5e93, \u654f\u6377\u7f16\u7a0b, \u6570\u636e\u7ed3\u6784, \u8f6f\u4ef6\u6d4b\u8bd5, \u9879\u76ee\u7ba1\u7406"};
  </script>
  </head>
  <body>
    <div>
      <!-- Ads ID 258 -->
      
      
    </div>
    <div id="page">
<!--      <div id="header">-->
<!--        <div class="clearfix"></div>-->
<!--      </div>-->

      <div id="content" class="clearfix ask_action_handler">
        <div id="main">
          



          


<div class="h-entry" style='display:none'>
  <a href="https://www.iteye.com/blog/user/29163077" class="p-author" target="_blank">29163077</a>
</div>


<div class="crumbs">
  <a href="/problems">问答首页</a> <span class="arrow">→</span> <a href="/problems/forums/Java">Java企业应用</a>
</div>

<div class="problem problem_g">
  <dl>
    <dt>
      <div class="vote" id="vote_problem_142916">
  <span>0</span><a class="vote_up_off" href="#" onclick="this.disabled = true; new Ajax.Request('/problems/142916/votes?type=up', {asynchronous:true, evalScripts:true, method:'post', parameters:'authenticity_token=' + encodeURIComponent('HVNhaeq0UGQvYU9TxBmlPy/cuRsKC2AdqxiK5qdey/c=')}); return false;" title="支持：这是一个描述清晰的有价值的好问题"></a>
  <a class="vote_down_off" href="#" onclick="this.disabled = true; new Ajax.Request('/problems/142916/votes?type=down', {asynchronous:true, evalScripts:true, method:'post', parameters:'authenticity_token=' + encodeURIComponent('HVNhaeq0UGQvYU9TxBmlPy/cuRsKC2AdqxiK5qdey/c=')}); return false;" title="反对：这个问题没有价值或描述不清"></a><span>0</span>
</div>

    </dt>
    <dd>
      <div class="sproblem_right">
        <h3 class="open"><a href="/problems/142916">系统对于多业务模式的解决方案思路</a><span class="score">10</span></h3>

        <div class="new_content"> 
          系统对于多业务模式的解决方案思路
<br />1）不同层级差异：中心机构、省会机构、地市机构、县级机构，不同级别的机构业务上存在一定的差异
<br />2）不同地区差异：区域政策、管理模式会有一定的差异
<br />在系统设计的思路 有什么比较好的思路去解决这种差异
<br />
<br />比如：配置不同的参数，制定不同的规则策略，希望大家能提供更多跟好的思路以供参考 谢谢
<br />
          
        </div>

        <div class="ask_label">
          <div class='tags'><a href="http://www.iteye.com/problems/tags/%E4%BC%81%E4%B8%9A%E5%BA%94%E7%94%A8">企业应用</a>&nbsp;</div>
          <span class="gray">2017年6月05日 16:39</span>
        </div>
        <div class="user_info fr">
          <a href="http://www.iteye.com/blog/user/29163077/blog/answered_problems"><img alt="29163077" class="logo" src="{{url('index/picture')}}/user-logo-thumb_2.gif" title="29163077" /></a>
<span class="user_blog"><a href="http://www.iteye.com/blog/user/29163077/blog/answered_problems" title="29163077">29163077</a></span>
<br />
<span class="score gray" title="问答积分">5</span>
<br />
<span class="gold gray" title="金牌">0</span>
<span class="silver gray" title="银牌">0</span>
<span class="bronze gray" title="铜牌">3</span>

        </div>
      </div>

      <div class="clear"></div>
      <div id="placeholder" class="mediav_ad" ></div>
      <script type="text/javascript" src="{{url('index/js')}}/mvf_news_feed.js"></script>
      <script type="text/javascript">
          NEWS_FEED({
              w: 550,//必须大于300
              showid : 'o0owgr',
              placeholderId : 'placeholder',//容器ID
              fId : '',//信息流容器ID
              inject : 'cads'
          })
      </script>
      


      <div id="problem_action" class="action">
        <ul>
          <li class="comment"><a href="javascript:void(0);" class="ask_click_action" data_action_sub_type="comment" data_action_type="dropdown" data_comments_count="0" data_parent_id="problem_142916" data_url="/problems/142916/comments"><img alt="Comment" src="{{url('index/picture')}}/comment.gif" />添加评论</a></li>

          
            <li id="follow_142916"><a href="#" onclick="if($(this).next()){return false;}; $(this).insert({after: '&lt;img src=&quot;{{url('index/images')}}/spinner.gif&quot; /&gt;'});; new Ajax.Request('/problems/142916/follows', {asynchronous:true, evalScripts:true, method:'post', parameters:'authenticity_token=' + encodeURIComponent('HVNhaeq0UGQvYU9TxBmlPy/cuRsKC2AdqxiK5qdey/c=')}); return false;"><img src="{{url('index/picture')}}/collect.gif">关注(2)</a></li>
          

          

          
            
          
        </ul>
      </div>

    </dd>
  </dl>
  <div class="clear"></div>
</div>

<div class="clearfix"></div>
<div id="solutions" class="solutions">
  
    <h3 id="num">3个答案
      <span style="float:right;margin-left:10px;"><a href="javascript:void(0);" id="sort_time_link" onclick="sortSolutionsByTime()" style="color:#069;font-weight:normal;">按时间排序</a></span>
      <span style="float:right;margin-left:10px;"><a href="javascript:void(0);" id="sort_vote_link" onclick="sortSolutionsByVote();" style="color:black;font-weight:normal;">按投票排序</a></span>
    </h3>
    
    <dl time="1526804550" votes="0" class="for_sort">
  <dt>
    <div class="vote" id="vote_solution_222516">
  <span>0</span><a class="vote_up_off" href="#" onclick="this.disabled = true; new Ajax.Request('/solutions/222516/votes?type=up', {asynchronous:true, evalScripts:true, method:'post', parameters:'authenticity_token=' + encodeURIComponent('HVNhaeq0UGQvYU9TxBmlPy/cuRsKC2AdqxiK5qdey/c=')}); return false;" title="支持：好答案"></a>
  <a class="vote_down_off" href="#" onclick="this.disabled = true; new Ajax.Request('/solutions/222516/votes?type=down', {asynchronous:true, evalScripts:true, method:'post', parameters:'authenticity_token=' + encodeURIComponent('HVNhaeq0UGQvYU9TxBmlPy/cuRsKC2AdqxiK5qdey/c=')}); return false;" title="反对：没有价值的答案"></a><span>0</span>
</div>
  </dt>
  <dd id="s_222516" class="solution_dd">
    <div class="sproblem_right">
      <p>首先必须先搞清楚差异是本质的不同还是表征的不同。如果只是表征的不同，那么通过配置表即可解决问题，你所要做的不过是两件事：1、给所有不同地区梳理出一个配置表；2、把不同的数据存储在扩展表里面。如果是本质的不同，那么不同地区上不同的应用吧，除此之外别无他法。</p>

      <div class="ask_label"><span class="gray">2018年5月20日 16:22</span></div>

      <div class="user_info fr">
        <a href="http://www.iteye.com/blog/user/xuanbg/blog/answered_problems"><img alt="xuanbg" class="logo" src="{{url('index/picture')}}/user-logo-thumb_2.gif" title="xuanbg" /></a>
<span class="user_blog"><a href="http://www.iteye.com/blog/user/xuanbg/blog/answered_problems" title="xuanbg">xuanbg</a></span>
<br />
<span class="score gray" title="问答积分">30</span>
<br />
<span class="gold gray" title="金牌">0</span>
<span class="silver gray" title="银牌">0</span>
<span class="bronze gray" title="铜牌">0</span>

      </div>
    </div>
    <div class="clear"></div>
    <div class="action">
      <ul>
        <li class="comment"><a href="javascript:void(0);" class="ask_click_action" data_action_sub_type="comment" data_action_type="dropdown" data_comments_count="0" data_parent_id="solution_222516" data_url="/solutions/222516/comments"><img alt="Comment" src="{{url('index/picture')}}/comment.gif" />添加评论</a></li>
        
        
      </ul>
    </div>

  </dd>
</dl>
<dl time="1505355547" votes="0" class="for_sort">
  <dt>
    <div class="vote" id="vote_solution_222414">
  <span>0</span><a class="vote_up_off" href="#" onclick="this.disabled = true; new Ajax.Request('/solutions/222414/votes?type=up', {asynchronous:true, evalScripts:true, method:'post', parameters:'authenticity_token=' + encodeURIComponent('HVNhaeq0UGQvYU9TxBmlPy/cuRsKC2AdqxiK5qdey/c=')}); return false;" title="支持：好答案"></a>
  <a class="vote_down_off" href="#" onclick="this.disabled = true; new Ajax.Request('/solutions/222414/votes?type=down', {asynchronous:true, evalScripts:true, method:'post', parameters:'authenticity_token=' + encodeURIComponent('HVNhaeq0UGQvYU9TxBmlPy/cuRsKC2AdqxiK5qdey/c=')}); return false;" title="反对：没有价值的答案"></a><span>0</span>
</div>
  </dt>
  <dd id="s_222414" class="solution_dd">
    <div class="sproblem_right">
      <p>从业务角度去考虑问题，
<br />1）不同层级：中心机构、省会机构、地市机构、县级机构，这些机构是存在一定的差异，但是这些差异差距大小是否过大，各种层级联系是否紧密（比如交互上，请求是否频繁），
<br />每个单独层次的涉及的内容深度如何
<br /> 如果各机构之间的差异过大，或者各层级交互也不频繁，每个单独机构涉及的业务也很大（功能多） 建议还是划分成独立的子项目系统，或者做成像spring工程那样工程各种模块，&nbsp; 反之还是做成大系统
<br /></p>

      <div class="ask_label"><span class="gray">2017年9月14日 10:19</span></div>

      <div class="user_info fr">
        <a href="http://www.iteye.com/blog/user/584431411/blog/answered_problems"><img alt="探索者_技术" class="logo" src="{{url('index/picture')}}/50bb0ed9-6c98-3885-98a1-6cae45a09b23-thumb.jpg" title="探索者_技术" /></a>
<span class="user_blog"><a href="http://www.iteye.com/blog/user/584431411/blog/answered_problems" title="探索者_技术">探索者_技术</a></span>
<br />
<span class="score gray" title="问答积分">28</span>
<br />
<span class="gold gray" title="金牌">0</span>
<span class="silver gray" title="银牌">0</span>
<span class="bronze gray" title="铜牌">6</span>

      </div>
    </div>
    <div class="clear"></div>
    <div class="action">
      <ul>
        <li class="comment"><a href="javascript:void(0);" class="ask_click_action" data_action_sub_type="comment" data_action_type="dropdown" data_comments_count="1" data_parent_id="solution_222414" data_url="/solutions/222414/comments"><img alt="Comment" src="{{url('index/picture')}}/comment.gif" />1条评论</a></li>
        
        
      </ul>
    </div>

  </dd>
</dl>
<dl time="1504856479" votes="0" class="for_sort">
  <dt>
    <div class="vote" id="vote_solution_222411">
  <span>0</span><a class="vote_up_off" href="#" onclick="this.disabled = true; new Ajax.Request('/solutions/222411/votes?type=up', {asynchronous:true, evalScripts:true, method:'post', parameters:'authenticity_token=' + encodeURIComponent('HVNhaeq0UGQvYU9TxBmlPy/cuRsKC2AdqxiK5qdey/c=')}); return false;" title="支持：好答案"></a>
  <a class="vote_down_off" href="#" onclick="this.disabled = true; new Ajax.Request('/solutions/222411/votes?type=down', {asynchronous:true, evalScripts:true, method:'post', parameters:'authenticity_token=' + encodeURIComponent('HVNhaeq0UGQvYU9TxBmlPy/cuRsKC2AdqxiK5qdey/c=')}); return false;" title="反对：没有价值的答案"></a><span>0</span>
</div>
  </dt>
  <dd id="s_222411" class="solution_dd">
    <div class="sproblem_right">
      <p>建议从实际的业务角度考虑，是否真的有必要做成saas模式
<br />
<br />比如，不同层级（简化做树形），如果省会机构和县级机构对系统的影响仅仅是角色权限的区别，那就直接多租户模式就好
<br />
<br />如果不是，差异很大，比如功能模式都不一样，建议拆开，合并小区分系统，独立大系统之外（生产容易维护），UI是否拆开看情况
<br />
<br />就好比分库分表一样，很多时候，无法做到真正意义上的均衡策略，只能合并小表，单独拆分大表
<br />
<br />建议作者，将业务功能先做脑图分析或者画一些系统环形图（症状问题、根本问题、副作用），一目了然</p>

      <div class="ask_label"><span class="gray">2017年9月08日 15:41</span></div>

      <div class="user_info fr">
        <a href="http://www.iteye.com/blog/user/z390174504/blog/answered_problems"><img alt="z390174504" class="logo" src="{{url('index/picture')}}/user-logo-thumb_2.gif" title="z390174504" /></a>
<span class="user_blog"><a href="http://www.iteye.com/blog/user/z390174504/blog/answered_problems" title="z390174504">z390174504</a></span>
<br />
<span class="score gray" title="问答积分">0</span>
<br />
<span class="gold gray" title="金牌">0</span>
<span class="silver gray" title="银牌">0</span>
<span class="bronze gray" title="铜牌">11</span>

      </div>
    </div>
    <div class="clear"></div>
    <div class="action">
      <ul>
        <li class="comment"><a href="javascript:void(0);" class="ask_click_action" data_action_sub_type="comment" data_action_type="dropdown" data_comments_count="0" data_parent_id="solution_222411" data_url="/solutions/222411/comments"><img alt="Comment" src="{{url('index/picture')}}/comment.gif" />添加评论</a></li>
        
        
      </ul>
    </div>

  </dd>
</dl>

  
</div>

<!-- Ads ID 421 -->


  <div class="clearfix"></div>
  <div style="text-align: center">
    <div id="kp_box_421" data-pid="421"><iframe  src="https://adaccount.csdn.net/#/preview/555?m=cALEfvbAnHSiLAJtcSAmJbtpLiUiEHcttcAELLbSoniAoHLifDLcASJAbtHvtJbtJtEvpivbJHQWnSLbLipScipiLbJStHJpnDQQ&k=" frameborder="0" width= "100%"  height= "75px" scrolling="no" ></iframe><img class="pre-img-lasy" data-src="{{url('index/picture')}}/1_3.png"></div>
  </div>

<div class="clearfix"></div>





<script type="text/javascript" language="javascript" charset="utf-8">
//<![CDATA[
 window.html_codes = new Hash();




 window.html_codes.set('problem_popup_notice', '<div class=\"#{class_name}\" id=\'problem_popupbox\'>\n  <h2>#{title}<\/h2>\n  #{content}\n<\/div>\n');

 window.check_comment_time = Prototype.emptyFunction;
 window.check_solution_time = Prototype.emptyFunction;

//]]>
</script>


<script type="text/javascript" language="javascript" charset="utf-8">
//<![CDATA[
    dp.SyntaxHighlighter.HighlightAll('code', true, true);

    $$('#main .problem .sproblem_right pre[name=code]').each(function(pre, index){ // blog content
      var location = window.location;
      source_url = location.protocol + "//" + location.host + location.pathname + location.search;
      pre.writeAttribute('codeable_id', 142916);
      pre.writeAttribute('codeable_type', "Problem");
      pre.writeAttribute('source_url', source_url);
      pre.writeAttribute('pre_index', index);
      pre.writeAttribute('title', '系统对于多业务模式的解决方案思路');
    });
    $$('#main .solution_dd').each(function(solution){// comment
      var solution_id = solution.id.substr(2);
      $$("#"+solution.id+" pre[name=code]").each(function(pre, index){
        var location = window.location;
        source_url = location.protocol + "//" + location.host + location.pathname + location.search;
        source_url += "#" + solution.id;
        pre.writeAttribute('codeable_id', solution_id);
        pre.writeAttribute('codeable_type', "Solution");
        pre.writeAttribute('source_url', source_url);
        pre.writeAttribute('pre_index', index);
        pre.writeAttribute('title', '系统对于多业务模式的解决方案思路');
      });
    });
    code_favorites_init();

    fix_image_size($$('div.content img'), 650);
    function quote_comment(id) {
      new Ajax.Request('/editor/quote', {
        parameters: {'id':id, 'type':'Solution'},
        onSuccess:function(response){
        $('problem_body_form').show();
        $('editor_body').value += response.responseText;
        $('editor_body').focus();
        Element.scrollTo($('editor_body'));
        }
      });
    }
//]]>
</script>



        </div>
        <div id="local">
          
  <!--<div class="search column">-->
<!--  <form action="" method="get">-->
<!--    <input class="text" id="query" name="query" style="width: 135px;" type="text" value="" />-->
<!--    <input class="submit" type="submit" value="搜索问题" />-->
<!--  </form> -->
<!--</div>-->

  <!-- Ads ID 405 -->
  
  
    <div style="text-align: center">
      <div id="kp_box_405" data-pid="405"><iframe  src="https://adaccount.csdn.net/#/preview/235?m=AtcESQELJJQAbpbJStHJicEDpJnSyHJEtpttSAcQALXDppJHiLfEQnpLtvnpLtibHbipiibiADAtULvHAAJiQnLWpbScnHcQSLbQ&k=" frameborder="0" width= "100%"  height= "75px" scrolling="no" ></iframe><img class="pre-img-lasy" data-src="{{url('index/picture')}}/1_3.png"></div>
    </div>
  
  <div id="guild">
  <div class="guild">
    <ul>
      <li class="open"><span>  3 </span><a href="/problems/active">待解决问题</a></li>
      <li class="close"><span> 26164 </span><a href="/problems/solved">已解决问题</a></li>
      <li class="hot"><span> 95981 </span> <a href="/problems/hot">热门问题</a></li>
    </ul>
  </div>
</div>
  <!-- Ads ID 406 -->
  
  
  <div class="my">
  <a href="https://ask.csdn.net/" alt="我要提问" target="_blank" title="我要提问"><img alt="Ask-but" src="{{url('index/picture')}}/ask-but.gif" /></a>
  <br />
  <div class="ask_but">
    
      <span class="my_ask"><a href="/login">我的问答</a></span>
    
    <span class="help"> <a href="/problems/faq" title="FAQ">FAQ</a> | <a href="/problems/medals">勋章</a></span>
  </div>
</div>

  <div class="column">
  <h3>相关推荐</h3>
  <ul>
          
        <li>
          <a href="https://download.csdn.net/download/kuangbeng/5097493" target="_blank">会员制业务模式CRM解决方案</a>
        </li>
      
        <li>
          <a href="https://download.csdn.net/download/weixine/4387394" target="_blank">ISP多业务接入解决方案</a>
        </li>
      
        <li>
          <a href="https://blog.csdn.net/sheyongjun1990/article/details/89887175" target="_blank">mysql主动通知业务系统的解决方案—mysql-udf-http</a>
        </li>
      
        <li>
          <a href="https://download.csdn.net/download/wuqingaoran/9552755" target="_blank">业务系统增加hessian接口解决方案</a>
        </li>
      
        <li>
          <a href="https://blog.csdn.net/weixin_43159039/article/details/82911613" target="_blank">蚁安居倚天系统业务缓存解决方案</a>
        </li>
      
    
  </ul>
</div>
  <div class="column">
  <h3>已解决问题</h3>
  <ul class="close_ask">
    
      <li>
        <a href="/problems/141596">使用Mybatis执行sql时如何统一校验输入参数?</a>
      </li>
    
      <li>
        <a href="/problems/141271">js里这种表述式是啥意思？return (y1 - y2 &gt; 0 ? &quot;Up&quot; : &quot;Down&quot;);</a>
      </li>
    
      <li>
        <a href="/problems/140382">请问基于云架构的J2EE架构应该怎么做？</a>
      </li>
    
      <li>
        <a href="/problems/137504">spring ,hibernate 都是用到了asm字节码技术，请问它们具体都拿ASM来实现了什么功能？或者说在哪个功能上用到的</a>
      </li>
    
      <li>
        <a href="/problems/136747">如何判断操作系统是32位还是64位？</a>
      </li>
    
      <li>
        <a href="/problems/136730">DBA_OBJECTS + ROWNUM 和 DUAL + ROWNUM 一个结果比较的疑问</a>
      </li>
    
      <li>
        <a href="/problems/136690">ajax缺点？</a>
      </li>
    
      <li>
        <a href="/problems/134845">判断字符串是否是数字开头</a>
      </li>
    
      <li>
        <a href="/problems/133335">用java程序监视mysql的变化。求方法</a>
      </li>
    
      <li>
        <a href="/problems/133330">如何对URL地址栏传参的信息进行加密或保护</a>
      </li>
    
  </ul>
</div>
  <!-- Ads ID 407 -->
  
  
    <div style="text-align: center">
      <div id="kp_box_407" data-pid="407" data-report-view='{"mod":"kp_popu_407-662","keyword":""}' data-report-click='{"mod":"kp_popu_407-662","keyword":""}'><div style="width:220px;height:220px;margin:0 auto;position:relative;overflow:hidden;"> <a href="https://edu.csdn.net/topic/python115?utm_source=iteye" target="_blank"><img src="{{url('index/picture')}}/201811150919211586_1.jpg"width="220" height="220"></a><span style="position:absolute;right:0;bottom:0;background:url(images/201608021757063065_1.png) no-repeat;width:33px;height:18px;display:block;z-index: 9999;"></span></div><img class="pre-img-lasy" data-src="{{url('index/picture')}}/1_3.png"></div>
    </div>
  
  <div class="column">
  <h3>未解决问题</h3>
  <ul class="new_ask">
    
      <li>
        <a href="/problems/142916">系统对于多业务模式的解决方案思路</a>
      </li>
    
      <li>
        <a href="/problems/142915">ssh整合时出现的问题</a>
      </li>
    
      <li>
        <a href="/problems/142914">一个servlet如何根据不同的请求页面返回该请求页面</a>
      </li>
    
  </ul>
</div>
  <div class="column">
  <h3>排行榜</h3>
  <ul class="blogs_tab">
    <li class="tab selected" id="blog_hot_tab_week"><a href="javascript:void(0);" onclick="show_hot_blog('week')">周榜</a></li>
    <li class="tab" id="blog_hot_tab_month"><a href="javascript:void(0);" onclick="show_hot_blog('month')">月榜</a></li>
    <li class="tab" id="blog_hot_tab_all"><a href="javascript:void(0);" onclick="show_hot_blog('all')">总榜</a></li>
  </ul>

  <ul class="ask_top" id="blog_hot_week" >
    
    <a href="/problems/week_top_users" style="margin: -5px 5px 5px 130px;display:block;">查看全部排名>></a>
  </ul>
  <ul class="ask_top" id="blog_hot_month" style="display:none;">
    
    <a href="/problems/month_top_users" style="margin: -5px 5px 5px 130px;display:block;">查看全部排名>></a>
  </ul>
  <ul class="ask_top" id="blog_hot_all" style="display:none;">
    
  <li class="top_1" >
    <span class="ranking"></span>
    <div class="user_top">
      <a href="http://www.iteye.com/blog/user/lovewhzlq/blog/answered_problems"><img alt="lovewhzlq" class="logo" src="{{url('index/picture')}}/680e45b7-ce64-375b-9bc8-31a33e5637ab-thumb.jpg" title="lovewhzlq" /></a>
      <span><a href="http://www.iteye.com/blog/user/lovewhzlq/blog/answered_problems" title="lovewhzlq">lovewhzlq</a></span>
      <br />
      <span class="score" title="问答积分">13934</span>
      <span style="display:none"  class="growth_text" title="周增长积分"><img class="growth" src="{{url('index/picture')}}/growth.gif" alt="月增长积分" /></span>
    </div>
  </li>

  <li class="top_2" >
    <span class="ranking"></span>
    <div class="user_top">
      <a href="http://www.iteye.com/blog/user/jinnianshilongnian/blog/answered_problems"><img alt="jinnianshilongnian" class="logo" src="{{url('index/picture')}}/c7dd3e08-f305-3aa7-a0ee-888e606701d4-thumb.jpg" title="jinnianshilongnian" /></a>
      <span><a href="http://www.iteye.com/blog/user/jinnianshilongnian/blog/answered_problems" title="jinnianshilongnian">jinnianshilongnian</a></span>
      <br />
      <span class="score" title="问答积分">7280</span>
      <span style="display:none"  class="growth_text" title="周增长积分"><img class="growth" src="{{url('index/picture')}}/growth.gif" alt="月增长积分" /></span>
    </div>
  </li>

  <li class="top_3" >
    <span class="ranking"></span>
    <div class="user_top">
      <a href="http://www.iteye.com/blog/user/yourgame/blog/answered_problems"><img alt="yourgame" class="logo" src="{{url('index/picture')}}/f5d00197-09d2-34ed-aced-da6281a0699e-thumb.jpg" title="yourgame" /></a>
      <span><a href="http://www.iteye.com/blog/user/yourgame/blog/answered_problems" title="yourgame">yourgame</a></span>
      <br />
      <span class="score" title="问答积分">5183</span>
      <span style="display:none"  class="growth_text" title="周增长积分"><img class="growth" src="{{url('index/picture')}}/growth.gif" alt="月增长积分" /></span>
    </div>
  </li>

  <li class="top_4" >
    <span class="ranking"></span>
    <div class="user_top">
      
      <span><a href="http://www.iteye.com/blog/user/huajiang/blog/answered_problems" title="蔡华江">蔡华江</a></span>
      
      <span class="score" title="问答积分">3392</span>
      <span style="display:none"  class="growth_text" title="周增长积分"><img class="growth" src="{{url('index/picture')}}/growth.gif" alt="月增长积分" /></span>
    </div>
  </li>

  <li class="top_5" >
    <span class="ranking"></span>
    <div class="user_top">
      
      <span><a href="http://www.iteye.com/blog/user/suziwen/blog/answered_problems" title="suziwen">suziwen</a></span>
      
      <span class="score" title="问答积分">3226</span>
      <span style="display:none"  class="growth_text" title="周增长积分"><img class="growth" src="{{url('index/picture')}}/growth.gif" alt="月增长积分" /></span>
    </div>
  </li>

  <li class="top_6" >
    <span class="ranking"></span>
    <div class="user_top">
      
      <span><a href="http://www.iteye.com/blog/user/ulinkwo/blog/answered_problems" title="myali88">myali88</a></span>
      
      <span class="score" title="问答积分">3108</span>
      <span style="display:none"  class="growth_text" title="周增长积分"><img class="growth" src="{{url('index/picture')}}/growth.gif" alt="月增长积分" /></span>
    </div>
  </li>

  <li class="top_7" >
    <span class="ranking"></span>
    <div class="user_top">
      
      <span><a href="http://www.iteye.com/blog/user/xiaolongfeixiang/blog/answered_problems" title="xiaolongfeixiang">xiaolongfeixiang</a></span>
      
      <span class="score" title="问答积分">3000</span>
      <span style="display:none"  class="growth_text" title="周增长积分"><img class="growth" src="{{url('index/picture')}}/growth.gif" alt="月增长积分" /></span>
    </div>
  </li>

  <li class="top_8" >
    <span class="ranking"></span>
    <div class="user_top">
      
      <span><a href="http://www.iteye.com/blog/user/lewhwa/blog/answered_problems" title="lewhwa">lewhwa</a></span>
      
      <span class="score" title="问答积分">2963</span>
      <span style="display:none"  class="growth_text" title="周增长积分"><img class="growth" src="{{url('index/picture')}}/growth.gif" alt="月增长积分" /></span>
    </div>
  </li>

  <li class="top_9" >
    <span class="ranking"></span>
    <div class="user_top">
      
      <span><a href="http://www.iteye.com/blog/user/zyn010101/blog/answered_problems" title="zyn010101">zyn010101</a></span>
      
      <span class="score" title="问答积分">2795</span>
      <span style="display:none"  class="growth_text" title="周增长积分"><img class="growth" src="{{url('index/picture')}}/growth.gif" alt="月增长积分" /></span>
    </div>
  </li>

  <li class="top_10" >
    <span class="ranking"></span>
    <div class="user_top">
      
      <span><a href="http://www.iteye.com/blog/user/duyunfei/blog/answered_problems" title="AngelAndAngel">AngelAndAngel</a></span>
      
      <span class="score" title="问答积分">2641</span>
      <span style="display:none"  class="growth_text" title="周增长积分"><img class="growth" src="{{url('index/picture')}}/growth.gif" alt="月增长积分" /></span>
    </div>
  </li>

    <a href="/problems/top_users" style="margin: -5px 5px 5px 130px;display:block;">查看全部排名>></a>
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

        </div>
@endsection