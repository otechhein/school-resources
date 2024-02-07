<?php

date_default_timezone_set("Asia/Yangon");
// 2024 Jan 12 12:32:45
// echo date("Y M j g:i:s"); 

// String to Time

$timestamp = strtotime('2023-08-21 +1 day');

// echo $timestamp; // 2023-08-22
echo date("Y-m-d", $timestamp);