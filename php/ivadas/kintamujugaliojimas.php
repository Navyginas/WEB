<?php

 $y = 10;
get_five($y);
function get_five($a){
  echo $a;
  $x = 5;
  return $x;
}
echo "<hr />";
static_example();
static_example();
static_example();
function static_example(){
  static $x = 0;
  $x++;
  echo $x;
  }
 ?>
