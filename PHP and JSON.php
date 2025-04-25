<!DOCTYPE html>
<html>
  <body>
    <?php
    $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

    echo json_encode($age);
    ?>

    <?php
    $cars = array("Volvo", "BMW", "Toyota");

    echo json_encode($cars);
    ?>

    <?php
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    var_dump(json_decode($jsonobj));
    ?>

    <?php
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    var_dump(json_decode($jsonobj, true));
    ?>

    <?php
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    $obj = json_decode($jsonobj);

    echo $obj->Peter;
    echo $obj->Ben;
    echo $obj->Joe;
    ?>

    <?php
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    $arr = json_decode($jsonobj, true);

    echo $arr["Peter"];
    echo $arr["Ben"];
    echo $arr["Joe"];
    ?>

    <?php
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    $obj = json_decode($jsonobj);

    foreach($obj as $key => $value) {
      echo $key . " => " . $value . "<br>";
    }
    ?>

    <?php
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    $arr = json_decode($jsonobj, true);

    foreach($arr as $key => $value) {
      echo $key . " => " . $value . "<br>";
    }
    ?>

  </body>
</html>
