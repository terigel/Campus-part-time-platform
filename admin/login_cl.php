<?php
header("content-type:text/html;charset=utf-8");
include_once 'db_connect.php';
include_once 'public_function.php';
//empty:判断变量是否为空值
//isset:判断变量是否存在
//自动登录--先判断是否选择自动登录--先正确登录一次--在登录处理页面中保存正确的用户名和密码---本地cookie，二次登录：判断是否选择自动登录--
//从cookie取数据--查询数据库是否正确的用户名和密码
if(!empty($_POST)){//判断是否提交了一个空的表单内容
	if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){//自动登录
		$user_name=$_COOKIE['username'];//把cookie中存储的用户名赋值给下面要查询用的变量中
		$user_psw=$_COOKIE['password'];//把cookie中存储的密码赋值给变量
		$user_name=($user_name);//mysql_escape_string是为了加强系统安全防SQL注入
		$user_psw=mysql_escape_string($user_psw);
		$yzm=mysql_escape_string($_POST['user_yz']);//接受登陆输入的验证码
		$password=login_yz_zd($user_name,$link);//接收从数据库中查询到的密码
		$ua=isset($_SERVER['HTTP_USER_AGENT'])?$_SERVER['HTTP_USER_AGENT']:'';
		$password2=MD5($password.md5($ua.$password));
		if($user_psw==$password2){
			header('location:index.php');
		}else{
			echo"自动失败";
		}
	}else{//不是自动登录	
		$user_name=isset($_POST['user_name'])?$_POST['user_name']:"";
		$user_psw=isset($_POST['user_psw'])?$_POST['user_psw']:"";
		$user_psw=md5($user_psw);	
		$user_name=$user_name;//mysql_escape_string是为了加强系统安全防SQL注入
		$user_psw=mysql_escape_string($user_psw);
		$yzm=mysql_escape_string($_POST['user_yz']);//接受登陆输入的验证码
		$bl_array=login_yz($user_name,$user_psw,$link);//通过数组查询将查询结果以数组的形式返回多个值。
		list($stmt,$id,$username,$password)=$bl_array;//通过list函数将数组的值赋值给多个变量
		if(mysqli_stmt_num_rows($stmt)>0){//查询的。增，删，改用mysqli_stmt_affected_rows()			
			//如果选择自动登录框，则需要执行下面的保存cookie信息部分代码			
			if(isset($_POST['auto_login']) && $_POST['auto_login']=='on'){
				$ua=isset($_SERVER['HTTP_USER_AGENT'])?$_SERVER['HTTP_USER_AGENT']:'';//获取用户的浏览器信息
				$password_cookie=MD5($password.md5($ua.$password));//加密（数据库密码+加密（浏览器信息+数据库中的密码））
				$cookie_expire=time()+60*60*24*7;//保存用户信息到cookie中七天有效期
				setcookie('username',$username,$cookie_expire);//建立保存用户名的cookie变量并保存数据库中的用户名到变量中
				setcookie('password',$password_cookie,$cookie_expire);//建立保存密码的cookie变量并将多次加密的密码保存到变量中
			}
			session_start();//启用session
			//为了实现是否通过登录页面进入的系统，则需要设置session
			if(!($_SESSION['captcha_code']==strtolower($yzm))){//把所有的验证码都设置成效写字母
				echo "<script>alert('验证码输入错误！');location.href='login_html.php';</script>";
				return  false;
			}			
			$_SESSION['user_name']=$username;//保存的就是数据库中查询结果中的记录的用户字段的值	
			$_SESSION['id']=$id;//为了修改用户头像使用
			header('location:index.php');
		}else{
			//header("Location:login_html.php");页面跳转。一定注意，使用header函数之前不能信息输出语句。
			echo"<script>alert('密码或用户名错误，请重新输入！');location.href='login_html.php';</script>";		
		}
	}	
}