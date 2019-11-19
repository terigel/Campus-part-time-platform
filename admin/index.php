<?php
header('content-type:text/html;charset=utf-8');
session_start();
require_once ('session.php');
include_once 'db_connect.php';
include_once 'public_function.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>课后兼后台管理</title>
<link href="../css/index.css" type="text/css" rel="stylesheet"></link>
<script src="js/index.js" type="text/javascript"></script>
</head>
<body>
<div id="zong">
	<div id="top" >
		<h2>课后兼后台管理</h2>
		<p><script>index_date()</script></p>
	</div>
    <div id="left" style="background-color: #00b187;" >
   		<div class="menu">
   			<ul>
   				<li class="item">用户管理</li>
   				<li>
   					<dl>
   						<dd><a href="add_user.php" target="xs">添加用户信息</a></dd>
   						<dd><a href="user_list.php" target="xs">用户信息列表</a></dd>
              <dd><a href="user_pass.php" target="xs">用户认证管理</a></dd>
   					</dl>
   				</li>
   				<li class="item">新闻管理</li>
   				<li>
   					<dl>
   						<dd><a href="add_news.php" target="xs">添加新闻信息</a></dd>
   						<dd><a href="news_list.php" target="xs">新闻信息列表</a></dd>
   					</dl>
   				</li>
   			</ul>
   		</div>
    </div>
    <div id="right"><iframe name="xs"></iframe></div>
</div>
</body>
</html>

