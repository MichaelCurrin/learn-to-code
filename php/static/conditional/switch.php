<?php

echo "<h1>Switch</h1>";

// Syntax:

/*
switch (n) {
    case label1:
        code to be executed if n=label1;
        break;
    case label2:
        code to be executed if n=label2;
        break;
    case label3:
        code to be executed if n=label3;
        break;
    ...
    default:
        code to be executed if n is different from all labels;
}
*/

// Example.

$value = "b";
switch ($value) {
    case "a":
        echo "First";
        break;
    case "b":
        echo "Second";
        break;
    case "c":
        echo "Third";
        break;
    default:
        echo "No match";
}
?>
