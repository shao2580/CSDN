@extends('public.index')
@section('title', '')
@section('content')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>ITeye问答频道</title>
    <meta name="description" content="软件开发技术专题问答社区" />
    <meta name="keywords" content="软件 开发 技术 专题 问答 社区" />
    <meta name="report" content='{"pid":"iteye"}'>
    <link rel="search" type="application/opensearchdescription+xml" href="/open_search.xml" title="ITeye" />
    <link rel="shortcut icon" href="{{url('index/images')}}/favicon.ico" type="image/x-icon" />
    <link href="/rss/ask" rel="alternate" title="ITeye问答" type="application/rss+xml" />
    <script src="{{url('index/js')}}/application_6.js" type="text/javascript"></script>
    <link href="{{url('index/css')}}/ask.css" media="screen" rel="stylesheet" type="text/css" />
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
          



          


<div id="recommend">
  <h3>编辑推荐内容</h3>
  <ul>
    
      <li><a href="/problems/141596" title="使用Mybatis执行sql时如何统一校验输入参数?">使用Mybatis执行sql时如何统一校验...</a></li>
    
      <li><a href="/problems/136726" title="Java调用WMI执行dos命令">Java调用WMI执行dos命令</a></li>
    
      <li><a href="/problems/132087" title="druid分布式事务的配置后应用启动不了">druid分布式事务的配置后应用启动不了</a></li>
    
      <li><a href="/problems/128870" title="jquery获取鼠标点击div的位置">jquery获取鼠标点击div的位置</a></li>
    
      <li><a href="/problems/128615" title="spring获取依赖类的集合">spring获取依赖类的集合</a></li>
    
      <li><a href="/problems/129025" title="java 判断一段html代码有没有外链接，除了flash的地址">java 判断一段html代码有没有外链接...</a></li>
    
      <li><a href="/problems/126946" title="是否可能跨域共享Session信息或者怎么实现单点登录？">是否可能跨域共享Session信息或者怎么...</a></li>
    
      <li><a href="/problems/125229" title="关于微信支付的支付授权目录是如何定义的">关于微信支付的支付授权目录是如何定义的</a></li>
    
  </ul>
</div>

<div id="ask_list">
  <ul id="horiz_tabs">
  
    <li class='active' > 热门问题 </li>
  
  <li  > <a href="/problems/active">待解决问题</a> </li>
  <li  ><a href="/problems/solved">已解决问题</a></li>
</ul>
      <div class="question-summary">
  <div class="statscontainer">
    <div class="statsarrow"></div>
    <div class="stats">
      <div class="vote">
        <div class="votes">
          <span class="vote_number">0</span>
          <p>票</p>
        </div>
      </div>
      <div class="status answered-accepted">
        <span class="ask_number">3</span><p>回答</p>
      </div>
    </div>
    <div class="view gray">2752 浏览</div>
  </div>
  <div class="summary">
    <h3>
	  
      <a href="/problems/142916">系统对于多业务模式的解决方案思路</a><span class="score">10</span>

    </h3>

    <p>
      系统对于多业务模式的解决方案思路 1）不同层级差异：中心机构、省会机构、地市机构、县级机构，不同级别的机构业务上存在一定的差异 2）不同地区差异：区域政策、管理模式会有一定的差异 在系统设计的思路 有什么比较好的思路去解决这种差异 比如：配置不同的参数，制定不同的规则策略，希望大家能提供更多跟好的思路以供参考 谢谢 
    </p>

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
</div>



      <div class="question-summary">
  <div class="statscontainer">
    <div class="statsarrow"></div>
    <div class="stats">
      <div class="vote">
        <div class="votes">
          <span class="vote_number">0</span>
          <p>票</p>
        </div>
      </div>
      <div class="status answered-accepted">
        <span class="ask_number">1</span><p>回答</p>
      </div>
    </div>
    <div class="view gray">2394 浏览</div>
  </div>
  <div class="summary">
    <h3>
	  
      <a href="/problems/142915">ssh整合时出现的问题</a><span class="score">10</span>

    </h3>

    <p>
       ssh整合时出现could not open hibernate session for transaction;nested exception is org.hibernate.exception.genericJDBCException:could not open connection 问题  这个问题困扰了我很久，开始以为工程没搭建好，又重新搭建并进行相关配置，然后做了一下可能出错的地方 ...
    </p>

    <div class="ask_label">
      <div class='tags'>&nbsp;</div>
      <span class="gray">2017年6月05日 09:18</span>
    </div>
    <div class="user_info fr">
      <a href="http://www.iteye.com/blog/user/sunflower-13/blog/answered_problems"><img alt="Sunflower-13" class="logo" src="{{url('index/picture')}}/49b67983-e450-3795-99a2-a764faf669e0-thumb.jpg" title="Sunflower-13" /></a>
<span class="user_blog"><a href="http://www.iteye.com/blog/user/sunflower-13/blog/answered_problems" title="Sunflower-13">Sunflower-13</a></span>
<br />
<span class="score gray" title="问答积分">20</span>
<br />
<span class="gold gray" title="金牌">0</span>
<span class="silver gray" title="银牌">0</span>
<span class="bronze gray" title="铜牌">1</span>

    </div>
  </div>
</div>



      <div class="question-summary">
  <div class="statscontainer">
    <div class="statsarrow"></div>
    <div class="stats">
      <div class="vote">
        <div class="votes">
          <span class="vote_number">0</span>
          <p>票</p>
        </div>
      </div>
      <div class="status answered-accepted">
        <span class="ask_number">5</span><p>回答</p>
      </div>
    </div>
    <div class="view gray">3899 浏览</div>
  </div>
  <div class="summary">
    <h3>
	  
      <a href="/problems/142914">一个servlet如何根据不同的请求页面返回该请求页面</a><span class="score">10</span>

    </h3>

    <p>
      a.jap发送一个请求到servlet返回到a.jap b.jsp发送一个请求到servlet返回到b.jap 这个servlet是如何判断是a页面还是b页面发来的请求呢？？例如在首页登录后返回到首页:request.getHeader(&quot;Referer&quot;);// 获得上一个页面的地址 如:a.jsp 然后处理完之后跳转回a.jsp: response.sendRedirect( ...
    </p>

    <div class="ask_label">
      <div class='tags'><a href="http://www.iteye.com/problems/tags/Web%E5%89%8D%E7%AB%AF">Web前端</a>&nbsp;</div>
      <span class="gray">2017年5月31日 13:02</span>
    </div>
    <div class="user_info fr">
      <a href="http://www.iteye.com/blog/user/windpower123/blog/answered_problems"><img alt="windpower123" class="logo" src="{{url('index/picture')}}/user-logo-thumb_2.gif" title="windpower123" /></a>
