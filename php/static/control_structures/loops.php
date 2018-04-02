<?php

echo "<h1>Loops</h1>\n";

$x = 1;

echo "<h2>while</h2>\n";
while ($x <= 5) {
    echo "Value: $x<br>\n";
    $x++;
}
echo "<br>\n";


$x = 1;
echo "<h2>do...while</h2>\n";
do {
    // The condition is only checked after this is run once.
    echo "Value: $x<br>\n";
    $x++;
} while ($x <= 5);

echo "<br>";

do {
    echo "Run\n";
} while (false);


echo "<h2>for</h2>\n";
// Syntax
/*
for (init; test; increment) {
    code to be executed;

init: Initialised value of counter variable.
test: Condition to test counter against. If true, then execute.
increment: Change the counter value after code is executed.
}
*/

// Example
for ($x = 0; $x < 5; $x++) {
    echo $x . "<br>\n";
}


echo "<h2>foreach</h2>\n";
// This only works on arrays and is used to evaluate each key/value pair in
// an array.

// Syntax:
/*
foreach ($array as $value) {
    code to be executed;
}
*/

// Example:
$my_array = array('a', 'b', 'c');

foreach ($my_array as $value) {
    echo "$value <br>\n";
}
echo "or <br>\n";
foreach ($my_array as $key=>$value) {
    echo "$key: $value <br>\n";
}


echo "<h2>continue</h2>\n";
// You can use the continue statement will all looping statements.

for ($i = 0; $i < 10; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    echo $i . "\n";
}



echo "<h2>break</h2>\n";
// You can use the break statement will all looping statements.

$counter = 0;
while (true) {
    echo $counter++;
    if ($counter == 5)
        break;
}

for ($i = 0; $i < 10; $i++) {
    if ($i % 4 == 0) {
        break;
    }
    echo $i . "\n";
}
