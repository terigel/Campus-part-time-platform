<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>内蒙古农业大学网站后台管理系统</title>
<link href="../css/news.css" type="text/css" rel="stylesheet"></link>
<script type="text/javascript" charset="utf-8" src="../lib/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="../lib/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="../lib/ueditor.parse.min.js"> </script>
</head>
<body>
	<h3>添加网站后台信息</h3>
	<div id="news">
		<form action="news_cl.php?act=add" method="post" onsubmit="return newsadd_check()">
			<p><label>信息标题：</label><input type="text" name="news_title" id="news_title"></input><span id="news_title_info"></span></p>
			<p><label>信息作者：</label><input type="text" name="news_author" id="news_author"></input><span id="news_author_info"></span></p>
			<p><label>　通讯员：</label><input type="text" name="news_txy" id="news_txy"></input></p>
			<p><label>通讯记者：</label><input type="text" name="news_jz" id="news_jz"></input></p>
			<p><label>通讯摄影：</label><input type="text" name="news_sy" id="news_sy"></input></p>
			<p><label>信息审核：</label><input type="text" name="news_sh" id="news_sh"></input></p>
			<p><label>信息来源：</label><input type="text" name="news_source" id="news_source"></input></p>
			<p><label style="vertical-align:top;">信息内容：</label>
			<script id="editor" type="text/plain" style="width:700px;height:500px;"name="news_content"></script>
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
