<?php
// Assuming today is March 10th, 2001, 5:16:18 pm, and that we are in the
// Mountain Standard Time (MST) Time Zone

$today = date('Format String', time());
$today = date("F j, Y, g:i a"); 
echo $today;                // March 10, 2001, 5:16 pm
// $today = date("m.d.y"); 
// echo $today;                                // 03.10.01
// $today = date("j, n, Y"); 
// echo $today;                              // 10, 3, 2001
// $today = date("Ymd");   
// echo $today;                                // 20010310
// $today = date('h-i-s, j-m-y, it is w Day');  
// echo $today;           // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
// $today = date('\i\t \i\s \t\h\e jS \d\a\y.'); 
// echo $today;          // it is the 10th day.
// $today = date("D M j G:i:s T Y");      
// echo $today;                 // Sat Mar 10 17:16:18 MST 2001
// $today = date('H:m:s \m \i\s\ \m\o\n\t\h');
// echo $today;             // 17:03:18 m is month
// $today = date("H:i:s");   
// echo $today;                              // 17:16:18
// $today = date("Y-m-d H:i:s");
// echo $today;                           // 2001-03-10 17:16:18 (the MySQL DATETIME format)
?>