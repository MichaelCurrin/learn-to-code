<!DOCTYPE html>
<html>
<body>
    <?php
        echo "<h1>Variables</h1>";

        echo "<h2>Operation</h2>";
        // int (with comment)
        $x = 5 /* + 15 */ + 5;
        $y = 10;
        // printing variables.
        echo $x . "<br>";
        echo $y . "<br>";
        echo $x + $y . "<br><br>";

        echo "<h2>Types</h2>";
        $x = 5999;
        $y = 10.1;
        $z = true;
        $my_array = array("A", "B", "C");

        echo "<h2>Return</h2>";
        // Return type and value.
        echo 'x: $x<br>';
        var_dump($x);
        echo '<br>';
        var_dump($y);
        echo '<br>';
        var_dump($z);
        echo '<br>';
        var_dump($my_array);
        echo "<br>";
        $x = null;
        echo "new x:" . $x . " (empty string because NULL)<br>";
        var_dump($x);
        echo '<br><br>';

        echo "<h2>Case</h2>";

        echo "<h3>Functions</h3>";
        // functions are not case sensitive.
        ECHO "command ECHO<br>";
        echo "command echo<br><br>";

        echo "<h3>Variables</h3>";
        // variables are case sensitive.
        $color = "red";
        echo "color: " . $color . " (was set)<br>";
        echo "COLOR: " . $COLOR . " (not set) <br>";
        echo "color: $color in a single string<br>";
    ?>
</body>
</html>
