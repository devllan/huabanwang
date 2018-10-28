<?php
session_start();
header("content-type:image/jpeg");
//创建空白画板
$image = imagecreate(120, 30);
//创建颜色
$white = imagecolorallocate($image, 200, 200, 200);
$code="";
//随机生成4个数字，并写到画板上
for ($i = 0; $i < 4; $i++) {
    //每次循环生成0-9之间的一个数字，而且应该是随机的
    $numb = rand(0, 9);
    $code=$code.$numb;
    //创建颜色，用于字体
    $color = imagecolorallocate($image, rand(0,255), rand(0,255), rand(0,255));
    imagettftext($image, 15, 0, $i*20+2, 15, $color, "LCALLIG.TTF", $numb);
}
$_SESSION["code"]=$code;
imagejpeg($image);
