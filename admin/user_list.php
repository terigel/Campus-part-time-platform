<?php
include_once 'db_connect.php';
include_once 'public_function.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>内蒙古农业大学网站后台管理系统</title>
<link href="../css/index.css" type="text/css" rel="stylesheet">
</head>
<body>
	<h4>用户信息列表</h4>
	<div id="user_list">
		<table border="1" cellpadding="0" cellspacing="0">
    	<tr>
        	<th class="userid">ID</th>
            <th>用户名</th>
            <th>Email</th>
            <th>相关操作</th>
        </tr>
       <?php 
       		$user_resulte=f_page($link,'','user_table','user_list.php');
       		
       		$sql="select id,username,email from user_table limit $user_resulte[1],$user_resulte[0]";
       		$stmt=mysqli_stmt_init($link);//建立stmt预处理对象
       		mysqli_stmt_prepare($stmt, $sql);//将SQL语句与ST       MT预处理对象绑定
       		mysqli_stmt_execute($stmt);//执行SQL
       		mysqli_stmt_bind_result($stmt,$id,$username,$email);//将结果绑定到变量
       		mysqli_stmt_store_result($stmt);//存储查询结果 
       		if(mysqli_stmt_num_rows($stmt)>0){//mysqli_stmt_num_rows($stmt)查询使用判断条件  
				while(mysqli_stmt_fetch($stmt)){//从结果中取值
       ?>
        <tr>
        	<td class="userid"><?php echo $id?></td>
            <td><?php echo $username?></td>
            <td><?php echo $email?></td>
            <td><a href="mode_user.php?id=<?php echo $id?>" class="mode">修改</a>&nbsp;&nbsp;<a href="user_cl.php?action=del&id=<?php echo $id?>" class="delete">删除</a></td>
        </tr>
        <?php 
       			}
			}			
        ?>
    </table>
		<?php echo $user_resulte[2];?>
	</div>
</body>
</html>		