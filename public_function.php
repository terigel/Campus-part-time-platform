<?php

function login_yz($val1,$val2,$val3,$link){
	$sql="select id,username,password,type from user_table where username=? and password=? and type=?";
	$stmt=mysqli_stmt_init($link);//建立预处理对象
	mysqli_stmt_prepare($stmt,$sql);//将SQL语句赋给预处理对象
	mysqli_stmt_bind_param($stmt, 'sss',$val1,$val2,$val3);//接收到传递的变量赋给SQL语句中的？
	mysqli_stmt_execute($stmt);//执行查询SQL语句
	mysqli_stmt_store_result($stmt);//存储查询结果
	mysqli_stmt_bind_result($stmt,$id,$username,$password,$type);//将查询的sql语句中查询结果绑定到变量上，变量的个数和查询语句的select后面跟的字段数有关
	mysqli_stmt_fetch($stmt);//取出数据库中结果集中记录	
	return array($stmt,$id,$username,$password,$type);
}
function login_yz_zd($val1,$link){
	$sql="select username,password from user_table where username=?";
	$stmt=mysqli_stmt_init($link);//建立预处理对象
	mysqli_stmt_prepare($stmt,$sql);//将SQL语句赋给预处理对象
	mysqli_stmt_bind_param($stmt, 's',$val1);//接收到的用户名赋给SQL语句中的？
	mysqli_stmt_execute($stmt);//执行查询SQL语句
	mysqli_stmt_store_result($stmt);//存储查询结果
	mysqli_stmt_bind_result($stmt,$username,$password);//将查询的sql语句中查询结果绑定到变量上，变量的个数和查询语句的select后面跟的字段数有关
	mysqli_stmt_fetch($stmt);
	return $password;
}
function add_user($link,$user_name,$user_psw,$user_email,$salt,$pass){
	$sql="insert into user_table(username,password,email,salt,pass) values(?,?,?,?,?)";
	$stmt=mysqli_stmt_init($link);
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, 'sssss',$user_name,$user_psw,$user_email,$salt,$pass);
	mysqli_stmt_execute($stmt);
	return $stmt;
}
function login_user_img($val1,$link){//首页获取用户头像
	$sql="select user_img from user_table where id=?";
	$stmt=mysqli_stmt_init($link);//建立预处理对象
	mysqli_stmt_prepare($stmt,$sql);//将SQL语句赋给预处理对象
	mysqli_stmt_bind_param($stmt, 's',$val1);//接收到的用户名赋给SQL语句中的？
	mysqli_stmt_execute($stmt);//执行查询SQL语句
	mysqli_stmt_store_result($stmt);//存储查询结果
	mysqli_stmt_bind_result($stmt,$user_img);//将查询的sql语句中查询结果绑定到变量上，变量的个数和查询语句的select后面跟的字段数有关
	mysqli_stmt_fetch($stmt);
	return $user_img;
}
function insert_jz($id,$jz_name,$unit_name,$unit_address,$jz_class,$jz_time,$jz_wages,$unit_phone,$jz_remarks,$link){
	$sql="insert into jz_table(id,jz_name,unit_name,unit_address,jz_class,jz_time,jz_wages,unit_phone,jz_remarks) values(?,?,?,?,?,?,?,?,?)";
	echo $id;
	$stmt=mysqli_stmt_init($link);
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, 'sssssssss',$id,$jz_name,$unit_name,$unit_address,$jz_class,$jz_time,$jz_wages,$unit_phone,$jz_remarks);
	mysqli_stmt_execute($stmt);
	if(mysqli_affected_rows($link)>0){
		$result="success";
	}else{
		$result="error";
	}
	return $result;
}