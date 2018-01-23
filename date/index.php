<html>
<head>
    <title>PHP Test</title>
</head>
<body>
<?php echo '<p>Hello Php</p>'; ?>
<?php

/**
 * Exercises of math taken from this link:
 * https://www.w3resource.com/php-exercises/php-date-exercises.php
 */



//1
echo "<i> Expected Format</i>:© " . date('Y') . " PHP Exercises - w3resource";
echo "<br>";

//2
$target_days = mktime(0,0,0,9,07,2018);
$today = time();
$diff_days = ($target_days - $today);
$days = (int)($diff_days/86400);
echo "Days until your next birthday: " . $days . " days! <br>";
echo "<br>";

//3
echo "Today's date in different formats: <br>";
echo date("Y/m/d") . "<br>";
echo date("y.m.d") . "<br>";
echo date("d-m-y") . "<br>";
echo "<br>";

//4
$sdate = "1981-11-04";
$edate = "2013-09-04";

$date_diff = abs(strtotime($edate) - strtotime($sdate));

$years = floor($date_diff / (365*60*60*24));
$months = floor(($date_diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($date_diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

printf("%d years, %d months, %d days", $years, $months, $days);
echo "<br>";
echo "<br>";



//5
$odate = "2012-09-12";
$newDate = date("d-m-Y", strtotime($odate));
echo $newDate."<br>";

?>