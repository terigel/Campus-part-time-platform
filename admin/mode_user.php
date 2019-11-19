<?php
include_once 'db_connect.php';	
include_once 'public_function.php';
	$id=$_GET['id'];//接收的是user_list。php文件中修改链接传递过来的变量
	$sql="select username,email from user_table where id=?";//查询语句，根据传递过来的ID值进行条件查询
	$stmt=mysqli_stmt_init($link);//建立stmt对象
	mysqli_stmt_prepare($stmt, $sql);//将sql语句和对象绑定
	mysqli_stmt_bind_param($stmt, "s",$id);//将？和变量进行绑定
	mysqli_stmt_execute($stmt);
	mysqli_stmt_bind_result($stmt,$username,$email);
	mysqli_stmt_store_result($stmt);
	if(mysqli_stmt_num_rows($stmt)>0){
	mysqli_stmt_fetch($stmt);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>内蒙古农业大学网站后台管理系统</title>
<link href="../css/index.css" type="text/css" rel="stylesheet"></link>
<script src="../js/user_check.js"></script>
</head>
<body>
	<h3>修改用户信息</h3>
	<div id="adduser">
		<form action="user_cl.php?action=mode&id=<?php echo $id?>" method="post" onsubmit="return useradd_check()">
			<p><label>用户名：</label><input type="text" name="user_name" id="user_name" value="<?php echo $username?>"></input></p>
			<p><label>邮　箱：</label><input type="text" name="user_email" id="user_email" value="<?php echo $email?>"></input></p>
			<p><label>密　码：</label><input type="password" name="password" id="password"></input></p>
			<p><label>确认密码：</label><input type="password" name="re_password" id="re_password"></input></p>
			<p class="btn"><input type="submit" value="提　交"></input>&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="重　填"></input></p>
		</form>
	</div>
</body>
</html>
<?php 
	}else{
		echo"查询信息错误！";
	}
?>	
	