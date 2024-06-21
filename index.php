<?php

// working with unix datetime or timestamp

$current_timestamp = time();
//echo $current_timestamp . "<br>";
//echo $current_timestamp + 86400 . "<br>"; // add one day
//echo $current_timestamp - 86400 . "<br>"; // subtract one day
//echo $current_timestamp + 7 * 24 * 60 * 60 . "<br>"; // add 7 days

//echo date_default_timezone_get() ."<br>";
date_default_timezone_set("Asia/Dhaka");

// format unix timestamp
$formatted_date = date("Y-F-D h:i:sa", $current_timestamp) . "<br>";

// add 5 days from current time by using mktime
$timestamp = mktime(0,0,0, 6,26, 2050);
//echo date("Y-m-d H:i:s", $timestamp) . "<br>";
//echo "<pre>";
//print_r(date_parse(date("Y-m-d H:i:s", $timestamp)));

$timestamp = strtotime("2024-12-31");

echo date("m-y-d", $timestamp) . "<br>";