<span class="user_blog"><a href="http://www.iteye.com/blog/user/windpower123/blog/answered_problems" title="windpower123">windpower123</a></span>
<br />
<span class="score gray" title="问答积分">20</span>
<br />
<span class="gold gray" title="金牌">0</span>
<span class="silver gray" title="银牌">0</span>
<span class="bronze gray" title="铜牌">1</span>

    </div>
  </div>
</div>



      <div class="question-summary">
  <div class="statscontainer">
    <div class="statsarrow"></div>
    <div class="stats">
      <div class="vote">
        <div class="votes">
          <span class="vote_number">1</span>
          <p>票</p>
        </div>
      </div>
      <div class="status answered-accepted">
        <span class="ask_number">18</span><p>回答</p>
      </div>
    </div>
    <div class="view gray">7562 浏览</div>
  </div>
  <div class="summary">
    <h3>
	  
      <a href="/problems/142913">网上下载的jar游戏包要怎么在MyEclipse上运行，或还原成源码</a><span class="status">[已解决]</span><span class="score">5</span>

    </h3>

    <p>
       网上下载的jar游戏包要怎么在MyEclipse上运行，或还原成源码？我想在Java Web项目上开发网页的小游戏，想借鉴下。 
    </p>

    <div class="ask_label">
      <div class='tags'><a href="http://www.iteye.com/problems/tags/Java%E7%BB%BC%E5%90%88%E3%80%81jar%E6%B8%B8%E6%88%8F%E5%8C%85%E3%80%81Java%20Web">Java综合、jar游戏包、Java Web</a>&nbsp;</div>
      <span class="gray">2015年1月20日 11:37</span>
    </div>
    <div class="user_info fr">
      <a href="http://www.iteye.com/blog/user/932669971/blog/answered_problems"><img alt="牛BB" class="logo" src="{{url('index/picture')}}/user-logo-thumb_2.gif" title="牛BB" /></a>
<span class="user_blog"><a href="http://www.iteye.com/blog/user/932669971/blog/answered_problems" title="牛BB">牛BB</a></span>
<br />
<span class="score gray" title="问答积分">23</span>
<br />
<span class="gold gray" title="金牌">0</span>
<span class="silver gray" title="银牌">0</span>
<span class="bronze gray" title="铜牌">9</span>

    </div>
  </div>
</div>



      <div class="question-summary">
  <div class="statscontainer">
    <div class="statsarrow"></div>
    <div class="stats">
      <div class="vote">
        <div class="votes">
          <span class="vote_number">0</span>
          <p>票</p>
        </div>
      </div>
      <div class="status answered-accepted">
        <span class="ask_number">21</span><p>回答</p>
      </div>
    </div>
    <div class="view gray">6396 浏览</div>
  </div>
  <div class="summary">
    <h3>
	  
      <a href="/problems/142023">请问这个URL实现技术是啥？</a><span class="status">[已解决]</span><span class="score">10</span>

    </h3>

    <p>
      请问这个URL实现技术是啥？能够隐藏传递的参数，直接在浏览器里输入地址也访问不了。
    </p>

    <div class="ask_label">
      <div class='tags'><a href="http://www.iteye.com/problems/tags/%E4%BC%81%E4%B8%9A%E5%BA%94%E7%94%A8">企业应用</a>&nbsp;</div>
      <span class="gray">2015年1月19日 18:38</span>
    </div>
    <div class="user_info fr">
      <a href="http://www.iteye.com/blog/user/unika-ly12/blog/answered_problems"><img alt="unika_ly12" class="logo" src="{{url('index/picture')}}/user-logo-thumb_2.gif" title="unika_ly12" /></a>
<span class="user_blog"><a href="http://www.iteye.com/blog/user/unika-ly12/blog/answered_problems" title="unika_ly12">unika_ly12</a></span>
<br />
<span class="score gray" title="问答积分">765</span>
<br />
<span class="gold gray" title="金牌">0</span>
<span class="silver gray" title="银牌">0</span>
<span class="bronze gray" title="铜牌">1</span>

    </div>
  </div>
</div>

  <div class="question-summary">
    <!-- Ads ID 253 -->
    
    
      <div id="kp_box_253" data-pid="253"><iframe  src="https://adaccount.csdn.net/#/preview/552?m=cAEfAtEELbAvALLAntntJHitLcJSmJptSbiiiUHcncAiEntoEitSntnptoHbJDSvJAtUpLHtSbinbAvvDbSHipQJbWcpbHLEJDQQ&k=" frameborder="0" width= "100%"  height= "75px" scrolling="no" ></iframe><img class="pre-img-lasy" data-src="{{url('index/picture')}}/1_3.png"></div>
    
  </div>


      <div class="question-summary">
  <div class="statscontainer">
    <div class="statsarrow"></div>
    <div class="stats">
      <div class="vote">
        <div class="votes">
          <span class="vote_number">0</span>
          <p>票</p>
        </div>
      </div>
      <div class="status answered-accepted">
        <span class="ask_number">26</span><p>回答</p>
      </div>
    </div>
    <div class="view gray">13836 浏览</div>
  </div>
  <div class="summary">
    <h3>
	  
      <a href="/problems/141138">文件上传是存在硬盘上，还是存在数据库中？</a><span class="status">[已解决]</span><span class="score">0</span>

    </h3>

    <p>
      如果有比较多的文件上传，上千个文件，大小2-3MB，是存在硬盘上，还是存在数据库中？ 存在硬盘上，路径保存在数据库中，是比较方便，但是存在一台server上出问题怎么办？是不是应该转换成二进制存到数据库（MySQL）中？
    </p>

    <div class="ask_label">
      <div class='tags'>&nbsp;</div>
      <span class="gray">2015年1月18日 08:19</span>
    </div>
    <div class="user_info fr">
      <a href="http://www.iteye.com/blog/user/sallay/blog/answered_problems"><img alt="sallay" class="logo" src="{{url('index/picture')}}/user-logo-thumb_2.gif" title="sallay" /></a>
