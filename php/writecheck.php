<?php
session_start();
if (isset($_SESSION['loggedname']))
{
	header("refresh:0.5;url=../html/write.html");

}
else
{
	echo "<script>alert('您尚未登录，登录后可撰写留言！点击确定去往登录页面');
            window.location.href='../html/login.html'</script>";
}
?>