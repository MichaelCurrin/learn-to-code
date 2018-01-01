<!DOCTYPE html>
<html>
<body>

<?php

echo "<h1>Classes</h1>";

class Car {
    function Car() {
        $this->model = "VW";
    }
}

$my_car = new Car();
echo $my_car->model;

?>

</body>
</html>

