<!DOCTYPE html>
<html>
<body>
    <?php
        echo "<h1>Classes</h1>";

        class Car {
            // Initialise Car class.
            function Car() {
                // On this instance of Car, set variable model to a string.
                $this->model = "VW";
            }
        }

        // Instantiate variable as instance of class.
        $my_car = new Car();
        // Show the value of the model variable on the instance.
        echo $my_car->model;
    ?>
</body>
</html>
