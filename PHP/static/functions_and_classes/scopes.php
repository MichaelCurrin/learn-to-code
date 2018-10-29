<?php

echo "<h1>Scopes</h1>\n";


echo "<h2>using local variables</h2>\n";

// Global.
$x = 5;

function myFunc() {

    /*
    You will a warning in the log but it won't stop the script.
    e.g. PHP Notice:  Undefined variable: x in filename.php on line ...
    */
    echo "<p>x is `$x` (out of scope)</p>\n";

    // Local.
    $y = 6;
    echo "<p>y is `$y` (in function scope)</p>\n";
    $x = 10;
    echo "<p>x is `$x` (in function scope)</p>\n";

}
myFunc();

echo "<p>x is `$x` (same scope)</p>\n";


echo "<h2>using globals in a function.</h2>\n";
$a = 1;
$b = 2;

function mySum() {
    // Make variables available in the function.
    global $a, $b;
    $b = $a + $b;
}
function mySumAlt() {
    // Alternative style.
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

echo "b: <br>\n";
echo $b . "<br>\n";
mySum();
echo $b . "<br>\n";
mySumAlt();
echo $b . "<br>\n";


echo "<h2>using static keyword</h2>\n";

// Mark a variable as static so that it is not deleted when the function
// is done. But it is not in the global variables.
function myStatic() {
    static $s = 0;
    echo $s . "<br>\n";
    $s++;
}
echo "s: <br>\n";
myStatic();
myStatic();
myStatic();
// Empty string.
// PHP Notice:  Undefined variable: s
echo $s;
