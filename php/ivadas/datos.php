<?php
//echo date("Y-m-d"); // 2018-01-30
$datalaikas = get_date_and_time();
echo $datalaikas;
function get_date_and_time(){
  return date("Y-m-d H:i:s");
}

 ?>
