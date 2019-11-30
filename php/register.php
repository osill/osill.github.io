<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<style>
body{ background-color:#222930 ;}	
</style>
</head>
<body>
</body>
</html>
<?php
error_reporting(0);
session_start();
$ip = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
$ip = ($ip) ? $ip : $_SERVER["REMOTE_ADDR"];
logResult($ip);
function logResult($word='') 
{
    $fp = fopen("../db/register_ip.txt","a");
    flock($fp, LOCK_EX) ;
    fwrite($fp,"记录时间：".strftime("%Y%m%d%H%M%S",time()).",IP:".$word."\n");
    flock($fp, LOCK_UN);
    fclose($fp);
}
$name=trim($_POST["name"]);
$password=trim($_POST["password"]);
$repassword=trim($_POST["repassword"]);
$captcha=trim($_POST["captcha"]);
$mail=trim($_POST["mail"]);
$reg_info='../db/register.txt';
if($name=='')
{
	echo "<script>alert('用户名不能为空格，请重新输入！');window.history.back(-1);</script>";
	exit();
}
else if($password=='')
{
	echo "<script>alert('密码不能为空格，请重新输入！');window.history.back(-1);</script>";
	exit();
}
else if($repassword!=$password)
{
	echo "<script>alert('两次密码输入不一致，请重新输入！');window.history.back(-1);</script>";
	exit();
}
else if($captcha!=$_SESSION['ver_code'])
{
	echo "<script>alert('验证码输入错误，请重新输入！');window.history.back(-1);</script>";
	exit();
}
$fp4=fopen($reg_info,"a+");
$flag=true;
while(!feof($fp4))
{
	$reguser_temp=trim(fgets($fp4));
	if($reguser_temp == $name)
    {
		$flag=false; 
		echo "<script>
	var  r=confirm('用户名已注册!点击确认前往登录页面，点击取消返回注册页面！');
	if (r==true)
	{
		window.location.href='../html/login.html';
	}
	else
	{
		window.history.back(-1);
	}
</script>";
		fclose($fp4);
        exit();
	}   
}
if ($fp1=fopen($reg_info,'a'))
{
	fputs($fp1,""."$name|");
	fclose($fp1);
	if ($fp2=fopen($reg_info, 'a'))
	{
		fputs($fp2,""."$password|");
		fclose($fp2);
		if ($fp3=fopen($reg_info, 'a'))
		{
			fputs($fp3, ""."$mail\n");
			fclose($fp3);
			echo "<script>alert('注册成功！点击确认后前往登录页面');</script>";
			header("refresh=0.5;url=../html/login.html");
			fclose($fp4);
			exit();
		}
		else
		{
			echo "<script>alert('注册发生错误，请点击确认返回至注册页面！');window.history.back(-1);</script>";
			exit();
			fclose($fp4);
		}
	}		
}
?>