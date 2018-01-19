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


// First example
$color = array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the {$color[2]} carpet, the {$color[1]} lawn, the {$color[0]} house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

//Second example
$color = array('white', 'green', 'red');
echo "<ul><li>" . $color[1] . "</li><li>" . $color[2] . "</li><li>" . $color[0] . "</li></ul>";

//The example above can be done with a foreach too:
sort($color);
echo "<ul>";
foreach ($color as $c) {
    echo "<li>$c</li>";
}
echo "</ul>";


//Third example
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


//Forth example
$x = array(1, 2, 3, 4, 5);
array_splice($x, 1, 1);
var_dump($x);
echo "<br>";
echo "<br>";

//Fifth example
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color)."<br>";




echo "<br>";
?>

</body>
</html>