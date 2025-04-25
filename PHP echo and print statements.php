<!DOCTYPE html>
<html>
    <body>
        <?php
        echo "Hello";
        //same as:
        echo("Hello");
        ?>

        <?php
        echo "<h2>PHP is Fun!</h2>";
        echo "Hello Ayu Wulanadari!<br>";
        echo "NIM 202312065!<br>";
        echo "Pemrograman Web";
        ?>

        <?php
        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";

        echo "<h2>$txt1</h2>";
        echo "<p>Study PHP at $txt2</p>";
        ?>

        <?php
        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";

        echo '<h2>' . $txt1 . '</h2>';
        echo '<p>Study PHP at ' . $txt2 . '</p>';
        ?>

        <?php
        print "<h2>PHP is Fun!</h2>";
        print "Hello world!<br>";
        print "I'm about to learn PHP!";
        ?>

        <?php
        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";

        print "<h2>$txt1</h2>";
        print "<p>Study PHP at $txt2</p>";
        ?>

        <?php
        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";

        print '<h2>' . $txt1 . '</h2>';
        print '<p>Study PHP at ' . $txt2 . '</p>';
        ?>
    </body>
</html>
