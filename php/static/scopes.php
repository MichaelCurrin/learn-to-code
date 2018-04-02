<?php

echo "<h1>Scopes</h1>";

echo "<h2>using local variables</h2>";

// global
$x = 5;

function myFunc() {
    // local
    $y = 6;
    echo "in function scope<br>";
    echo "<p>y is `$y`</p>";

    /*
    You will a warning in the log but it won't stop the script.
    e.g. PHP Notice:  Undefined variable: x in .../static/scopes.php on line 25
    */
    echo "out of scope<br>";
    echo "<p>x is `$x`</p>";
}
myFunc();

echo "<p>x is `$x` (same scope)</p>";


echo "<h2>using globals in a function.</h2>";
$a = 1;
$b = 2;

function mySum() {
    global $a, $b;
    $b = $a + $b;
}
function mySumAlt() {
    // Alternative style.
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

echo $b . "<br>";
mySum();
echo $b . "<br>";
mySumAlt();
echo $b . "<br>";

echo "<h2>using static keyword</h2>";

// Mark a variable as static so that it is not deleted
// when the function is done.
function myStatic() {
    static $x = 0;
    echo $x . "<br>";
    $x++;
}
myStatic();
myStatic();
myStatic();
