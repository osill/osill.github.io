<style type="text/css">
<!--
body {
	background-image: url(../image/background%20image.jpg);
}
.ys1 {
	font-family: "Microsoft YaHei UI Light";
	font-size: 36px;
	color: #66ccff;
}
-->
</style><?php
	if(!isset($_POST['username']) || !isset($_POST['password'])){
		echo ' 
			<form action = "briefPan.php" method = "post">
				<p>username: <input type = "text" name = "username" /></p>
				<p>password: <input type = "password" name = "password" /></p>
				<input type = "submit" value = "Submit" />
			</form>';
	} elseif ($_POST['username'] != "admin" || $_POST['password'] != "admin") {
		echo ' 
			<form action = "briefPan.php" method = "post">
				<p>username: <input type = "text" name = "username" /></p>
				<p>password: <input type = "password" name = "password" /></p>
				<input type = "submit" value = "Submit" />
			</form>';
	}
?>
<title>Osill云盘——登录</title><p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>
<p>
<p>
<p>
<table width="1172" border="0" align="center">
  <tr>
    <td align="center" valign="middle" class="ys1"><span class="ys1">Osill Network Technology©2018 版权所有</span></td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="ys1"><script> 
function getDateDemo(){ 
/* 
//声明时间 
var date = new Date(); 
alert(date);//当前时间 
alert(date.toLocaleString());//转化为本地时间 
alert(date.getFullYear());//显示年份 
alert(date.getMonth() + 1);//显示月份 0-11，需要加1 
alert(date.getDate());//显示一月中的日期 
alert(date.getDay());//显示一周的日期，星期几 
alert(date.getHours());//获取小时时间 
alert(date.getMinutes());//获取当前分钟 
alert(date.getSeconds());//获取当前秒数 
alert(date.getMilliseconds());//获取当前的毫秒数 
alert(date.getTime());//获取从1970年1月1日午夜零时，到当前时间的毫秒值 
*/ 
//分别获取年、月、日、时、分、秒 
var myDate = new Date(); 
var year = myDate.getFullYear(); 
var month = myDate.getMonth() + 1; 
var date = myDate.getDate(); 
var hours = myDate.getHours(); 
var minutes = myDate.getMinutes(); 
var seconds = myDate.getSeconds(); 
  
//月份的显示为两位数字如09月 
if(month < 10 ){ 
month = "0" + month; 
} 
if(date < 10 ){ 
date = "0" + date; 
} 
  
//时间拼接 
var dateTime = year + "年" + month + "月" + date + "日" + hours + "时" + minutes + "分" + seconds + "秒"; 
  
//document.write(dateTime);//打印当前时间 
  
var divNode = document.getElementById("time"); 
divNode.innerHTML = dateTime; 
  
} 
window.setInterval("getDateDemo()",1000);//每隔1秒，调用一次getDateDemo() 
</script> 
<style type="text/css">
<!--
#time {
	font-family: "Microsoft YaHei UI";
	font-size: 128px;
	font-style: normal;
	line-height: normal;
	text-decoration: underline;
	background-color:;
	margin: auto;
}
#time {
	margin-top: 0px;
	margin-right: auto;
	margin-bottom: 0px;
	margin-left: auto;
}
#time {
	font-family: "Microsoft YaHei UI";
	font-size: 18px;
	color: #66C;
	margin-right: auto;
	margin-left: auto;
	clip: rect(auto,auto,auto,auto);
}
#time {
	font-family: "Microsoft YaHei UI";
	font-size: 24px;
	font-style: normal;
	color: #66C;
}
#time {
	font-family: "Microsoft YaHei UI";
	font-size: 16px;
}
body {
	background-image: url(../image/background%20image.jpg);
	background-repeat: repeat-y;
}
.bannerb {
	font-family: "Microsoft YaHei UI";
	font-size: 36px;
	color: #66ccff;
	text-decoration: none;
}
.bannerc {
	font-family: "Microsoft YaHei UI";
	font-size: 36px;
	color: #66cc00;
	text-decoration: none;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style>
<meta http-equiv="Page-Enter" content="Revealtrans(Duration=2,Transition=3);Durationg=5" />
 

</p><div id="time"></div> 
<style type="text/css" spry:hover="ys24">&nbsp;</p>
<p class="ys20">&nbsp;</p>
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
//-->
</script>
</body>
</html>
</style>&nbsp;</td>
  </tr>
</table>&nbsp;</p>
