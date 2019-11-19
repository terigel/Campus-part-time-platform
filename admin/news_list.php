<?php
include_once 'db_connect.php';
include_once 'public_function.php';
@$news_lb1=$_GET['news_lb'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>内蒙古农业大学网站后台管理系统</title>
<link href="../css/index.css" type="text/css" rel="stylesheet">
</head>
<body>
	<h4>新闻信息列表</h4>
	<div id="news_list">
		<table border="1" cellpadding="0" cellspacing="0">
    	<tr>
        	<th class="userid">ID</th>
            <th>信息标题</th>
            <th>信息作者</th>
            <th>添加时间</th>
            <th>操作</th>
        </tr>
       <?php
       		$page_resulte=f_page($link,$news_lb1,'news_table','news_list.php');
       		$id="";$news_title="";$news_author="";$news_lb="";$news_date=""; 
       		$sql="select id,news_title,news_author,news_date from news_table order by id desc limit $page_resulte[1],$page_resulte[0]";
       		$stmt=mysqli_stmt_init($link);//建立stmt预处理对象
       		mysqli_stmt_prepare($stmt, $sql);//将SQL语句与ST       MT预处理对象绑定
       		mysqli_stmt_execute($stmt);//执行SQL
       		mysqli_stmt_bind_result($stmt,$id,$news_title,$news_author,$news_date);//将结果绑定到变量
       		mysqli_stmt_store_result($stmt);//存储查询结果 
       		if(mysqli_stmt_num_rows($stmt)>0){//mysqli_stmt_num_rows($stmt)查询使用判断条件  
				while(mysqli_stmt_fetch($stmt)){//从结果中取值
       ?>
        <tr>
        	<td class="userid"><?php echo $id?></td>
            <td><?php 
            	if(mb_strlen($news_title,"utf-8")>8){
            		 echo mb_substr($news_title,0,8,'utf-8')."...";
            	}else{
            		echo $news_title;
            	}
            ?></td>
            <td><?php echo $news_author?></td>
            <td><?php echo $news_date?></td>
            <td><a href="mode_news.php?id=<?php echo $id?>" class="mode">修改</a>&nbsp;&nbsp;<a href="news_cl.php?act=del&id=<?php echo $id?>" class="delete">删除</a></td>
        </tr>
        <?php 
       			}
			}
        ?>
    </table>
	<div class="f-page" style="margin-left: 300px;margin-top: 40px;">
           	 <?php echo $page_resulte[2];//显示分页?>
         	</div>
	</div>
</body>
</html>		