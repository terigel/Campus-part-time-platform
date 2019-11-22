<?php 
  include_once 'admin/db_connect.php';
  include_once 'admin/public_function.php';
  if(isset($_COOKIE['username']) && !empty($_COOKIE['username']) && isset($_COOKIE['password']) && !empty($_COOKIE['password'])){
    $auto_login=true;//标志已经选择过自动登录        
  }else{
    $auto_login=false;
  } 
?>
<!DOCTYPE html>
<html>
 <head> 
  <meta charset="utf-8" /> 
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
                background:#00b187;
                width: 100%;}
           .logo{
               height:120px;
               }
           .bg{
            width: 100%;
            height: 700px;

            background-image: url(admin/image/b.png);
            background-repeat: no-repeat;
            background-size: 100% 100%;
            -moz-background-size:100% 100%;
            position: relative;
           }
           .box{
            height: 400px;
            width: 400px;
            background: #000;
            opacity: 0.5;
            left: 0;
            top:0;
            bottom: 0;
            right: 0;
            position: absolute;
            margin: auto;
           
           }
           .in0{
            margin-top: 60px;
            margin-left: 100px;
            width: 200px;
            height: 40px;
           }
           .in0 option{
            width: 200px;
            height: 40px;
           }
           .in1{
            margin-top: 30px;
            margin-left: 100px;
            width: 200px;
            height: 40px;
           }
           .in2{
             margin-top: 30px;
            margin-left: 100px;
            width: 200px;
            height: 40px;
           }
           .in3{
             margin-top: 30px;
            margin-left: 100px;
            width: 130px;
            height: 40px;
           }
           .btn1{
            margin-top: 30px;
            margin-bottom: 60px;
            margin-left: 100px;
            width: 200px;
            height: 40px;
            background: #f87d04;

           }
          
            .footer{
                height:140px;
                background:#00b187;
                clear:both;
                position:absolute;
                width: 100%;
                left:0px;}
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
     </style> 
 </head> 
 <body> 
  <div class="top"> 
   <div class="logo"> 
    <img src="admin/image/logo.png" style="width:360px; height:96px; margin-top:20px; margin-left:100px;" /> 
   </div> 
  </div> 
  <div class="bg"> 
   <div class="box"> 
    <form method="post" action="login_cl.php" onsubmit="return login_check()"> 
      <div>
        <select name="user_type" class="in0">
          <option value="1">公司</option>
          <option value="0">个人</option>
        </select>
      </div>
     <div> 
      <input placeholder="请输入用户名" type="text" name="user_name" id="user_name" class="in1" value="<?php if($auto_login) echo $_COOKIE['username']?>" /> 
     </div> 
     <div> 
      <input placeholder="请输入密码" type="password" name="user_psw" id="user_psw" class="in2" value="<?php if($auto_login) echo substr($_COOKIE['password'],0,8)?>" /> 
     </div> 
     <div> 
      <button class="btn1" type="submit">立即登录</button> 
     </div> 
    </form> 
   </div> 
  </div> 
  <div class="footer"> 
   <div class="center-box"> 
    <div class="text">
      校园兼职平台
     <br /> 电话：027-87221877E-maishxm@hubeiwater.gov.cn
     <br /> 地址：包头市土默特右旗萨拉齐镇内蒙古农业大学职业技术学院
     <br /> 友情链接:
     <a href="">内蒙古农业大学职业技术学院</a>&nbsp;&nbsp; 
    </div> 
    <div class="weixin"> 
     <img src="images/ewm.png" alt="" /> 
    </div> 
   </div> 
  </div>  
  <script>
    var change=document.getElementById('change');
    var code_img=document.getElementById('code_img');
    change.onclick=function(){
        code_img.src="code.php?t="+new Date();
        return false;
        }
  </script>  
 </body>
</html>