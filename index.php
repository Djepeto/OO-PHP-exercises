<html>
<head>
    <title>PHP Test</title>
</head>
<body>
<?php echo '<p>Hello Php</p>'; ?>
<?php

/**
 * Exercises of arrays taken from this link:
 * https://www.w3resource.com/php-exercises/php-array-exercises.php
 */


// 1
$color = array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the {$color[2]} carpet, the {$color[1]} lawn, the {$color[0]} house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

//2
$color = array('white', 'green', 'red');
echo "<ul><li>" . $color[1] . "</li><li>" . $color[2] . "</li><li>" . $color[0] . "</li></ul>";

//The example above can be done with a foreach too:
sort($color);
echo "<ul>";
foreach ($color as $c) {
    echo "<li>$c</li>";
}
echo "</ul>";


//3
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki",
    "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London",
    "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest",
    "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

asort($ceu);
foreach ($ceu as $country => $capital){
    echo "The capital of $country is $capital"."<br>" ;
}
echo "<br>";



//4
$x = array(1, 2, 3, 4, 5);
array_splice($x, 1, 1);
var_dump($x);
echo "<br>";
echo "<br>";

//5
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color)."<br>";
echo "<br>";

//6
function jsonfunction($value,$key){
    echo "$key : $value" . "\n";
}
$a = '{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith","Detail":{ 
"Publisher": "Little Brown"}}';

$j1 = json_decode($a,true);
array_walk_recursive($j1,"jsonfunction");
echo "<br>";
echo "<br>";


//7
$array = array(1, 2, 3, 4, 5);
$inserted_array = array('$');

array_splice( $array, 3, 0, $inserted_array );
var_dump($array);
echo "<br>";
echo "<br>";

//Eighth example - order by
$array = array(1, 2, 3, 4, 5);
$inserted_array = array('$');

array_splice( $array, 3, 0, $inserted_array );
var_dump($array);
echo "<br>";
echo "<br>";

//8
echo "Associative array : Ascending order sort by value ";
$array2=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
asort($array2);
foreach($array2 as $y=>$y_value){
    echo "Age of ".$y." is : ".$y_value."";
}
echo "<br>";
echo "<br>";
echo "Associative array : Ascending order sort by Key ";
$array3=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
ksort($array3);
foreach($array3 as $y=>$y_value){
    echo "Age of ".$y." is : ".$y_value."";
}
echo "<br>";
echo "<br>";
echo "Associative array : Descending order sorting by Value ";
$age=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
arsort($age);
foreach($age as $y=>$y_value){
    echo "Age of ".$y." is : ".$y_value."";
}
echo "<br>";
echo "<br>";
echo "Associative array : Descending order sorting by Key ";
$array4=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
krsort($array4);
foreach($array4 as $y=>$y_value){
    echo "Age of ".$y." is : ".$y_value."";
}
echo "<br>";
echo "<br>";



//9
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
    68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73);

echo "Recorded temperatures: ";
echo implode(",",$temperatures);
echo "<br>";


echo "Average Temperature is: ";
echo number_format(array_sum($temperatures)/ count($temperatures));
echo "<br>";

sort($temperatures);
echo "List of five lowest temperatures : ";
echo implode("," , array_slice($temperatures, 0 , 5));
echo "<br>";

echo "List of five highest temperatures : ";
echo implode(", ", array_slice($temperatures, -5, 5));
echo "<br>";

//10
/**
 * skipped this step
 */

//11
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");

function merge_arrays_by_index($x, $y){
    $temp = array();
    $temp[] = $x;
    if(is_scalar($y)){
        $temp[] = $y;
    }
    else{
        foreach ($y as $k => $v){
            $temp[] = $v;
        }
    }
    return $temp;
}
echo "<pre>"; print_r(array_map('merge_arrays_by_index', $array2, $array1));


//12
$color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

var_dump(array_map('strtolower', $color));
var_dump(array_map('strtoupper', $color));

//13
echo implode(",",range(200,250,4));

echo "<br>";

for($i = 200; $i<=250;$i++){
    if($i%4==0)
    echo $i.'.';
}
echo "<br>";
echo "<br>";

//14
$array = array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $array);

echo 'The shortest array length is ' .min($new_array) . " and the longest array length is: " . max($new_array);
echo "<br>";


//15
foreach (range(11, 20) as $number) {
    echo rand(11,20) . ",";
}
//Numbers outputed are not unique

echo "<br>";
echo "<br>";


$n = range(11,20);
shuffle($n);
for($x = 0; $x < 10; $x++){
    echo $n[$x]. ',';
}
echo "\n";
echo "<br>";
echo "<br>";


//16
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
    68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73);

echo max(array_keys($temperatures));
echo "<br>";
echo "<br>";

//17
$temperatures = array(-100, -72, -66, -43, -22 , -2, -1, 0, 1, 2, 5, 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
    68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73);

echo min($temperatures);

/*function min_values_not_zero(array $temperatures){
    return min(array_diff(array_map('intval', $temperatures), array(0)));
}
echo (min_values_not_zero(array($temperatures)));

*/
echo "<br>";
echo "<br>";


//18
function floodec($number, $precision, $separator){
    $number_part=explode($separator, $number);
    $number_part[1] = substr_replace($number_part[1], $separator , $precision, 0);
    if($number_part[0]>=0){
        $number_part[1]=floor($number_part[1]);
    }
    else{
        $number_part[1]= ceil($number_part[1]);
    }
    $ceil_number= array($number_part[0], $number_part[1]);
    return implode($separator, $ceil_number);
}

print_r(floodec(1.155, 2, ".")."\n");
print_r(floodec(100.25781, 4, ".")."\n");
print_r(floodec(-2.9636, 3, ".")."\n");
echo "<br>";
echo "<br>";



//19
$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
    "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
    "holes" => array ( "First", 5 => "Second", "Third"));

echo $color["holes"][5]. "<br>";
echo $color["color"]["a"]. "<br>";

//20

