<?php
header('Content-Type:image/jpeg;');
$width=60;
$height=25;
$img=imageCreateTrueColor($width,$height);
$white = imageColorAllocate($img,0xff,0xff,0xff);
imageFill($img,0,0,$white);
$chars = '1234567890';
$chars_len=strlen($chars);
$code_len=5;
$code='';
for($i=1;$i<=$code_len;++$i)
{
    $rand=mt_rand(0,$chars_len-1);
    $code.=$rand;
}
session_start();
$_SESSION['ver_code']=$code;
$str_color=imageColorAllocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
$font=15;
$img_w=imageSX($img);
$img_h=imageSY($img);
$font_w=imagefontwidth($font);
$font_h=imagefontheight($font);
$code_w=$font_w*$code_len;
$code_h=$font_h;
$x=($img_w-$code_w)/2;
$y=($img_h-$code_h)/2;
for($i=0; $i<8; ++$i)
{
	$lineColor = imagecolorallocate($img, rand(0,255), rand(0,255), rand(0,255));
	$fontColor = imagecolorallocate($img, rand(0,255), rand(0,255), rand(0,255));
	imageline($img, rand(0, $width), 0, rand(0, $width), $height, $lineColor);
}
for($i=0; $i<200; ++$i)
{
	imagesetpixel($img, rand(0, $width), rand(0, $height), $fontColor);
}
imageString($img,$font,$x,$y,$code,$str_color);
imageJPEG($img);
imageDestroy($img);
?>