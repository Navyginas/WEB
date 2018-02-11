<?php
  $undecided = 3.14;
  echo "is".$undecided." a double?".is_double($undecided)."<br />";// slankiojo kalblelio Skaičius
  settype($undecided, 'string');
  echo "is".$undecided." a string?".is_string($undecided)."<br />";//sveikas Skaičius
  settype($undecided, 'integer');
  echo "is".$undecided."an integer?".is_integer($undecided)."<br />";//slankiojo kablelio Skaičius
  settype($undecided,'double');
  echo "is".$undecided." a double?".is_double($undecided)."<br />"; //slankiojo kablelio Skaičius
  settype($undecided,'bool');
  echo "is".$undecided."a boolean?".is_bool($undecided)."<br />"; // loginė reikšmė
 ?>
