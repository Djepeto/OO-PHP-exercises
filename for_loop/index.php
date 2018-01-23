<html>
<head>
    <title>PHP Test</title>
</head>
<body>
<?php echo '<p>Hello Php</p>'; ?>
<?php

/**
 * Exercises of for loops taken from this link:
 * https://www.w3resource.com/php-exercises/php-for-loop-exercise-3.php
 */


//1
for($i=0;$i<=10;$i++){

    if($i<10){
        echo "$i-";
    }
    else
    {
        echo "$i" . "\n";
    }
}

echo "<br>";
echo "<br>";

//2
$sum = 0;
for($i=1;$i<30;$i++){
$sum +=$i;
}
echo "The sum for the numbers between 0 and 30 numbers is: " . $sum . "<br>";
echo "<br>";
//3 - My solution
for($i=1;$i<=5;$i++)
{
    echo  str_repeat('* ',$i);
    echo "<br />";
}

//their solution - using nested for loop
$n=5;
for($i=1; $i<=$n; $i++)
{
    for($j=1; $j<=$i; $j++)
    {
        echo ' * ';
    }
    echo '<br>';
}


//4

$n=5;
for($i=1; $i<=$n; $i++)
{
    for($j=1; $j<=$i; $j++)
    {
        echo ' * ';
    }
    echo '<br>';
}
for($i=$n; $i>=1; $i--)
{
    for($j=1; $j<=$i; $j++)
    {
        echo ' * ';
    }
    echo '<br>';
}
echo '<br>';

//5
$x = 4;
$y = 1;
for($i = 1; $i<=$x-1; $i++){
    $y*=($i+1);
}

echo "The factorial number of  $x  is :" . $y;


?>