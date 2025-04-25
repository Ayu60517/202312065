<!DOCTYPE html>
<html>
    <body>
        <?php
        $x = "Hello World!";
        echo substr($x, 6, 6);
        ?>

        <?php
        $x = "Hello World!";
        echo substr($x, 7);
        ?>

        <?php
        $x = "Hello World!";
        echo substr($x, -6, 1);
        ?>

        <?php
        $x = "Hi, how are you?";
        echo substr($x, 4, -1);
        ?>

    </body>
</html>
