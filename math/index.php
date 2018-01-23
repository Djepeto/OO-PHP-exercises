<html>
<head>
    <title>PHP Test</title>
</head>
<body>
<?php echo '<p>Hello Php</p>'; ?>
<?php

/**
 * Exercises of math taken from this link:
 * https://www.w3resource.com/php-exercises/php-math-exercises.php
 */

//1
$marks1 = array(360,310,310,330,313,375,456,111,256);
$marks2 = array(350,340,356,330,321);
$marks3 = array(630,340,570,635,434,255,298);

$max_marks = max(max($marks1),max($marks2),max($marks3));
$min_marks = min(min($marks1),min($marks2),min($marks3));

echo "Maximum marks : ".$max_marks."<br>";
echo "Minimum marks : ".$min_marks."<br>";


//2
echo round(1.65, 1) . "<br>";
echo round(1.65, 1, PHP_ROUND_HALF_DOWN) . "<br>";
echo round(-1.54, 1) . "<br>";

//3
$x = rand(10e12, 10e16);
echo base_convert($x, 10, 36)."<br>";


//4
$val = '4.5e3';

$ival = (int) $val;
$fval = (float) $val;

echo $ival."<br>";
echo $fval."<br>";



//5
$odate = "2018-01-23";
$newDate = date("d-m-Y", strtotime($odate));
echo $newDate."\n";




?>