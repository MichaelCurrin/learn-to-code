<!DOCTYPE html>
<html>
<body>

<?php

echo "<h1>Constants</h1>";

// Constants cannot have $ sign and are automatically global.

// case insensitive defaults to false
// define(value, value case-insensitive)

define("GREETING", "Hello!");
echo GREETING . "<br>";
// gives the literal word 'greeting'
echo greeting . "<br>";

define("GREETING", "Goodbye!", true);
echo GREETING . "<br>";
echo greeting . "<br>";


function myFunct() {
    echo GREETING;
}
myFunct()

?>

</body>
</html>
