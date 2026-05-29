<?php
$ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'Direct';
$time = date('Y-m-d H:i:s');

$data = "Time: $time\nIP: $ip\nUser-Agent: $user_agent\nReferer: $referer\n---\n";

file_put_contents('ips.log', $data, FILE_APPEND);

header('Content-Type: image/jpeg');
readfile('pixel.jpg'); // Use a 1x1 transparent pixel
?>