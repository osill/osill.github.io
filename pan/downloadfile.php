<?php
$filename = $_GET['file'];
$user = $_GET['user'];
$filepath = 'uploads/' . $user . '/' . $filename;
$filesize = filesize($filepath) > 0 ? filesize($filepath) : 1;
$file = fopen($filepath, "r");
header("Content-Type: application/octet-stream");
header("Accept-Ranges: bytes");
header("Accept-Length: " . $filesize);
header("Content-Disposition: attachment; filename=" . $filename);
echo fread($file,$filesize);
fclose($file);
?>