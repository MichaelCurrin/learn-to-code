<!DOCTYPE html>
<html>
<body>
    <?php
        echo "<h1>Constants</h1>";

        // A constant is an identifier for a value which is fixed in the
        // script. A valid constant starts with a letter or underscore, but
        // not a $ sign.

        // The syntax is as follows:
        // define(name, value, case-insensitive);
        // Where the value in place of 'case-insensitive' is optional and may
        // be `true` or `false` and defaults to false.

        define("GREETING", "Hello!");
        echo GREETING . "<br>";
        // Gives the literal word 'greeting'.
        echo greeting . "<br>";

        define("GREETING", "Goodbye!", true);
        echo GREETING . "<br>";
        echo greeting . "<br>";

        // Unlike variables, constants are automatically global, so they can be
        // referenced inside a function's scope.
        function myFunct() {
            echo GREETING;
        }
        myFunct()
    ?>
</body>
</html>
