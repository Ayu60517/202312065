<!DOCTYPE html>
<html>
  <body>
    <?php
    function myMessage() {
      echo "Hello world!";
    }

    myMessage();
    ?>

    <?php
    function familyName($fname) {
      echo "$fname Refsnes.<br>";
    }

    familyName("Rina");
    familyName("Dani");
    familyName("Cinta");
    familyName("Dika");
    familyName("Sari");
    ?>

    <?php
    function setHeight($minheight = 60) {
      echo "The height is : $minheight <br>";
    }

    setHeight(300);
    setHeight();
    setHeight(130);
    setHeight(90);
    ?>

    <?php
    function sum($x, $y) {
      $z = $x + $y;
      return $z;
    }

    echo "5 + 15 = " . sum(5,15) . "<br>";
    echo "7 + 20 = " . sum(7,20) . "<br>";
    echo "20 + 4 = " . sum(20,4);
    ?>

    <?php
    function add_five(&$value) {
      $value += 5;
    }

    $num = 2;
    add_five($num);
    echo $num;
    ?>

    <?php
    function sumMyNumbers(...$x) {
      $n = 0;
      $len = count($x);
      for($i = 0; $i < $len; $i++) {
        $n += $x[$i];
      }
      return $n;
    }

    $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
    echo $a;
    ?>

    <?php
    function myFamily($lastname, ...$firstname) {
      $txt = "";
      $len = count($firstname);
      for($i = 0; $i < $len; $i++) {
        $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
      }
      return $txt;
    }

    $a = myFamily("Yasmin", "Jani", "Rania", "Dewi");
    echo $a;
    ?>

  </body>
</html>
