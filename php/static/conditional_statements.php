<!DOCTYPE html>
<html>
<body>
    <?php
        echo "<h1>Conditional statements</h1>";

        echo "Types of statements   <br>";
        echo "if...<br>";
        echo "if...else...<br>";
        echo "if...elseif...else<br>";
        echo "switch<br><br>";

        $x = 5;

        echo "Output:<br>";
        if ($x > 5) {
            echo "A";
        } elseif ($x > 2) {
            echo "B";
        }
        else {
            echo "C";
        }
    ?>
</body>
</html>
