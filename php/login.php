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
session_start();
$name=trim($_POST["name"]);
$password=trim($_POST["password"]);
$captcha=trim($_POST["captcha"]);
if($captcha!=$_SESSION['ver_code'])
{
	echo "<script>alert('验证码输入错误，请重新输入！');window.history.back(-1);</script>";
	exit();
}
if($name=='' || $password=='')
{
	echo"<script>alert('用户名或密码不可以为空，请确认返回到登录页面！');history.go(-1);</script>";
	exit();
}
else
{
	$logdb='../db/register.txt';
    $logcheck=fopen($logdb,"r");
    while(!feof($logcheck))
    {
    	$check_name=trim(fgets($logcheck));
		$data=explode("|",$check_name);
        if($data[0]==$name & $data[1]==$password)
        {
			echo "<script>alert('登录成功，确认后跳转至留言板页面！');</script>";
			header("refresh:0.5;url=../html/board.php");
			$_SESSION['loggedname']=$name;
			fclose($logcheck);
			exit();
		}
		if($data[0]!==$name)
		{
			echo "<script>
	var  r=confirm('用户名未注册!点击确认前往注册页面，点击取消返回登录页面！');
	if (r==true)
	{
		window.location.href='../html/login.html';
	}
	else
	{
		window.history.back(-1);
	}
</script>";
			fclose($logcheck);
            exit();
		}
		if($data[0]==$name & $data[1]!==$password)
		{
			echo "<script>alert('密码输入错误，点击回到登录页面！');window.history.back(-1);</script>";
			fclose($logcheck);
		}
	}
}
?>