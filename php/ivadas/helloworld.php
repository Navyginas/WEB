<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <!-- Komentaras -->
  <body>
    <?php
    // komentaras
    echo "<h1>Sveikas pasauli</h1>";
    $x = 5; // tipas number
    $y = 10; // tipas number
    $tekstas = "Šiandien pilnatis"; // tipas string
    echo $x + $y;
    echo "<br />".$tekstas;
    echo $x.$tekstas;
    echo "<br />";
    $x ++; //padidina vienetu
    echo $x + $y;
    $y --; //sumažina vienetu
    echo "<br />";
    echo $x + $y;
    echo "<br />";
    echo 5%2;
    // priskirimo operatoriai
    $suma = 0;
    $suma = $x + $y;
    echo "<br />";
    echo "Suma: ".$suma."EUR";
    $suma += 5;
  // galime ir taip rasyt  $suma = $suma +5;
    echo "<br />";
    echo "Suma: ".$suma."EUR";
    echo "<br />";
    $eilute = "Sveiki, ";
    $eilute .= "Jonai! ";
    echo $eilute;
    echo "Prieš tai spausdinau: $eilute";
    echo "<br />";
    echo "Ar skaitei knyga \"Kauliuku zmogus\"?";
        //escaping charakters
    echo "<br />";
    echo 'Ar skaitei knyga "Kauliuku zmogus"?';
    echo "<a href=\"http://www.vilnius.lt\">Vilnius</a>";
    echo <<<_MANO
      <h1>tekstas</h1>
      <h2>tekstas</h2>
      <h3>tekstas</h3>
_MANO;
      echo "<br />";
    ?>
  </body>
</html>
