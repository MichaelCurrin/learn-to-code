<?php

echo "<h1>Conditional statements</h1>\n";

echo "Types of statements   <br>\n";
echo "if...<br>\n";
echo "if...else...<br>\n";
echo "if...elseif...else<br>\n\n";

$x = 5;


if ($x > 5)
    echo "A<br>\n";

if ($x > 5)
    echo "A<br>\n";
else
    echo "B<br>\n";

if ($x > 5)
    echo "A<br>\n";
elseif ($x > 2)
    echo "B<br>\n";
elseif ($x == 0 )
    echo "C<br>\n";
else
    echo "D<br>\n";


// Add curly brackets to execute multiple statements.
if ($x > 5) {
    echo "A1<br>\n";
    echo "A2<br>\n";
}
elseif ($x > 2) {
    echo "B1<br>\n";
    echo "B2<br>\n";
}
else
    echo "C<br>\n";

