<?php

echo "<h1>Switch</h1> \n";

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
        code to be executed if none of the labels match the variable.
}

Where default is an optional catch-all.
*/


echo "<h2>Example with breaks</h2> \n";

$value = "b";
switch ($value) {
    case "a":
        echo "First\n";
        break;
    case "b":
        echo "Second\n";
        break;
    case "c":
        echo "Third\n";
        break;
    default:
        echo "No match\n";
}


echo "<h2>Example without breaks</h2> \n";

// If break is not used, then all conditions after the matched one
// are executed.
$day = 'Tues';
switch ($day) {
    case 'Mon':
        echo "M\n";
    case 'Tues':
        echo "T\n";
    case 'Wed':
        echo "W\n";
}
