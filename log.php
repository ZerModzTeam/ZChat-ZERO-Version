<?php
// Mencegah log injection
$num = str_replace(["\r", "\n"], '', $_GET['num']);
$ip = $_SERVER['REMOTE_ADDR'];
$ua = $_SERVER['HTTP_USER_AGENT'];
$log = "WA: " . $num . " | IP: $ip | UA: $ua | Time: " . date("Y-m-d H:i:s") . "\n";

// Menyimpan ke file logs.txt
file_put_contents("logs.txt", $log, FILE_APPEND);
?>