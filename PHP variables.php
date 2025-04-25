<!DOCTYPE html>
<html>
    <body>
        <?php
        $x = 10;
        $y = "Ayu";

        echo $x;
        echo "<br>";
        echo $y;
        ?>

        <?php
        $txt = "YOU<3";
        echo "I love $txt!";
        ?>

        <?php
        $txt = "YOU<3";
        echo "I love". $txt."!";
        ?>

        <?php
        $x = 5;
        $y = 5;
        echo $x + $y;
        ?>

        <?php
        $x = 1;      // $x is an integer
        $y = "Ayu"; // $y is a string

        echo $x;
        echo $y;
        ?>

        <?php
        $x = 10;
        var_dump($x);
        ?>
        
        <pre>

        <?php
        var_dump(10);
        var_dump("Ayu");
        var_dump(3.14);
        var_dump(true);
        var_dump([2, 3, 5]);
        var_dump(NULL);
        ?>
        </pre>

        <?php
        $x = "Ayu";
        echo $x;
        ?>

        <?php
        $x = $y = $z = "Ayu";

        echo $x;
        echo $y;
        echo $z;
        ?>
    </body>
</html>
