<?php

/** Printing **/

// Link: https://www.w3schools.com/php/php_echo_print.asp

// The `echo` and `print` commands can be used to output data. The main practical difference that
// `echo` returns no value, while `print` returns 1, so can be used in expressions.

// Previously echo was a statment and print a command.
//   echo "Text";
//   print("Text");
// Now both work as statements and functions, with or without brackets.

echo "<h1>Printing</h1><br>";


echo "Line 1<br>";
print "Line 2<br>";
echo print "Text";
// => Text1

// This will print the input but store 1.
$a = print("Text");
// => Text;
echo $a;
// => 1;


$x = 5;

// Print literal text.
echo 'x: $x<br>';
// Print with interpolation.
echo "x: $x<br>";

// Concatenate values.

// echo accepts multiple parameters, though this is rare.
// A usecase is to seperate values with a comma.
echo "A", $x, "B<br>";

// You can also use a full-stop.
echo "A" . $x . "B<br>";

// Though `print`  will handle a full-stop only as it takes one parameter.
print "A" . $x . "B<br>";
