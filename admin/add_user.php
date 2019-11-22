<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>内蒙古农业大学网站后台管理系统</title>
<link href="../css/index.css" type="text/css" rel="stylesheet"></link>
<script src="../js/user_check.js"></script>
</head>
<body>
	<h3>添加用户信息</h3>
	<div id="adduser">
		<form action="user_cl.php?action=add" method="post" onsubmit="return useradd_check()">
			<p><label>用户名：</label><input type="text" name="user_name" id="user_name"></input></p>
			<p><label>邮　箱：</label><input type="text" name="user_email" id="user_email"></input></p>
			<p><label>密　码：</label><input type="password" name="password" id="password"></input></p>
			<p><label>确认密码：</label><input type="password" name="re_password" id="re_password"></input></p>
			<label>认证信息：</label>
			<div class="radio">
			  <label>
			    <input type="radio" name="type" id="pass1" value="1">
			    公司
			  </label>
			</div>
			<div class="radio">
			  <label>
			    <input type="radio" name="type" id="pass2" value="0" checked>
			    个人
			  </label>
			</div>
			<p class="btn"><input type="submit" value="提　交"></input>&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="重　填"></input></p>
		</form>
	</div>

</body>
</html>
