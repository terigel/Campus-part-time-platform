<?php
include_once 'db_connect.php';
include_once 'public_function.php';
date_default_timezone_set("PRC");//prc代表中国时区
$news_title=mysql_escape_string($_POST['news_title']);
$news_author=mysql_escape_string($_POST['news_author']);
$news_txy=mysql_escape_string($_POST['news_txy']); 
$news_jz=mysql_escape_string($_POST['news_jz']);
$news_sy=mysql_escape_string($_POST['news_sy']);
$news_sh=mysql_escape_string($_POST['news_sh']);
$news_source=mysql_escape_string($_POST['news_source']);
$news_lb=mysql_escape_string($_POST['news_lb']);
//$news_content=mysql_escape_string($_POST['news_content']);//mysql_escape_string会网页内容字符进行转义
$news_content=$_POST['news_content'];
$news_date=date('Y-m-d H:i:s',time());
$news_count=0;
$res=$news_title.','.$news_author.','.$news_txy.','.$news_jz.','.$news_sy.','.$news_sh.','.$news_source.','.$news_lb.','.$news_content.','.$news_date.','.$news_count;
$news_array=explode(',',$res);
$id=$_GET['id'];
$act=$_GET['act'];
switch ($act){
	case 'add':
		$result=add_news($link,$news_array);
		if($result=="success"){
			echo"<script>alert('添加成功！');location.href='news_list.php';</script>";
		}
		if($result=="error"){
			echo"<script>alert('添加失败！');location.href='add_news.php';</script>";
		}
		break;
	case 'mode':
		$result=mode_news($link,$news_array,$id);
		echo $result;
		break;
	case 'del':
		$result=del_news($link,$id);
		if($result=="success"){
			echo"<script>alert('删除成功！');location.href='news_list.php';</script>";
		}
		if($result=="error"){
			echo"<script>alert('删除失败！');location.href='news_list.php';</script>";
		}
		break;
}