<?php

function  modify_count($link,$id,$news_count){
	$sql="update news_table set news_count=? where id=?";
	$stmt=mysqli_stmt_init($link);
	mysqli_stmt_prepare($stmt,$sql);
	mysqli_stmt_bind_param($stmt, 'ss',$news_count,$id);
	mysqli_stmt_execute($stmt);	
	if(mysqli_affected_rows($link)>0){
		return true;
	}else{
		return false;
	}
}
function f_page($link,$news_lb,$table_name,$page_name){
	$page=isset($_GET['page'])?intval($_GET['page']):1;//当前页的变量
	$pagesize=9;//每一页显示的记录条数
	$zong_page=ceil(zong_record($link,$news_lb,$table_name)/$pagesize);//求总的页数
	$page=$page>$zong_page?$zong_page:$page;//如果当前页比最大页号还大，不符合逻辑，需要把当前页设置成最大页所在的页号
	$page=$page<1?1:$page;//判断当前页是否小于1
	$lim=($page-1)*$pagesize;//求limit 参数的起始位置
	$page_html="共".zong_record($link,$news_lb,$table_name)."条  $page/$zong_page &nbsp;";
	$page_html.="<a href='$page_name?news_lb=$news_lb&page=1'>首页</a>";
	$page_html.="<a href='$page_name?news_lb=$news_lb&page=".(($page-1)>0?($page-1):1)."'>上一页</a>";
	$page_html.="<a href='$page_name?news_lb=$news_lb&page=".(($page+1)<$zong_page?($page+1):$zong_page)."'>下一页</a>";
	$page_html.="<a href='$page_name?news_lb=$news_lb&page=$zong_page'>尾页</a>";	
	return  $page_array=array($pagesize,$lim,$page_html);	
}
function zong_record($link,$news_lb,$table_name){
	if(!empty($news_lb)){
		$sql="select count(id) from $table_name where news_lb='{$news_lb}'";
	}else{
		$sql="select count(id) from $table_name";
	}	
	$stmt=mysqli_stmt_init($link);
	mysqli_stmt_prepare($stmt,$sql);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_bind_result($stmt,$count_record);
	mysqli_stmt_store_result($stmt);
	if(mysqli_stmt_num_rows($stmt)>0){
		mysqli_stmt_fetch($stmt);
		return $count_record;
	}else{
		return false;
	}
}
function add_news($link,$news_array){
	$sql="insert into news_table(news_title,news_content,news_date,news_count,news_source,news_author,news_lb,news_txy,news_jz,news_sy,news_sh) values(?,?,?,?,?,?,?,?,?,?,?)";
	$stmt=mysqli_stmt_init($link);
	mysqli_stmt_prepare($stmt,$sql);
	mysqli_stmt_bind_param($stmt,'sssssssssss',$news_array[0],$news_array[8],$news_array[9],$news_array[10],$news_array[6],$news_array[1],$news_array[7],$news_array[2],$news_array[3],$news_array[4],$news_array[5]);
	mysqli_stmt_execute($stmt);
	if(mysqli_affected_rows($link)>0){
		$result="success";
	}else{
		$result="error";
	}
	return $result;
}
function mode_news($link,$news_array,$id){
	$sql="update news_table set news_title=?,news_content=?,news_date=?,news_count=?,news_source=?,news_author=?,news_txy=?,news_jz=?,news_sy=?,news_sh=? where id=?";
	$stmt=mysqli_stmt_init($link);
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt,'ssssssssssss',$news_array[0],$news_array[8],$news_array[9],$news_array[10],$news_array[6],$news_array[1],$news_array[2],$news_array[3],$news_array[4],$news_array[5],$id);
	mysqli_stmt_execute($stmt);
	if(mysqli_stmt_affected_rows($stmt)>0){
		$result="<script>alert('修改成功！');location.href='news_list.php';</script>";
	}else{
		$result="<script>alert('修改失败！');location.href='news_list.php';</script>";
	}
	return $result;
}
function del_news($link,$id){
	$sql="delete from news_table where id=?";
	$stmt=mysqli_stmt_init($link);
	mysqli_stmt_prepare($stmt,$sql);
	mysqli_stmt_bind_param($stmt,'s',$id);
	mysqli_stmt_execute($stmt);
	if(mysqli_stmt_affected_rows($stmt)>0){
		 $result="success";
	}else{
		$result='error';
	}
	return $result;
}
function login_yz($val1,$val2,$link){
	$sql="select id,username,password from user_table where username=? and password=?";
	$stmt=mysqli_stmt_init($link);//建立预处理对象
	mysqli_stmt_prepare($stmt,$sql);//将SQL语句赋给预处理对象
	mysqli_stmt_bind_param($stmt, 'ss',$val1,$val2);//接收到传递的变量赋给SQL语句中的？
	mysqli_stmt_execute($stmt);//执行查询SQL语句
	mysqli_stmt_store_result($stmt);//存储查询结果
	mysqli_stmt_bind_result($stmt,$id,$username,$password);//将查询的sql语句中查询结果绑定到变量上，变量的个数和查询语句的select后面跟的字段数有关
	mysqli_stmt_fetch($stmt);//取出数据库中结果集中记录	
	return array($stmt,$id,$username,$password);
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