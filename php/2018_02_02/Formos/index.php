<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<<?php

//  print_r($_POST);
  $name = "";
  if(isset($_POST["name"])){
    $name = $_POST["name"];
  }

  $surname = "";
  if(isset($_POST["surname"])){
    $name = $_POST["surname"];
  }

  $gender = "";
  if(isset($_POST["gender"])){
    $name = $_POST["gender"];
  }
  if(isset($_POST["submit"]))
  $fh = fopen($name.".txt", "w");
  fwrite($fh, $name." ".$surname." ".$gender);
  fclose($fh);

 ?>

<fieldset>
  <legend>Forma</legend>
  <form class="" action="index.php" metod="get">
    <label>
      Vardas:
      <input type="text" name="name" />
    </label>
    <br>
    <label>
      Pavardė:
      <input type="text" name="surname" />
    </label>
    <br>
    <label>
      Lytis:
      <label>Vyras<input type="radio" name="gender" value="Vyras" /></label><br>
      <label>Moteris<input type="radio" name="gender" value="Moteris" /></label><br>
    <label>
    <br>
    <input type="submit" name="submit" value= "Siųsti">
  </form>
  </fieldset>

  </body>
</html>
