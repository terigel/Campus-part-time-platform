<?php
header("content-type:text/html;charset=utf-8");
include_once 'admin/db_connect.php';
include_once 'public_function.php';

//empty:判断变量是否为空值
//isset:判断变量是否存在
//自动登录--先判断是否选择自动登录--先正确登录一次--在登录处理页面中保存正确的用户名和密码---本地cookie，二次登录：判断是否选择自动登录--
//从cookie取数据--查询数据库是否正确的用户名和密码
if(!empty($_POST)){//判断是否提交了一个空的表单内容
	$user_name=isset($_POST['user_name'])?$_POST['user_name']:"";
	$user_psw=isset($_POST['user_psw'])?$_POST['user_psw']:"";
	$user_type=isset($_POST['user_type'])?$_POST['user_type']:"";
	$user_psw=md5($user_psw);
	$user_name=$user_name;//mysql_escape_string是为了加强系统安全防SQL注入
	$user_psw=mysql_escape_string($user_psw);
	$bl_array=login_yz($user_name,$user_psw,$user_type,$link);//通过数组查询将查询结果以数组的形式返回多个值。
	list($stmt,$id,$username,$password,$type)=$bl_array;//通过list函数将数组的值赋值给多个变量
	if(mysqli_stmt_num_rows($stmt)>0){//查询的。增，删，改用mysqli_stmt_affected_rows()			
		session_start();//启用session		
		$_SESSION['user_name']=$username;//保存的就是数据库中查询结果中的记录的用户字段的值	
		$_SESSION['id']=$id;//为了修改用户头像使用
		$_SESSION['type']=$type;//为了修改用户头像使用
		echo"<script>alert('登陆成功！');location.href='index.php';</script>";	
	}else{
		//header("Location:login_html.php");页面跳转。一定注意，使用header函数之前不能信息输出语句。
		echo"<script>alert('密码或用户名错误，请重新输入！');location.href='login.php';</script>";		
	}
}