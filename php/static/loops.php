<?php
echo "<h1>Loops</h1>";

$x = 1;

echo "<h2>while</h2>";
while ($x <= 5) {
    echo "Value: $x<br>";
    $x++;
}
echo "<br>";

$x = 1;
echo "<h2>do...while</h2>";
do {
    // The condition is only checked after this is run once.
    echo "Value: $x<br>";
    $x++;
} while ($x <= 5);

echo "<br>";

do {
    echo "Run";
} while (false);


echo "<h2>for</h2>";
// Syntax
/*
for (init counter; test counter; increment counter) {
    code to be executed;

init counter: Initialised value of counter variable.
test counter: Condition to test counter against. If true, then execute.
increment counter: Change the counter value after code is executed.
}
*/

// Example
for ($x = 0; $x < 5; $x++) {
    echo $x . "<br>";
}


echo "<h2>foreach</h2>";
// This only works on arrays and is used to evaluate each key/value pair in
// an array.

// Syntax:
/*
foreach ($array as $value) {
    code to be executed;
}
*/

// Example:
$my_array = array("a", "b", "c");

foreach ($my_array as $v) {
    echo "$v <br>";
}

?>
