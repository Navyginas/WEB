<?php
  $testing; // aprašoma, nepriskiriant reikšmės
  echo "is null?".is_null($testing); // patikrina, ar NULL
  echo "<br />";
  $testing = 5;
  echo "is an integer?".is_int($testing);  // potikrina, ar sveikas Skaičius
  echo "<br />";
  $testing = "five";
  echo "is a string?".is_string($testing); // patikrina, ar eilutė
  echo "<br />";
  $testing = 5.024;
  echo "is a double?".is_double($testing); //patikrina ar slankiojo kalblelio Skaičius
  echo "<br />";
  $testing = true;
  echo "is boolean?".is_bool($testing); // patikrina, ar loginė reikšmės
  echo "<br />";
  $testing = array('apple','orange','pear');
  echo "is an array".is_array($testing); //patikrina, ar masyvas
  echo "<br />";
  echo "is numeric?".is_numeric($testing); //patikrina, ar Skaičius
  echo "<br />";
  echo "is a resource?".is_resource($testing); // patikrina ar ištekliai
  echo "<br />";
  echo "is an array?".is_array($testing); // patikrina, ar masyvas
  echo "<br />";
 ?>
