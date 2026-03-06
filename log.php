<?php
$num = str_replace(["\r", "\n"], '', $_GET['num']);
$log = "WA: $num | IP: " . $_SERVER['REMOTE_ADDR'] . " | UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n";
file_put_contents("logs.txt", $log, FILE_APPEND);
?>