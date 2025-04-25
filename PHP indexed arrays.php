<!DOCTYPE html>
<html>
    <body>
        <?php
        $cars = array("Volvo", "BMW", "Toyota");
        var_dump($cars);
        ?>
        
        <?php
        $cars = array("Volvo", "BMW", "Toyota");
        echo $cars[0];
        ?>
        
        <pre>

        <?php
        $cars = array("Volvo", "BMW", "Toyota");
        $cars[1] = "Ford";
        var_dump($cars);
        ?>

        </pre>

        <?php
        $cars = array("Volvo", "BMW", "Toyota");

        foreach ($cars as $x) {
            echo "$x <br>";
        }
        ?>

        <pre>

        <?php
        $cars[0] = "Volvo";
        $cars[1] = "BMW";
        $cars[2] = "Toyota";

        array_push($cars, "Ford");
        var_dump($cars);
        ?>

        </pre>

        <p>The next array item gets the index 15:</p>

        <pre>
        <?php
        $cars[5] = "Volvo";
        $cars[7] = "BMW";
        $cars[14] = "Toyota";

        array_push($cars, "Ford");
        var_dump($cars);
        ?>
        </pre>

    </body>
</html>
