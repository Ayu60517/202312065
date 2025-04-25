<!DOCTYPE html>
<html>
  <body>
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo $cars[2];
    ?>

    <?php
    $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    echo $cars["year"];
    ?>

    <?php
    $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    echo $cars["model"];
    echo "<br>";
    echo $cars['model'];
    ?>

    <?php
    function myFunction() {
      echo "I come from a function!";
    }

    $myArr = array("Volvo", 15, myFunction);

    $myArr[2]();
    ?>

    <?php
    $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

    foreach ($car as $x => $y) {
      echo "$x: $y <br>";
    }
    ?>

    <?php
    $cars = array("Volvo", "BMW", "Toyota");

    foreach ($cars as $x) {
      echo "$x <br>";
    }
    ?>

  </body>
</html>
