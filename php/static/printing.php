<!DOCTYPE html>
<html>
<body>
    <?php
        echo "<h1>Printing</h1><br>";
        // The `echo` and `print` commands can be used to output data.
        // `echo` returns no value.
        // `print` returns 1, so can be used in expressions.

        echo "Line 1<br>";
        print "Line 2<br>";
        echo print "Line 3<br><br>";

        $x = 5;
        // Concatenate values, without a space between.

        // With either a comma.
        echo "A", "B", "C<br>";
        // Or a full-stop.
        echo "D" . $x , "E", $x, "<br>";
        // Though `print` only accepts a full-stop.
        print "F" . "G<br>";

    ?>
</body>
</html>
