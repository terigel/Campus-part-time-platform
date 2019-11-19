<?php 
	include_once 'db_connect.php';
	$id=$_GET['id'];
	$sql="select * from news_table where id=?";
	$stmt=mysqli_stmt_init($link);
	mysqli_stmt_prepare($stmt,$sql);
	mysqli_stmt_bind_param($stmt,'s',$id);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_bind_result($stmt,$id,$news_title,$news_content,$news_date,$news_count,$news_source,$news_author,$news_lb,$news_txy,$news_jz,$news_sy,$news_sh);
	mysqli_stmt_store_result($stmt);
	mysqli_stmt_fetch($stmt);
	if(mysqli_stmt_num_rows($stmt)>0){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>内蒙古农业大学网站后台管理系统</title>
<link href="../css/news.css" type="text/css" rel="stylesheet"></link>
<script type="text/javascript" src="../js/user_check.js"></script>
<script type="text/javascript" charset="utf-8" src="../lib/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="../lib/ueditor.all.min.js"> </script>
</head>
<body>
	<h3>添加网站后台信息</h3>
	<div id="news">
		<form action="news_cl.php?act=mode&id=<?php echo $id?>" method="post" onsubmit="return newsadd_check()">
			<p><label>信息标题：</label><input type="text" name="news_title" id="news_title" value="<?php echo $news_title?>"></input><span id="news_title_info"></span></p>
			<p><label>信息作者：</label><input type="text" name="news_author" id="news_author" value="<?php echo $news_author ?>"></input><span id="news_author_info"></span></p>
			<p><label>　通讯员：</label><input type="text" name="news_txy" id="news_txy" value="<?php echo $news_txy ?>"></input></p>
			<p><label>通讯记者：</label><input type="text" name="news_jz" id="news_jz" value="<?php echo $news_jz ?>"></input></p>
			<p><label>通讯摄影：</label><input type="text" name="news_sy" id="news_sy" value="<?php echo $news_sy ?>"></input></p>
			<p><label>信息审核：</label><input type="text" name="news_sh" id="news_sh" value="<?php echo $news_sh ?>"></input></p>
			<p><label>信息来源：</label><input type="text" name="news_source" id="news_source" value="<?php echo $news_source ?>"></input></p>
			<p><label>信息类别：</label><select name="news_lb"><option  value="zhxw" <?php if($news_lb=="zhxw") echo "selected"?>>综合新闻</option><option value="tzgg" <?php if($news_lb=="tzgg") echo "selected"?>>通知公告</option><option value="mtnd" <?php if($news_lb=="mtnd") echo "selected"?>>媒体农大</option><option value="xwdt" <?php if($news_lb=="xwdt") echo "selected"?>>新闻动态</option><option value="rdwt" <?php if($news_lb=="rdwt") echo "selected"?>>热点问题</option></select></p>
			<p><label style="vertical-align:top;">信息内容：</label>
			<script id="editor" type="text/plain" style="width:700px;height:500px;"name="news_content"><?php echo stripcslashes($news_content)?></script>
			<input type="hidden" name="news_content"/>
			<span id="news_content_info"></span>
			</p>
			<p class="btn"><input type="submit" value="提　交"></input>&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="重　填"></input></p>
		</form>
	</div>
<script type="text/javascript">
	 var ue=UE.getEditor('editor');
</script>
</body>
</html>
<?php 
	}else{
		echo"<script>alert('修改失败！');location.href='news_list.php';</script>";
	}
?>
