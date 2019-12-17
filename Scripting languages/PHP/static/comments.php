<!DOCTYPE html>
<html>
<body>
    <!-- Use of HTML heading outside of php code -->
    <h1>Comments</h1>

    <?php

        // This is a comment.
        echo "// Single-line comment<br><br>";

        # This is also a comment.
        echo "# Single-line comment<br><br>";

        /* This another a comment */
        echo "/* Multi-line comment */<br><br>";

        /*
         * This is a good way to layout
         * a multi-line comment.
         */

        // Below is a multi-line string enclosed within a a single pair of
        // double-quotes.
        echo "
            /*<br>
            * Multi-line comment<br>
            */<br>
        ";

        $x = 5 /* + 15 */ + 4;
        echo $x;
    ?>
</body>
</html>
