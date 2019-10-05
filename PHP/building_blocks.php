<?php

/** Building blocks **/
// Notes from the Teach Yourself MySQL, PHP and Apache book.


// Printing.

// `echo` will print one or more strings. And will return null;
// Note that there is no newline unless you specify one explictly with "\n" and also use double quotes.
echo "abc\n";
echo "abc\ndef\nxyz\n";
echo 'abc';
echo '\n';

// For HTML, you'll want to use the break tag.
echo "abc<br>\n";
echo "abc<br>\ndef<br>\nxyz<br>\n";


$test = 'TEST';
echo "abc $test \n"; // interpolated
echo 'abc $test \n'; // literal. Variables and escaped characters do not get evaluated.
echo "\n";
echo("abc $test \n"); // as a function
echo 'a', 'b', 'c', $test, '\n'; // Concatenate values using commas. Note this only works when not using brackets.

// Quotes are not required.
echo abc; // prints as abc
// And a variable not inialized will not give an error.
echo $not_set; // empty output.


// `print` will print one string. And will return 1.
print(abc);

// Legal variable names.
$x;
$a123;
$withCaps;
$with_underscores;


// Data types.

// Base
$x; // Set to null
$x = null; // null is an uninitalized value.
$x = 1; // integer
$x = 1.234; // double
$x = "Hello"; // string
$x = true; // boolean

// Data structures.
// An Array is a list.
$x = [1, 2, 3];

// An Object has key-values pairs. Quotes are optional in keys.
$x = [a=> 1, 'b'=> 2];
// A Resource is a reference to a third-party resource e.g. a databsae.

// Types
// Check type.
$x = 123.4;
echo gettype($x); // => double

// Change type. Changes original variable.
settype($x, 'integer'); // Note that value is round down.
echo $x; // => 123
echo gettype($x); // => double

$x = 123.4;
settype($x, 'string');
echo $x; // => 123.4
echo gettype($x); // => string


// Cast. Preserves original variable.
$x = 123;
$y = (integer) $x;
$z = (string) $x;


// Operators


$x = 1;
$x = $x + 3;
$x = $x - 3;
$x = $x * 3;
$x = $x / 3;
$x = $x % 3; // modulus

// Concatenator.

// Concatenate with full stop. Note that you must insert spaces yourself.
echo "abc"."def\n";
echo "abc "."def\n";

// Variables can be used.
echo 'abc' . $test . "\n";
print('abc ' . $test . "\n");


// Assignment.

$a = 1;
$a = 4; // reassign.

$b = 2;
$c = 3;
$b = $c; // copy variable to variable's current value but keeps them independent. at least in this case of a base type.
echo $b . "\n"; // prints 3
$c = 4;
echo $b . "\n"; // prints 3 still


// Combined assignment operators

$x = 3;
$x += 3;
$x -= 3;
$x *= 3;
$x /= 3;

$y = 'a';
$y .= ' b';


// Increment/decrement;

$x = 0;
$x++; // add 1
$x--; // subtract 1

// post-increment
$x++;
// pre-increment
++$x;

$x = 0;
$y = $x++;
echo $x . "\n"; // 1
echo $y . "\n"; // 0

$x = 0;
$y = --$x;
echo $x . "\n"; // 1
echo $y . "\n"; // 1

// Comparison operators.

// Note that true prints as 1 and false as nothing (not even a blank line).
echo true;
// => 1
echo false;
// =>

$x = 4;
$x == 5; // false (Check value is the same.)
$x === 5; // false (Check value is the same and the same type.)
$x == true; // true
$x === true; // false

$x > 4;
$x >= 4;
$x < 4;
$x <= 4;


// Logical operators.

// OR
true or false; // true
true || false; // true

// XOR
true xor true; //false

// AND
true and false; // false
true && false; // false

// NOT
! true; // false

// Order of presedence
// `and` is before `or`
echo true or false and false;
//

// Globals and superglobals


// Global variables are accessible across scripts.
// Super globals are as well and are set on a request. They are:
$_GET; // Values from GET request.
$_POST; // Values from POST request.
$_COOKIE; // Cookies request.
$_FILES; // File uploads.
$_SERVER; // Web server variables like headers, paths and script locations. These are not guaranteed across server types.
$_ENV; // Server environment.
$_REQUEST; // Variables passed via user input.
$_SESSION; // Variables currently registered in the session.


// Constants

// Constants cannot be modified.
// Value must be be a scalar value (integer, float, string, boolean, or NULL).
// https://www.php.net/manual/en/function.define.php

// Note that no dollar sign is needed to set or reference.
define("CONSTANT_NAME", 42);
echo CONSTANT_NAME . "\n";
// CONSTANT_NAME = 40; // => error.

// New syntax.
const A = 5;
echo A . "\n";
$x = 1;
// const B = $x; // =>  fails
// define("B", $x); // Valid.


// Built-in constants.
echo __FILE__ . "\n"; // Path to PHP file.
echo __LINE__ . "\n"; // Line number of PHP file.
echo PHP_VERSION . "\n"; // e.g. 7.1.23
