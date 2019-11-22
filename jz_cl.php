<?php
header("content-type:text/html;charset=utf-8");
include_once 'admin/db_connect.php';
include_once 'public_function.php';
date_default_timezone_set("PRC");//prc代表中国时区
session_start();
$id=$_SESSION['id'];
$jz_name=mysql_escape_string($_POST['jz_name']);
$unit_name=mysql_escape_string($_POST['unit_name']); 
$unit_address=mysql_escape_string($_POST['unit_address']);
$jz_class=mysql_escape_string($_POST['jz_class']);
$jz_time=mysql_escape_string($_POST['jz_time']);
$jz_wages=mysql_escape_string($_POST['jz_wages']);
$unit_phone=mysql_escape_string($_POST['unit_phone']);
$jz_remarks=mysql_escape_string($_POST['jz_remarks']);
$act=$_GET['act'];
switch ($act){
	case 'insert_jz':
		$result=insert_jz($id,$jz_name,$unit_name,$unit_address,$jz_class,$jz_time,$jz_wages,$unit_phone,$jz_remarks,$link);
		if($result=="success"){
			echo"<script>alert('添加成功！');location.href='add_jz.php';</script>";
		}
		if($result=="error"){
			echo"<script>alert('添加失败！');location.href='add_jz.php';</script>";
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