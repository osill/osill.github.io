<?php
session_start();
$title=$_POST['title'];
$content=$_POST['content'];
$mes_con="../db/message.txt";
if(empty($title) or empty($content))
{
	echo "<script>alert('您的留言不完整！请重新留言。');window.location.href='../html/write.html'</script>";
}
else
{
	$message_open=fopen($mes_con,"a");
	fwrite($message_open,$title."|".$content."\n");
	fclose($message_open);
	echo "<script>alert('留言完成!');window.location.href='../html/board.php'</script>";
}
?>