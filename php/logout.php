<?php
session_start();
if (isset($_SESSION['loggedname']))
{
	echo "<script>alert('注销成功！点击确认后前往首页');</script>";
	unset($_SESSION['loggedname']);
	unset($_SESSION['visitor']);
	header("refresh:0.5;url='../html/index.html'");
}

else
{
	echo "<script>
	var  r=confirm('您尚未登录!点击确认前往登录页面，点击取消返回留言板页面！');
	if (r==true)
	{
		window.location.href='../html/login.html';
	}
	else
	{
		window.history.back(-1);
	}
</script>";
}
?>