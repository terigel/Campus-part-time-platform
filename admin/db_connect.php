<?php
$link=@mysqli_connect('localhost', 'root', '12345678', 'wlzx') or false;
if($link===false){
	die("数据连接失败，".mysqli_error($link));
}else{
	mysqli_query($link,'set names utf8');
}