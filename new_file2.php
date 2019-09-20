<?php
header("content-type:image.jpeg;charset=utf-8");
$open=imagecreatefromjpeg('images/shi.jpg');

//获取原来的长宽
$open_img_x=imagesx($open);
$open_img_y=imagesy($open);
$width=500;
$height=$width/($open_img_x/$open_img_y);
//$y=2;
//$width=$open_img_x*$y;
//$height=$open_img_y*$y;

//创建目标图片
$cj_img=imagecreatetruecolor($width, $height);

imagecopyresampled($cj_img, $open, 0, 0, 0, 0, $width, $height, $open_img_x, $open_img_y);
//输出图片
//imagejpeg($open_img);

imagejpeg($cj_img);
imagejpeg($cj_img,"images/de5.jpeg");


//释放内存
//imagedestroy($open_img);
//image2wbmp($cj_img);
?>