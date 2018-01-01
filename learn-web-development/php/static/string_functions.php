<!DOCTYPE html>
<html>
<body>

<?php

echo "<h1>String functions</h1>";

$t = "My Test String";
echo "t: $t<br>";
echo "strlen: " . strlen($t) . "<br>";
echo "str_word_count: " . str_word_count($t) . "<br>";
echo "strrev: " . strrev($t) . "<br>";
echo "strpos: " . strpos($t, "Test");
echo "str_replace: " . str_replace("new", "Test", $t);

?>

</body>
</html>

