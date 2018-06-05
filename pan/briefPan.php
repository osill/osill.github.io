<?php
	if(!isset($_POST['username']) || !isset($_POST['password'])){
		exit();
	} elseif($_POST['username'] != "admin" || $_POST['password'] != "admin") {
		exit();
	}
	class briefPan{
		static private $instance;
		//static private $Sql;
		public function __construct(){
			//require 'sql\Sql.php';;
			//require 'account\User.php';
			//self::$Sql = new Sql();
		}
		
		static public function getInstance(){
			if(!self::$instance instanceof self)
				self::$instance = new self();
			return self::$instance;
		}
		
		public function getSql(){
			//return self::$Sql;
		}
	}
	
	briefPan::getInstance();
?>

<html><style type="text/css">
	.progress { position:relative; width:400px; border:1px solid #ddd; padding: 1px; border-radius: 3px; }
	.bar { background-color: #B4F5B4; width:0%; height:20px; border-radius:3px; }
	.percent { position:absolute; display:inline-block; top:3px; left:48%; }
<!--
body {
	background-image: url(image/background%20image.jpg);
}
.ys1 {
	font-family: "Microsoft YaHei UI Light";
	font-size: 36px;
	color: #66ccff;
}
.ys2 {
	font-family: "Microsoft YaHei UI Light";
	font-size: 18px;
	color: #66ccff;
}
.ys3 {
	font-family: "Microsoft YaHei UI Light";
	font-size: 24px;
	color: #66ccff;
}
-->
</style>
<script src="libraries/jquery.min.js"></script>
<title>Osill云盘</title><body>
<button onclick = "showUploadForm()">Upload File</button><br>
<form id="uploadForm" enctype = "multipart/form-data" style = "display:none">
	<p>Choose File:</p>
	<input type = "file" name = "userfile" />
	</br>
	<input type = "button" value = "Send File" onclick = "sendFile()"/>
	<div class="progress">
		<div class="bar"></div>
		<div class="percent">0%</div>
	</div>
	<div id="status"></div>
</form>
<p class="ys3"><span class="ys3"><span class="ys3">My Files:</span></span></p>
<p class="ys3">
  <?php
	$files = glob("./uploads/123/*.*");
	/*function removeId($name){
		return substr($name,4);
	}*/
	$files = array_map('basename',$files);
	//$files = array_map('removeId',$files);
	foreach($files as $file){
		echo $file;
		echo "
			<a href='downloadfile.php?user=" . '123&file=' . $file . "'>Download</a>
		";
		echo "<br>";
	}
?>
</p>
<p class="ys1">&nbsp;</p>
<p class="ys1">&nbsp; </p>
<table width="1172" border="0" align="center">
  <tr>
    <td align="center" valign="middle" class="ys1">Osill Network Technology©2018 版权所有</td>
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
</table>
<p class="ys1">&nbsp;</p>
</body>
<script>
	function sendFile(){
		var bar = $('.bar');
		var percent = $('.percent');
		var status = $('#status');
		//alert("hi");
		var formData = new FormData($("#uploadForm")[0]);
		formData.append("userID","123");
		$.ajax({
			cache : false,
			type : "post",
			data : formData,
			url : "uploadfile.php",
			dataType : "json",
			contentType : false,
			processData : false,
			xhr:function(){
				myXhr = $.ajaxSettings.xhr();
				if(myXhr.upload){
					myXhr.upload.addEventListener('progress',function(e){
						var loaded = e.loaded;
						var total = e.total;
						var percent = Math.floor(100*loaded/total) + "%";
						$(".bar").css("width",percent);
                        $(".percent").html(percent);
                    },false);
				}
				return myXhr;
			},			
            /*beforeSend: function(){
				status.empty();
				var percentVal = "0%";
				bar.width(percentVal);
				percent.html(percentVal);
			},
			uploadProgress: function(event, position, total, percentComplete){
				var percentVal = percentComplete + "%";
				bar.width(percentVal);
				percent.html(percentVal);
			},*/           
            success : function(){
				console.log("success");
				var percentVal= "100%";
				bar.width(percentVal);
				percent.html(percentVal);
			},
			error : function(arg){
				console.log(arg);
			},
			complete: function(xhr){
				status.html(xhr.responseText);
				location.reload();
			}
		});
	}
	
	function showUploadForm(){
		if(document.getElementById('uploadForm').style.display == 'none') document.getElementById('uploadForm').style.display = 'block'
		else document.getElementById('uploadForm').style.display = 'none';
	}
</script>
</html>
