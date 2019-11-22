<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="jquery.jslides.css" media="screen" />
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="jquery.jslides.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="bootstrap.min.js"></script>
<title>guestbook</title>
     <style>
	        *{
			 padding:0px;
			 margin:0px;}
			 a{
			   text-decoration:none;
			   color:#000;}
			 ul{
				 list-style:none;}
			.top{
				height:120px;
				background:#00b187;}
	       .logo{
			   height:120px;
			   }
		    .menu{
			   float:right;
			   width:670px;
			   height:40px;
			   position:absolute;
			   top:5px;
			   right:100px;
			   }
		    .menu a{
				display:block;
				float:left;
				width:110px;
				height:40px;
				line-height:40px;
				text-align:center;
				color:#FFF;
				margin-top:40px;
				font-family:微软雅黑;}
			.menu a:hover{
				background:url(images/menu_bg_h.png) center center no-repeat;
				color:#66973C;}
				#full-screen-slider { 
				width:100%; 
				height:396px; 
				float:left; 
				position:relative}
             #slides { 
			    display:block; 
			    width:100%; 
			    height:396px; 
			    list-style:none;
			    padding:0; 
			    margin:0; 
			    position:relative}
             #slides li { 
			    display:block;
			    width:100%;
			    height:100%;
			    list-style:none;
				padding:0;
				margin:0; 
				position:absolute}
             #slides li a {
				display:block;
			    width:100%;
			    height:100%;
			    text-indent:-9999px}
			.about-main{
				width:1000px;				height:auto;
				margin:0 auto;}
			.slide{
				height:360px;
				width:220px;
				float:left;
				border:1px solid #ccc;
				margin:-top:5px;
				margin-bottom:5px;}
			.cat_title{
				height:40px;
				line-height:40px;
				padding-left:20px;
				font-size:14px;
				color:#fff;
				font-weight:bold;
				background-color:#00b187;}
			.qq{
				height:85px;
				width:190px;
				border-bottom:1px dotted #d6d6d6;
				margin:0 auto;
				padding-left:10px;
				font-size:14px;
				margin-top:15px;}
			.qq div{
				height:42px;
				line-height:42px;
				margin:0 auto;}
			.service{
				height:58px;
				line-height:24px;
				width:160px;
				border-bottom:1px dotted #66973c;
				margin:0 atuo;
				padding-top:10px;
				background:url(images/clock.jpg) 8px center no-repeat;
				padding-left:40px;}
			.title{
				font-weight:bold;
				font-size:14px;}
			.detail{
				color:#00b187;
				font-weight:bold;
				font-family:Arial, Helvetica, sans-serif;
				font-size:13px;}
			.weix{
				height:58px;
				line-height:24px;
				width:160px;
				border-bottom:1px dotted #66973c;
				margin:0 atuo;
				padding-top:10px;
				background:url(images/weixin.jpg) 8px center no-repeat;
				padding-left:40px;}
			.email{
				height:58px;
				line-height:24px;
				width:160px;
				border-bottom:1px dotted #66973c;
				margin:0 atuo;
				padding-top:10px;
				background:url(images/email.jpg) 8px center no-repeat;
				padding-left:40px;}
			.right{
				min-height:360px;
				height:auto;
				width:760px;
				float:left;}
			
			
			.submenu{
				height:30px;
				line-height:30px;
				width:750px;
				border-bottom:1px solid #666;
				padding-left:10px;}
			.submenu a{
				font-size:16px;}
			.footer{
				height:140px;
				background:#00b187;
				position:absolute;
			}
			.center-box{
				width:1422px;
				height:120px;
				margin:0 auto;}
			.text{
				 height:105px;
				 color:#fff;
				 float:left;
				 line-height:23px;
				 font-size:13px;
				 padding-top:15px;
				 padding-left:120px;
				 position:relative;
				 top:5px;
				 left:200px;}
			.weixin{
				height:95px;
				float:right;
				text-align:center;
				padding-right:120px;
				padding-top:25px;
				position:relative;
				top:5px;
				left:-240px;}
			.clear{
				clear: both;
			}
	 </style>
</head>

<body>
      <div class="top">
           <div class="logo">
                <img src="image/logo.png" style="width:360px; height:96px; margin-top:20px; margin-left:100px;">
           </div>
       <div class="menu">
              <a href="index.html">首页</a>
             <a href="add_jz.php">发布兼职</a>
             <a href="b.html">求职投递</a>
             <a href="news_article.php">校园新闻</a>
             <a href="">服务帮助</a>
             <a href="guestbook.html">在线留言</a>
         </div>
     </div>
    <div id="full-screen-slider">
	<ul id="slides">
		<li style="background:url('image/a.png') no-repeat center top">
        	<a href="" target="_blank">第一张焦点幻灯的标题</a>
        </li>
		<li style="background:url('image/2.png') no-repeat center top">
        	<a href="" target="_blank">第二张焦点幻灯的标题</a>
        </li>
	</ul>
   </div>
   <div class="clear"></div>
<div class="about-main">
        <div class="slide">
             <div class="cat_title">在线客服</div>
             b
             <div class="qq">
                  <div>客服1：<img style="CURSOR:pointer" onClick="javascript:window.open('http://b.qq.com/webc.htm? new=0&sid=382526903&o=http://&7', '_blank ', 'height=502, width=644,toolbar=no, scrollbars=no,menubar=no,status=no');" border="0" src="http://wpa.qq.com/pa? p=1:382526903:7 alt="欢迎咨询"></div>
                  <div>客服2：<img style="CURSOR:pointer" onClick="javascript:window.open('http://b.qq.com/webc.htm? new=0&sid=382526903&o=http://&7', '_blank ', 'height=502, width=644,toolbar=no, scrollbars=no,menubar=no,status=no');" border="0" src="http://wpa.qq.com/pa? p=1:382526903:7 alt="欢迎咨询"></div>
             </div>
             <div class="service">
                   <span class="title">24小时服务热线</span><br/>
                   <span class="detail">0000-0000000</span>
             </div>
             <div class="weix">
                  <span class="title">微信公众号</span>
                  <span class="detail">dreammy168</span>
             </div>
              <div class="email">
                  <span class="title">电子邮箱</span>
                  <span class="detail">dreammymavy@168.com</span>
             </div>            
        </div>
        <div class="right">
              <div class="submenu"><a href="index.php">首页</a> -> <a href="">发布兼职基本信息</a></div>
              <div class="content">
                  	<form action="jz_cl.php?act=insert_jz" class="form-horizontal" method="post" style="margin-top: 20px;">
					  <div class="form-group">
					    <label for="jz_name" class="col-sm-2 control-label">兼职名称</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="jz_name" name="jz_name" placeholder="兼职名称">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="unit_name" class="col-sm-2 control-label">单位名称</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="unit_name" name="unit_name" placeholder="单位名称">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="unit_address" class="col-sm-2 control-label">单位地点</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="unit_address" name="unit_address" placeholder="单位地点">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="jz_class" class="col-sm-2 control-label">兼职种类</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="jz_class" name="jz_class" placeholder="兼职种类">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="jz_time" class="col-sm-2 control-label">兼职时间</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="jz_time" name="jz_time" placeholder="兼职时间">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="jz_wages" class="col-sm-2 control-label">兼职工资</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="jz_wages" name="jz_wages" placeholder="兼职工资">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="unit_phone" class="col-sm-2 control-label">联系方式</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="unit_phone" name="unit_phone" placeholder="联系方式">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="jz_remarks" class="col-sm-2 control-label">备注要求</label>
					    <div class="col-sm-10">
					      <textarea class="form-control" name="jz_remarks" rows="3"></textarea>
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-success" style="background-color: #00b187">提交</button>
					    </div>
					  </div>
					</form>
              </div>
        </div>
   </div>
  <div class="clear"></div>
   <div class="footer">
         <div class="center-box">
                <div class="text">
                   校园兼职平台<br/>
                   电话：027-87221877E-maishxm@hubeiwater.gov.cn<br/>
                   地址：包头市土默特右旗萨拉齐镇内蒙古农业大学职业技术学院<br/>
                   友情链接:<a href="">内蒙古农业大学职业技术学院</a>&nbsp;&nbsp;
                </diV>
              <div class="weixin">
                   <img src="images/ewm.png" alt="">
              </div>
         </div>
    </div>
</body>
</html>