<span class="user_blog"><a href="http://www.iteye.com/blog/user/sallay/blog/answered_problems" title="sallay">sallay</a></span>
<br />
<span class="score gray" title="问答积分">0</span>
<br />
<span class="gold gray" title="金牌">0</span>
<span class="silver gray" title="银牌">0</span>
<span class="bronze gray" title="铜牌">6</span>

    </div>
  </div>
</div>



      <div class="question-summary">
  <div class="statscontainer">
    <div class="statsarrow"></div>
    <div class="stats">
      <div class="vote">
        <div class="votes">
          <span class="vote_number">0</span>
          <p>票</p>
        </div>
      </div>
      <div class="status answered-accepted">
        <span class="ask_number">2</span><p>回答</p>
      </div>
    </div>
    <div class="view gray">3173 浏览</div>
  </div>
  <div class="summary">
    <h3>
	  
      <a href="/problems/141163"> sokect/sokectio/websokect三者的关系</a><span class="status">[已解决]</span><span class="score">5</span>

    </h3>

    <p>
      如题，我是搞Java的，刚开始搞网络，以前没有深入过靠底层的通讯协议之类的，以前知道socket是Java中用来做tcp通信的，那么socketio，websocket和socket是啥关系呢？能视为一样吗？有啥区别吗？望指教！
    </p>

    <div class="ask_label">
      <div class='tags'><a href="http://www.iteye.com/problems/tags/Java">Java</a><a href="http://www.iteye.com/problems/tags/Android">Android</a><a href="http://www.iteye.com/problems/tags/Socket">Socket</a>&nbsp;</div>
      <span class="gray">2015年1月18日 16:42</span>
    </div>
    <div class="user_info fr">
      <a href="http://www.iteye.com/blog/user/u013830484/blog/answered_problems"><img alt="u013830484" class="logo" src="{{url('index/picture')}}/user-logo-thumb_2.gif" title="u013830484" /></a>
<span class="user_blog"><a href="http://www.iteye.com/blog/user/u013830484/blog/answered_problems" title="u013830484">u013830484</a></span>
<br />
<span class="score gray" title="问答积分">6</span>
<br />
<span class="gold gray" title="金牌">0</span>
<span class="silver gray" title="银牌">0</span>
<span class="bronze gray" title="铜牌">3</span>

    </div>
  </div>
