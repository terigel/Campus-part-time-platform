<?php
include_once 'db_connect.php';
include_once 'public_function.php';
//添加、修改、删除、查找
$act=$_GET['action'];
switch($act){
	case "add":
		$user_name=mysql_escape_string($_POST['user_name']);
		$user_email=mysql_escape_string($_POST['user_email']);
		$user_psw=md5(mysql_escape_string($_POST['password']));
		$type=mysql_escape_string($_POST['type']);
		$salt=md5(uniqid(microtime()));
		$stmt=add_user($link,$user_name,$user_psw,$user_email,$salt,$type);
		if(mysqli_stmt_affected_rows($stmt)>0){
			echo"<script>alert('用户信息添加成功！');location.href='user_list.php';</script>";
		}
		
		break;
	case "del":
		//删除
		$id=$_GET['id'];
		$sql="delete from user_table where id=?";
		$stmt=mysqli_stmt_init($link);
		mysqli_stmt_prepare($stmt,$sql);
		mysqli_stmt_bind_param($stmt,'s',$id);
		mysqli_stmt_execute($stmt);
		if(mysqli_stmt_affected_rows($stmt)>0){
			echo"<script>alert('用户信息删除成功！');location.href='user_list.php';</script>";
		}else{
			echo"<script>alert('用户信息删除失败！');location.href='user_list.php';</script>";
		}
		break;
	case "passU":
		$id=$_GET['id'];
		$sql="update user_table set type=1 where id=?";
		$stmt=mysqli_stmt_init($link);
		mysqli_stmt_prepare($stmt,$sql);
		mysqli_stmt_bind_param($stmt,'s',$id);
		mysqli_stmt_execute($stmt);
		if(mysqli_stmt_affected_rows($stmt)>0){
			echo"<script>alert('更改为公司对象成功！');location.href='user_pass.php';</script>";
		}else{
			echo"<script>alert('更改为公司对象失败！');location.href='user_pass.php';</script>";
		}
		break;
	case "passD":
		$id=$_GET['id'];
		$sql="update user_table set type=0 where id=?";
		$stmt=mysqli_stmt_init($link);
		mysqli_stmt_prepare($stmt,$sql);
		mysqli_stmt_bind_param($stmt,'s',$id);
		mysqli_stmt_execute($stmt);
		if(mysqli_stmt_affected_rows($stmt)>0){
			echo"<script>alert('更改为个人对象成功！');location.href='user_pass.php';</script>";
		}else{
			echo"<script>alert('更改为个人对象失败！');location.href='user_pass.php';</script>";
		}
		break;
	case "mode":
		//修改
		$id=$_GET['id'];
		$user_name=mysql_escape_string($_POST['user_name']);
		$user_email=mysql_escape_string($_POST['user_email']);
		$user_psw=md5(mysql_escape_string($_POST['password']));
		$sql="update user_table set username=?,email=?,password=? where id=?";
		$stmt=mysqli_stmt_init($link);
		mysqli_stmt_prepare($stmt, $sql);
		mysqli_stmt_bind_param($stmt, 'ssss',$user_name,$user_email,$user_psw,$id);
		mysqli_stmt_execute($stmt);
		if(mysqli_affected_rows($link)>0){
			echo"<script>alert('用户信息修改成功！');location.href='user_list.php';</script>";		
		}else{
			echo"<script>alert('用户信息修改失败！');location.href='user_list.php';</script>";
		}		
		break;
}

