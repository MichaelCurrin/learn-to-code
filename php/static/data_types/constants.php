<?php

echo "<h1>Constants</h1>\n";

// A constant is an identifier for a value which is fixed in the
// script. A valid constant starts with a letter or underscore, but
// not a $ sign.

// The syntax is as follows:
// define(name, value, case-insensitive);
// Where the value in place of 'case-insensitive' is optional and may
// be `true` or `false` and defaults to false.

define("GREETING", "Hello!");
echo GREETING . "<br>\n";
// Gives the literal word 'greeting'.
echo greeting . "<br>\n";

define("GREETING", "Goodbye!", true);
echo GREETING . "<br>\n";
// Gives the value because case-insensitive was enabled.
echo greeting . "<br>\n";

// Unlike variables, constants are automatically global, so they can be
// referenced inside a function's scope.
function myFunct() {
    echo GREETING;
}
myFunct();
echo "<br>\n<br>\n";


// Differences between define and const:
//     See https://stackoverflow.com/questions/2447791/define-vs-const

$x = 5;

// Defined at run time.
define('DEFINED_A', 1);
define('DEFINED_B', $x + 1);

// Defined at compile time and is case-sensitive. Upper-case name is
// recommended but not required.
const MY_CONST_A = 10;
// This produces an error as it must reference as fixed value.
// const MY_D = $x + 1;

echo 'DEFINED_A: ' . DEFINED_A . "<br>\n";
echo 'DEFINED_B: ' . DEFINED_B . "<br>\n";
echo 'MY_CONST_A: ' . MY_CONST_A . "<br>\n";

const my_const_b = 100;
echo 'my_const_b: ' . my_const_b . "<br>\n";
// Literal 'MY_CONST_B' is printed.
echo 'MY_CONST_B: ' . MY_CONST_B . "<br>\n";
