<?php
$img_w=70;//图片宽度
$img_h=22;//图片高度
$char_len=5;//验证码位数
$font=5;//字体大小
//产生5个随机字符
$char=array_merge(range('A', 'Z'),range('a', 'z'),range(1,9));//range函数是按一定区间产生数组，arrary_merge合并多个数组为一个数组
$rand_keys=array_rand($char,$char_len);//在数组中随机抽取5个元素的下标，返回值仍然是数组，这个时候会吧char数组中下标作为一个新数组的值
shuffle($rand_keys);//打乱数组的次序
$code="";//定义一个变量，赋值空字符,作用就是存储产生的5个随机字符
foreach ($rand_keys as $key){//foreach会循环取出数组的值并且赋值给as后面的变量
	$code.=$char[$key];
}
@session_start();
$_SESSION['captcha_code']=strtolower($code);//将产生的随机字符保存到session中,将产生的验证码转换成小写字母
//创建画布即是新的图片的大小
$img=imagecreatetruecolor($img_w, $img_h);//创建一个画布,实际是产生了一个资源类型的资源号（资源文件）
$bg_color=imagecolorallocate($img,0xcc, 0xcc, 0xcc);//给画布分配一个背景色
imagefill($img, 0, 0, $bg_color);//把背景色填充到画布上
//产生背景点
for($i=0;$i<300;++$i){
	$color=imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
	imagesetpixel($img, mt_rand(0, $img_w), mt_rand(0, $img_h), $color);//画点
}
//画矩形边框
$rect_color=imagecolorallocate($img, 0xff, 0xff, 0xff);
imagerectangle($img, 0, 0, $img_w-1, $img_h-1, $rect_color);
//把产生的5个字符输出到画布
$str_color=imagecolorallocate($img, mt_rand(0, 100), mt_rand(0, 100), mt_rand(0, 100));//分配颜色，mt_rand产生随机数
$font_w=imagefontwidth($font);//取得字体的宽度
$font_h=imagefontheight($font);//取得字体的高度
$str_w=$font_w * $char_len;//5个字符的总的宽度
imagestring($img, $font, ($img_w-$str_w)/2, ($img_h-$font_h)/2, $code, $str_color);
//输出图片
header('content-type:image/png');
imagepng($img);