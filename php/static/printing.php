<?php

echo "<h1>Printing</h1><br>";
// The `echo` and `print` commands can be used to output data.
// `echo` returns no value.
// `print` returns 1, so can be used in expressions.

echo "Line 1<br>";
print "Line 2<br>";
echo print "Line 3<br><br>";

$x = 5;

// Print literal text.
echo 'x: $x<br>';
// Print with interpolation.
echo "x: $x<br>";

// Concatenate values.

// Seperate with either a comma.
echo "A", $x, "B<br>";

// Or a full-stop.
echo "A" . $x . "B<br>";

// Though, `print`  will only handle a full-stop.
print "A" . $x . "B<br>";
