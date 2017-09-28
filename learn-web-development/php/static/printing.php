<!DOCTYPE html>
<html>
<body>

<?php

echo "<h1>Printing</h1><br>";

// echo returns no value but print returns 1 so can be used in expressions.

$x = 5;
echo "A", "B", "C<br>";
echo "D" . $x , "E", $x, "<br>";

// print accepts . not but not ,
print "F" . "G";

?>

</body>
</html>