</div>



      <div class="question-summary">
  <div class="statscontainer">
    <div class="statsarrow"></div>
    <div class="stats">
      <div class="vote">
        <div class="votes">
          <span class="vote_number">0</span>
          <p>票</p>
        </div>
      </div>
      <div class="status answered-accepted">
        <span class="ask_number">4</span><p>回答</p>
      </div>
    </div>
    <div class="view gray">5791 浏览</div>
  </div>
  <div class="summary">
    <h3>
	  
      <a href="/problems/140392">图片读取问题ImageIO使用报错</a><span class="status">[已解决]</span><span class="score">5</span>

    </h3>

    <p>
       File dir = new File(&quot;G:\\itemDesc&quot;); File[] fs = dir.listFiles(); for (int i = 0; i &lt; fs.length; i++) { if (fs[i].isDirectory()) { System.out.println(fs[i].getName()); File[] df = fs[i].l ...
    </p>

    <div class="ask_label">
      <div class='tags'><a href="http://www.iteye.com/problems/tags/bufferedimage">bufferedimage</a><a href="http://www.iteye.com/problems/tags/ImageIO">ImageIO</a>&nbsp;</div>
      <span class="gray">2015年1月17日 16:12</span>
    </div>
    <div class="user_info fr">
      <a href="http://www.iteye.com/blog/user/gxd0911/blog/answered_problems"><img alt="gxd0911" class="logo" src="{{url('index/picture')}}/0ccc19e0-5c60-3e18-b4ae-aa706f6b9d81-thumb.jpg" title="gxd0911" /></a>
<span class="user_blog"><a href="http://www.iteye.com/blog/user/gxd0911/blog/answered_problems" title="gxd0911">gxd0911</a></span>
<br />
<span class="score gray" title="问答积分">5</span>
<br />
<span class="gold gray" title="金牌">0</span>
<span class="silver gray" title="银牌">0</span>
<span class="bronze gray" title="铜牌">2</span>

    </div>
  </div>
</div>



      <div class="question-summary">
  <div class="statscontainer">
    <div class="statsarrow"></div>
    <div class="stats">
      <div class="vote">
        <div class="votes">
          <span class="vote_number">0</span>
          <p>票</p>
        </div>
      </div>
      <div class="status answered-accepted">
        <span class="ask_number">5</span><p>回答</p>
      </div>
    </div>
    <div class="view gray">4739 浏览</div>
  </div>
  <div class="summary">
    <h3>
	  
      <a href="/problems/140381">QQ在线链接 点击图片链接就能和我聊天，但是写过之后为什么老是链接一个新地址。</a><span class="status">[已解决]</span><span class="score">5</span>

    </h3>

    <p>
      &lt;a target=&quot;_self&quot; href=&quot;http://wpa.qq.com/msgrd?v=3&amp;uin=328770941&amp;site=qq&amp;menu=yes&quot;&gt;&lt;img border=&quot;0&quot; src=&quot;http://wpa.qq.com/pa?p=2:328770941:53&qu ...
    </p>

    <div class="ask_label">
      <div class='tags'><a href="http://www.iteye.com/problems/tags/QQ">QQ</a><a href="http://www.iteye.com/problems/tags/%E9%93%BE%E6%8E%A5">链接</a><a href="http://www.iteye.com/problems/tags/%E5%9C%A8%E7%BA%BF">在线</a><a href="http://www.iteye.com/problems/tags/%E5%AF%B9%E8%AF%9D">对话</a>&nbsp;</div>
      <span class="gray">2015年1月17日 10:37</span>
    </div>
    <div class="user_info fr">
      <a href="http://www.iteye.com/blog/user/l18703658907/blog/answered_problems"><img alt="l18703658907" class="logo" src="{{url('index/picture')}}/user-logo-thumb_2.gif" title="l18703658907" /></a>
<span class="user_blog"><a href="http://www.iteye.com/blog/user/l18703658907/blog/answered_problems" title="l18703658907">l18703658907</a></span>
<br />
<span class="score gray" title="问答积分">25</span>
<br />
<span class="gold gray" title="金牌">0</span>
<span class="silver gray" title="银牌">0</span>
<span class="bronze gray" title="铜牌">2</span>

    </div>
  </div>
</div>



      <div class="question-summary">
  <div class="statscontainer">
    <div class="statsarrow"></div>
    <div class="stats">
      <div class="vote">
        <div class="votes">
          <span class="vote_number">0</span>
          <p>票</p>
        </div>
      </div>
      <div class="status answered-accepted">
        <span class="ask_number">11</span><p>回答</p>
      </div>
    </div>
    <div class="view gray">3002 浏览</div>
  </div>
  <div class="summary">
    <h3>
	  
      <a href="/problems/137799">现在Spring怎么下载jar</a><span class="status">[已解决]</span><span class="score">5</span>

    </h3>

    <p>
      从github上下载Spring的jar，下载下来怎么是1M的， http://repo.spring.io/simple/libs-release-local/org/springframework/spring/3.2.7.RELEASE/ 
    </p>

    <div class="ask_label">
      <div class='tags'><a href="http://www.iteye.com/problems/tags/Spring">Spring</a>&nbsp;</div>
      <span class="gray">2015年1月16日 21:50</span>
    </div>
    <div class="user_info fr">
      <a href="http://www.iteye.com/blog/user/ndq1213/blog/answered_problems"><img alt="ndq1213" class="logo" src="{{url('index/picture')}}/user-logo-thumb_2.gif" title="ndq1213" /></a>
<span class="user_blog"><a href="http://www.iteye.com/blog/user/ndq1213/blog/answered_problems" title="ndq1213">ndq1213</a></span>
<br />
<span class="score gray" title="问答积分">25</span>
<br />
<span class="gold gray" title="金牌">0</span>
<span class="silver gray" title="银牌">0</span>
<span class="bronze gray" title="铜牌">2</span>

    </div>
  </div>
</div>


  <div class="question-summary">
    <!-- Ads ID 254 -->
    
    
      <div id="kp_box_254" data-pid="254"><iframe  src="https://adaccount.csdn.net/#/preview/555?m=bbippJEcLpJJEfvLpJJiSnJHtcmUHEbJncitcALLonioibHnbSpLAbDvfHpvbvvHntJESLLQSibSASEbWpnbLpJbApcLHDbSQtnQ&k=" frameborder="0" width= "100%"  height= "75px" scrolling="no" ></iframe><img class="pre-img-lasy" data-src="{{url('index/picture')}}/1_3.png"></div>
    
  </div>

      <div class="question-summary">
  <div class="statscontainer">
    <div class="statsarrow"></div>
    <div class="stats">
      <div class="vote">
        <div class="votes">
          <span class="vote_number">0</span>
          <p>票</p>
        </div>
      </div>
      <div class="status answered-accepted">
        <span class="ask_number">1</span><p>回答</p>
      </div>
    </div>
    <div class="view gray">2147 浏览</div>
  </div>
  <div class="summary">
    <h3>
	  
      <a href="/problems/137490">博饼游戏或掷色子的特效如何实现？</a><span class="status">[已解决]</span><span class="score">10</span>

    </h3>

    <p>
       想弄一个赌大小的游戏，但是弄得有点土，想看下别人怎么实现的。 
    </p>

    <div class="ask_label">
      <div class='tags'><a href="http://www.iteye.com/problems/tags/Web%E7%BB%BC%E5%90%88">Web综合</a>&nbsp;</div>
      <span class="gray">2015年1月16日 10:10</span>
    </div>
    <div class="user_info fr">
      <a href="http://www.iteye.com/blog/user/932669971/blog/answered_problems"><img alt="牛BB" class="logo" src="{{url('index/picture')}}/user-logo-thumb_2.gif" title="牛BB" /></a>
<span class="user_blog"><a href="http://www.iteye.com/blog/user/932669971/blog/answered_problems" title="牛BB">牛BB</a></span>
<br />
<span class="score gray" title="问答积分">23</span>
<br />
<span class="gold gray" title="金牌">0</span>
<span class="silver gray" title="银牌">0</span>
<span class="bronze gray" title="铜牌">9</span>

    </div>
  </div>
</div>



      <div class="question-summary">
  <div class="statscontainer">
    <div class="statsarrow"></div>
    <div class="stats">
      <div class="vote">
        <div class="votes">
          <span class="vote_number">0</span>
          <p>票</p>
        </div>
      </div>
      <div class="status answered-accepted">
        <span class="ask_number">2</span><p>回答</p>
      </div>
    </div>
    <div class="view gray">6290 浏览</div>
  </div>
  <div class="summary">
    <h3>
	  
      <a href="/problems/137502">java.security.InvalidAlgorithmParameterException: Prime size must be multiple</a><span class="status">[已解决]</span><span class="score">5</span>

    </h3>

    <p>
      javax.net.ssl.SSLException: java.lang.RuntimeException: Could not generate DH keypair  at sun.security.ssl.Alerts.getSSLException(Alerts.java:208)  at sun.security.ssl.SSLSocketImpl.fatal(SSLSocketImpl ...
    </p>

    <div class="ask_label">
      <div class='tags'>&nbsp;</div>
      <span class="gray">2015年1月16日 15:44</span>
    </div>
    <div class="user_info fr">
      <a href="http://www.iteye.com/blog/user/k6j7/blog/answered_problems"><img alt="上头欢乐送" class="logo" src="{{url('index/picture')}}/user-logo-thumb_2.gif" title="上头欢乐送" /></a>
<span class="user_blog"><a href="http://www.iteye.com/blog/user/k6j7/blog/answered_problems" title="上头欢乐送">上头欢乐送</a></span>
<br />
<span class="score gray" title="问答积分">25</span>
<br />
<span class="gold gray" title="金牌">0</span>
<span class="silver gray" title="银牌">0</span>
<span class="bronze gray" title="铜牌">3</span>

    </div>
  </div>
</div>



      <div class="question-summary">
  <div class="statscontainer">
    <div class="statsarrow"></div>
    <div class="stats">
      <div class="vote">
        <div class="votes">
          <span class="vote_number">0</span>
          <p>票</p>
        </div>
      </div>
      <div class="status answered-accepted">
        <span class="ask_number">8</span><p>回答</p>
      </div>
    </div>
    <div class="view gray">2996 浏览</div>
  </div>
  <div class="summary">
    <h3>
	  
      <a href="/problems/136742">关于职位问题？</a><span class="status">[已解决]</span><span class="score">0</span>

    </h3>

    <p>
      假如公司有三个职位给你，你选哪个？ 1、部门经理：杂事比较多，协调各个部门之间的杂事，协调商户相关事宜，管理本部门员工的建设等。 2、项目经理：负责公司项目的建设，Team leader，专注于技术的开发，协调产品部门。 3、架构师：技术要求比较高，负责公司内部系统的架构设计，系统性能的提升，专项于架构设计。 公司职位功能分配不是很明确，也许工作内容都有重叠。三个职位工资差不多，CTO直接领导，看个 ...
    </p>

    <div class="ask_label">
      <div class='tags'><a href="http://www.iteye.com/problems/tags/%E9%A1%B9%E7%9B%AE%E7%AE%A1%E7%90%86">项目管理</a>&nbsp;</div>
      <span class="gray">2015年1月15日 12:01</span>
    </div>
    <div class="user_info fr">
      <a href="http://www.iteye.com/blog/user/qqulijun/blog/answered_problems"><img alt="qqulijun" class="logo" src="{{url('index/picture')}}/user-logo-thumb_2.gif" title="qqulijun" /></a>
<span class="user_blog"><a href="http://www.iteye.com/blog/user/qqulijun/blog/answered_problems" title="qqulijun">qqulijun</a></span>
<br />
<span class="score gray" title="问答积分">0</span>
<br />
<span class="gold gray" title="金牌">0</span>
<span class="silver gray" title="银牌">0</span>
<span class="bronze gray" title="铜牌">4</span>

    </div>
  </div>
</div>



      <div class="question-summary">
  <div class="statscontainer">
    <div class="statsarrow"></div>
    <div class="stats">
      <div class="vote">
        <div class="votes">
          <span class="vote_number">0</span>
          <p>票</p>
        </div>
      </div>
      <div class="status answered-accepted">
        <span class="ask_number">0</span><p>回答</p>
      </div>
    </div>
    <div class="view gray">4002 浏览</div>
  </div>
  <div class="summary">
    <h3>
	  
      <a href="/problems/137534">hadoop2.x集群部署一种一个datanode无法启动</a><span class="status">[已解决]</span><span class="score">10</span>

    </h3>

    <p>
      2015-01-16 09:08:54,145 FATAL org.apache.hadoop.hdfs.server.datanode.DataNode: Exception in secureMain java.net.UnknownHostException: node1: node1  at java.net.InetAddress.getLocalHost(InetAddress.java ...
    </p>

    <div class="ask_label">
      <div class='tags'><a href="http://www.iteye.com/problems/tags/%E9%85%8D%E7%BD%AE">配置</a><a href="http://www.iteye.com/problems/tags/%E5%90%AF%E5%8A%A8">启动</a><a href="http://www.iteye.com/problems/tags/unknownhostexception">unknownhostexception</a><a href="http://www.iteye.com/problems/tags/hadoop2.x">hadoop2.x</a>&nbsp;</div>
      <span class="gray">2015年1月16日 18:09</span>
    </div>
    <div class="user_info fr">
      <a href="http://www.iteye.com/blog/user/yangweiqing/blog/answered_problems"><img alt="yangweiqing" class="logo" src="{{url('index/picture')}}/user-logo-thumb_2.gif" title="yangweiqing" /></a>
<span class="user_blog"><a href="http://www.iteye.com/blog/user/yangweiqing/blog/answered_problems" title="yangweiqing">yangweiqing</a></span>
<br />
<span class="score gray" title="问答积分">20</span>
<br />
<span class="gold gray" title="金牌">0</span>
<span class="silver gray" title="银牌">0</span>
<span class="bronze gray" title="铜牌">2</span>

    </div>
  </div>
</div>



      <div class="question-summary">
  <div class="statscontainer">
    <div class="statsarrow"></div>
    <div class="stats">
      <div class="vote">
        <div class="votes">
          <span class="vote_number">0</span>
          <p>票</p>
        </div>
      </div>
      <div class="status answered-accepted">
        <span class="ask_number">2</span><p>回答</p>
      </div>
    </div>
    <div class="view gray">2511 浏览</div>
  </div>
  <div class="summary">
    <h3>
	  
      <a href="/problems/137501">关于jsloader 工作原理</a><span class="status">[已解决]</span><span class="score">5</span>

    </h3>

    <p>
      我想知道jsloader工作原理到底是怎样的 他的动态加载是如何实现的 是在页面加载完后 根据页面中处理用到那个{{url('index/js')}}/CSS文件 再去加载文件 还是如何。。 我在调用下面2个方法时 JSLoader.loadStyleSheet(&quot;{{url('index/css')}}/style.css&quot;); .... JSLoader.loadJavaScript(&quot;{{url('index/js')}}/jquery-1.10.2.min.js ...
    </p>

    <div class="ask_label">
      <div class='tags'><a href="http://www.iteye.com/problems/tags/JavaScript">JavaScript</a><a href="http://www.iteye.com/problems/tags/CSS">CSS</a><a href="http://www.iteye.com/problems/tags/JS">JS</a><a href="http://www.iteye.com/problems/tags/jsloader">jsloader</a>&nbsp;</div>
      <span class="gray">2015年1月16日 14:23</span>
    </div>
    <div class="user_info fr">
      <a href="http://www.iteye.com/blog/user/nolifeking/blog/answered_problems"><img alt="nolifeking" class="logo" src="{{url('index/picture')}}/user-logo-thumb_2.gif" title="nolifeking" /></a>
<span class="user_blog"><a href="http://www.iteye.com/blog/user/nolifeking/blog/answered_problems" title="nolifeking">nolifeking</a></span>
<br />
<span class="score gray" title="问答积分">10</span>
<br />
<span class="gold gray" title="金牌">0</span>
<span class="silver gray" title="银牌">0</span>
<span class="bronze gray" title="铜牌">3</span>

    </div>
  </div>
</div>



      <div class="question-summary">
  <div class="statscontainer">
    <div class="statsarrow"></div>
    <div class="stats">
      <div class="vote">
        <div class="votes">
          <span class="vote_number">0</span>
          <p>票</p>
        </div>
      </div>
      <div class="status answered-accepted">
        <span class="ask_number">3</span><p>回答</p>
      </div>
    </div>
    <div class="view gray">2332 浏览</div>
  </div>
  <div class="summary">
    <h3>
	  
      <a href="/problems/137256">折腾阿，请求大家帮助 HttpClient的</a><span class="status">[已解决]</span><span class="score">10</span>

    </h3>

    <p>
      是这样的，用HttpClient4.3 访问网址。 http://weblbs.yystatic.com//get-data/84166046?subSid=2352881662&amp;type=yyscene&amp;_=47338133 总是返回404错误，但是网页访问肯定是没问题的。为什么HttpClient总是不对呢？是不是和&quot;//&quot;有关系。 折腾了一天了。其他的都OK ...
    </p>

    <div class="ask_label">
      <div class='tags'><a href="http://www.iteye.com/problems/tags/java%20httpClient">java httpClient</a>&nbsp;</div>
      <span class="gray">2015年1月16日 01:41</span>
    </div>
    <div class="user_info fr">
      <a href="http://www.iteye.com/blog/user/iexploiter/blog/answered_problems"><img alt="iExploiter" class="logo" src="{{url('index/picture')}}/31626b65-492b-3c7a-922e-87002152615b-thumb.jpg" title="iExploiter" /></a>
<span class="user_blog"><a href="http://www.iteye.com/blog/user/iexploiter/blog/answered_problems" title="iExploiter">iExploiter</a></span>
<br />
<span class="score gray" title="问答积分">20</span>
<br />
<span class="gold gray" title="金牌">0</span>
<span class="silver gray" title="银牌">0</span>
<span class="bronze gray" title="铜牌">2</span>

    </div>
  </div>
</div>



      <div class="question-summary">
  <div class="statscontainer">
    <div class="statsarrow"></div>
    <div class="stats">
      <div class="vote">
        <div class="votes">
          <span class="vote_number">0</span>
          <p>票</p>
        </div>
      </div>
      <div class="status answered-accepted">
        <span class="ask_number">1</span><p>回答</p>
      </div>
    </div>
    <div class="view gray">10588 浏览</div>
  </div>
  <div class="summary">
    <h3>
	  
      <a href="/problems/136748">spring websocket 问题</a><span class="status">[已解决]</span><span class="score">5</span>

    </h3>

    <p>
      16:12:36.662 [localhost-startStop-1] ERROR o.s.web.context.ContextLoader - Context initialization failed org.springframework.beans.factory.BeanCreationException: Error creating bean with name 'webSocke ...
    </p>

    <div class="ask_label">
      <div class='tags'><a href="http://www.iteye.com/problems/tags/Spring">Spring</a>&nbsp;</div>
      <span class="gray">2015年1月15日 16:17</span>
    </div>
    <div class="user_info fr">
      <a href="http://www.iteye.com/blog/user/cyanqx/blog/answered_problems"><img alt="cyanqx" class="logo" src="{{url('index/picture')}}/fde65078-63c8-3455-bca1-d9f58a56b213-thumb.jpg" title="cyanqx" /></a>
<span class="user_blog"><a href="http://www.iteye.com/blog/user/cyanqx/blog/answered_problems" title="cyanqx">cyanqx</a></span>
<br />
<span class="score gray" title="问答积分">20</span>
<br />
<span class="gold gray" title="金牌">0</span>
<span class="silver gray" title="银牌">0</span>
<span class="bronze gray" title="铜牌">4</span>

    </div>
  </div>
</div>



      <div class="question-summary">
  <div class="statscontainer">
    <div class="statsarrow"></div>
    <div class="stats">
      <div class="vote">
        <div class="votes">
          <span class="vote_number">0</span>
          <p>票</p>
        </div>
      </div>
      <div class="status answered-accepted">
        <span class="ask_number">4</span><p>回答</p>
      </div>
    </div>
    <div class="view gray">2167 浏览</div>
  </div>
  <div class="summary">
    <h3>
	  
      <a href="/problems/136745">freemaker页面数据问题</a><span class="status">[已解决]</span><span class="score">0</span>

    </h3>

    <p>
      在用freemaker时，页面上会有一些列表数据和几个统计的总数数据，那这些数据是返回页面时把数据传到页面上用freemaker渲染出来还是单独的用ajax请求数据用js展现出来呢？？虽然两种都可以，但不知道正常的是怎么渲染数据的（列表、总技数字之类的）
    </p>

    <div class="ask_label">
      <div class='tags'><a href="http://www.iteye.com/problems/tags/JavaScript">JavaScript</a>&nbsp;</div>
      <span class="gray">2015年1月15日 14:46</span>
    </div>
    <div class="user_info fr">
      <a href="http://www.iteye.com/blog/user/wangzl2222/blog/answered_problems"><img alt="wangzl2222" class="logo" src="{{url('index/picture')}}/4b63ca8c-84ec-337c-ab7a-a9f7544361c4-thumb.jpg" title="wangzl2222" /></a>
<span class="user_blog"><a href="http://www.iteye.com/blog/user/wangzl2222/blog/answered_problems" title="wangzl2222">wangzl2222</a></span>
<br />
<span class="score gray" title="问答积分">4</span>
<br />
<span class="gold gray" title="金牌">0</span>
<span class="silver gray" title="银牌">0</span>
<span class="bronze gray" title="铜牌">26</span>

    </div>
  </div>
</div>



  </div>

<div class="pagination" total_entries="95981"><span class="disabled prev_page">&laquo; 上一页</span> <span class="current">1</span> <a href="/ask?page=2" rel="next">2</a> <a href="/ask?page=3">3</a> <span class="gap">&hellip;</span> <a href="/ask?page=5332">5332</a> <a href="/ask?page=5333">5333</a> <a href="/ask?page=2" class="next_page" rel="next">下一页 &raquo;</a></div>

<div class="problem_list">
</div>
<div class="problem_list">
  <div class="nav" style="height: 30px;"></div>
</div>



        </div>
        <div id="local">
          
  <!--<div class="search column">-->
<!--  <form action="" method="get">-->
<!--    <input class="text" id="query" name="query" style="width: 135px;" type="text" value="" />-->
<!--    <input class="submit" type="submit" value="搜索问题" />-->
<!--  </form> -->
<!--</div>-->

  <div class="column" style="text-align: center">
    <!-- Ads ID 255 -->
    
    
      <div id="kp_box_255" data-pid="255"><iframe  src="https://adaccount.csdn.net/#/preview/291?m=cDUHntcpAUbtJLmHiEEcQopDnLLHDvtvESHnipDnoEctJHEAJQbiSAWSpLSAbLncbcoQtpQQQQELJQQQQSQiQQQcbSEbEHAcLLco&k=" frameborder="0" width= "300px"  height= "250px" scrolling="no" ></iframe><img class="pre-img-lasy" data-src="{{url('index/picture')}}/1_3.png"></div>
    
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
  <div class="my">
  <a href="https://ask.csdn.net/" alt="我要提问" target="_blank" title="我要提问"><img alt="Ask-but" src="{{url('index/picture')}}/ask-but.gif" /></a>
  <br />
  <div class="ask_but">
    
      <span class="my_ask"><a href="/login">我的问答</a></span>
    
    <span class="help"> <a href="/problems/faq" title="FAQ">FAQ</a> | <a href="/problems/medals">勋章</a></span>
  </div>
</div>

  <div class="column" style="text-align: center">
    <!-- Ads ID 256 -->
    
    
      <script type="text/javascript" src="{{url('index/js')}}/jwn7zn_1.js"></script>
    
  </div>
  <div class="tags column">
  <h3>问答分类</h3>
  
    <h4><a href="/problems/forums/mobile">移动开发技术</a></h4>
    
      <a href="/problems/tags/Android">Android</a>
    
      <a href="/problems/tags/iOS">iOS</a>
    
      <a href="/problems/tags/wp7">wp7</a>
    
  
    <h4><a href="/problems/forums/web">Web前端技术</a></h4>
    
      <a href="/problems/tags/JavaScript">JavaScript</a>
    
      <a href="/problems/tags/HTML5">HTML5</a>
    
      <a href="/problems/tags/jQuery">jQuery</a>
    
      <a href="/problems/tags/CSS">CSS</a>
    
  
    <h4><a href="/problems/forums/Java">Java企业应用</a></h4>
    
      <a href="/problems/tags/Hibernate">Hibernate</a>
    
      <a href="/problems/tags/Spring">Spring</a>
    
      <a href="/problems/tags/Struts">Struts</a>
    
      <a href="/problems/tags/iBATIS">iBATIS</a>
    
      <a href="/problems/tags/%E4%BC%81%E4%B8%9A%E5%BA%94%E7%94%A8">企业应用</a>
    
      <a href="/problems/tags/Lucene">Lucene</a>
    
      <a href="/problems/tags/SOA">SOA</a>
    
  
    <h4><a href="/problems/forums/language">编程语言技术</a></h4>
    
      <a href="/problems/tags/Ruby">Ruby</a>
    
      <a href="/problems/tags/Python">Python</a>
    
      <a href="/problems/tags/PHP">PHP</a>
    
      <a href="/problems/tags/Flash">Flash</a>
    
      <a href="/problems/tags/C++">C++</a>
    
      <a href="/problems/tags/.net">.net</a>
    
  
    <h4><a href="/problems/forums/Tech">综合技术</a></h4>
    
      <a href="/problems/tags/Linux">Linux</a>
    
      <a href="/problems/tags/%E6%95%B0%E6%8D%AE%E5%BA%93">数据库</a>
    
      <a href="/problems/tags/%E6%95%8F%E6%8D%B7%E7%BC%96%E7%A8%8B">敏捷编程</a>
    
      <a href="/problems/tags/%E6%95%B0%E6%8D%AE%E7%BB%93%E6%9E%84">数据结构</a>
    
      <a href="/problems/tags/%E8%BD%AF%E4%BB%B6%E6%B5%8B%E8%AF%95">软件测试</a>
    
      <a href="/problems/tags/%E9%A1%B9%E7%9B%AE%E7%AE%A1%E7%90%86">项目管理</a>
    
  
    <h4><a href="/problems/forums/New">入门技术</a></h4>
    
  
    <h4><a href="/problems/forums/Job">招聘求职</a></h4>
    
  
    <h4><a href="/problems/forums/Life">海阔天空</a></h4>
    
  
</div>
  <div class="column" style="text-align: center">
    <!-- Ads ID 257 -->
    
    
      <div id="kp_box_257" data-pid="257" data-report-view='{"mod":"kp_popu_257-662","keyword":""}' data-report-click='{"mod":"kp_popu_257-662","keyword":""}'><div style="width:220px;height:220px;margin:0 auto;position:relative;overflow:hidden;"> <a href="https://edu.csdn.net/topic/python115?utm_source=iteye" target="_blank"><img src="{{url('index/picture')}}/201811150919211586_1.jpg"width="220" height="220"></a><span style="position:absolute;right:0;bottom:0;background:url(images/201608021757063065_1.png) no-repeat;width:33px;height:18px;display:block;z-index: 9999;"></span></div><img class="pre-img-lasy" data-src="{{url('index/picture')}}/1_3.png"></div>
    
  </div>
  <div class="column">
  <h3>最新问题</h3>
  <ul class="new_ask">
    
      <li><a href="/problems/142916">系统对于多业务模式的解决方案思路</a></li>
    
      <li><a href="/problems/142915">ssh整合时出现的问题</a></li>
    
      <li><a href="/problems/142914">一个servlet如何根据不同的请求页面返回该请求页面</a></li>
    
      <li><a href="/problems/142913">网上下载的jar游戏包要怎么在MyEclipse上运行，或还原成源码</a></li>
    
      <li><a href="/problems/142023">请问这个URL实现技术是啥？</a></li>
    
      <li><a href="/problems/141596">使用Mybatis执行sql时如何统一校验输入参数?</a></li>
    
      <li><a href="/problems/141271">js里这种表述式是啥意思？return (y1 - y2 &gt; 0 ? &quot;Up&quot; : &quot;Down&quot;);</a></li>
    
      <li><a href="/problems/141163"> sokect/sokectio/websokect三者的关系</a></li>
    
      <li><a href="/problems/141138">文件上传是存在硬盘上，还是存在数据库中？</a></li>
    
      <li><a href="/problems/140399">多目录多线程并行处理</a></li>
    
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
  <div class="column">
  <h3>本周活跃投票用户</h3>
  
</div>
  <div class="column">
  <h3>最新评论</h3>
  <ul class="comments">
    
      <li> 除了去掉字段的title，还能修改MyBatis的设置：&lt;setting name=&quot;useColumnLabel&quot; value=&quot;false&quot; /&gt;，哥只能帮你到这了
        <br />
        <span class="gray"><a href='https://www.iteye.com/blog/user/haihuichen' target='_blank' title='haihuichen'>haihuichen</a>&nbsp;评论了</span> <a href="/problems/95897">mybatis联teradata 查询时返回结果集为空，同样的代码在mysql下就可以返回结果集</a>
      </li>
    
      <li> 因为TD有title这个鬼东西，会导致查出来的全是中文字段名，去掉title就好了
        <br />
        <span class="gray"><a href='https://www.iteye.com/blog/user/haihuichen' target='_blank' title='haihuichen'>haihuichen</a>&nbsp;评论了</span> <a href="/problems/95897">mybatis联teradata 查询时返回结果集为空，同样的代码在mysql下就可以返回结果集</a>
      </li>
    
      <li> session ID就是登陆的KEY， 所有持有session ID，一般不会串号，除非你作死，把session作为全局的类变量， 或者静态变量来玩。 作为局部变量的情况下，session id正确，就不可能串号。



另外， 如果是小程序、APP，特别要注意，登陆的之前，要有一个专属接口， 去拿到session id， 不要用登陆的接口持有session， 这里很容易出现串号。

很难理解吗？ 将APP和小程序视为浏览器的登陆过程，就很好理解了。 浏览器登陆，首先是打开登陆页面，这个时候，session id就产生了，而不是登陆的接口产生的。


我们团队x-teamer刚解决这个问题， 所以分享一下

可以加我VX， 26762685
        <br />
        <span class="gray"><a href='https://www.iteye.com/blog/user/26762685' target='_blank' title='26762685'>26762685</a>&nbsp;评论了</span> <a href="/problems/6765">SOS!session串号现象</a>
      </li>
    
      <li> 请教下，java监听打印机状态是如何解决的？
        <br />
        <span class="gray"><a href='https://www.iteye.com/blog/user/elbert' target='_blank' title='elbert'>elbert</a>&nbsp;评论了</span> <a href="/problems/26571">Java怎么实现打印机监控</a>
      </li>
    
      <li> 能用字符串拼接解决的优先用字符串拼接解决。比如time=2359转成时间, 用字符串拼接time/60+&quot;:&quot;+time%60我笔记本耗时0ms,  String.format(&quot;%02d:%02d&quot;, time/60, time%60) 耗时43ms. 具体情况具体分析
        <br />
        <span class="gray"><a href='https://www.iteye.com/blog/user/sandy8508' target='_blank' title='sandy8508'>sandy8508</a>&nbsp;评论了</span> <a href="/problems/87885">Java String.format性能如何</a>
      </li>
    
      <li> 去除 return；
        <br />
        <span class="gray"><a href='https://www.iteye.com/blog/user/feng-tai-jun' target='_blank' title='feng_tai_jun'>feng_tai_jun</a>&nbsp;评论了</span> <a href="/problems/20710">JSP里加return就会无法编译说Unreachable code </a>
      </li>
    
      <li> 这么久了，问题有结果了吗，也是遇到此问题（因为pdfbox加载的内容与原文不一致才想修改实现方式）
查了一下aspose这个插件，功能很多，示例太少，没找到怎么指定打印机及纸张大小
        <br />
        <span class="gray"><a href='https://www.iteye.com/blog/user/xiaojunjava' target='_blank' title='xiaojunjava'>xiaojunjava</a>&nbsp;评论了</span> <a href="/problems/77852">JAVA 连接打印机 打印作业属性设置无效果问题 </a>
      </li>
    
      <li> jdk有两个jar替换一下
        <br />
        <span class="gray"><a href='https://www.iteye.com/blog/user/xiaominzi' target='_blank' title='xiaominzi'>xiaominzi</a>&nbsp;评论了</span> <a href="/problems/137502">java.security.InvalidAlgorithmParameterException: Prime size must be multiple</a>
      </li>
    
      <li> 开源的客服软件很多，但是开源的问题是不容易得到支持。
https://github.com/chatopera/cosin

这个是我觉得综合对比，最好的选择。功能完善，社区活跃，方便部署。
        <br />
        <span class="gray"><a href='https://www.iteye.com/blog/user/watson243671' target='_blank' title='watson243671'>watson243671</a>&nbsp;评论了</span> <a href="/problems/26871">有没有什么好的开源的在线客服系统？语言不限</a>
      </li>
    
      <li> 怎么样？后来恢复了没？
        <br />
        <span class="gray"><a href='https://www.iteye.com/blog/user/chenqi210' target='_blank' title='chenqi210'>chenqi210</a>&nbsp;评论了</span> <a href="/problems/38479">移动WAP PUSH问题</a>
      </li>
    
  </ul>
</div>

        </div>
@endsection