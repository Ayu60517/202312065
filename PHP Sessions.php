<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <body>

        <?php
        // Set session variables
        $_SESSION["favcolor"] = "green";
        $_SESSION["favanimal"] = "cat";
        echo "Session variables are set.";
        ?>

        <?php
        // Echo session variables that were set on previous page
        echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
        echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
        ?>

        <?php
        print_r($_SESSION);
        ?>

        <?php
        // to change a session variable, just overwrite it
        $_SESSION["favcolor"] = "yellow";
        print_r($_SESSION);
        ?>

        <?php
        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();

        echo "All session variables are now removed, and the session is destroyed."
        ?>

    </body>
</html>