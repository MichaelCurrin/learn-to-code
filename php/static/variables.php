<?php

echo "<h1>Variables</h1>";

echo "<h2>Operations</h2>";
$x = 5;
$y = 10;
echo $x . "<br>";
echo $x + $y . "<br><br>";

echo "<h2>Types</h2>";
$null1 = null;
$boolean1 = 1;
$int1 = 5999;
$float1 = 10.1;
$string1 = 'A';
$string2 = "B";
$array1 = array("A", "B", "C");
$array2 = array("A", 2, "C");

echo '$boolean1: ' . $boolean1 . "<br>";
// Return 'Array'
echo '$array2: ' . $array2 . "<br>";
// String will be cast as numeric before doing sum and it will be
// logged as 'PHP Notice:  Array to string conversion'.
$sum = "5" + 6;
echo '$sum: '. $sum . "<br>";

echo "<h2>Return</h2>";
echo 'echo $x: ' . $x . "<br>";

echo 'var_dump($x):  ';
var_dump($x);
// int(9)
echo '<br>';

// $z is not created yet, which is the same as setting $z = null;
echo 'var_dump($z):  ';
var_dump($z);
// NULL
// Log will say 'PHP Notice:  Undefined variable: z'.
echo '<br>';
echo '$z:' . $z . " (empty string because NULL)<br>";

var_dump($array2);
// array(3) { [0]=> string(1) "A" [1]=> int(2) [2]=> string(1) "C" }
echo "<br>";


echo "<h2>Case</h2>";

echo "<h3>Functions</h3>";
// functions are NOT case sensitive.
ECHO "command ECHO<br>";
echo "command echo<br><br>";

echo "<h3>Variables</h3>";
// Variables are case sensitive.
$color = "red";

echo "color: " . $color . " <br>";
// The value is null so empty string will be used.
echo "COLOR: " . $COLOR . " <br>";
