<?php
  $color = get_traffic_light1(2);
  echo "<input style=\"background-color:$color\" value=\"sadsd\"  /><br />";

  $color1 = get_traffic_light2(1);
  echo "<input style=\"background-color:$color1\" value=\"sadsd\"  />";

  $color2 = get_traffic_light_fot_pedestrian(1);
  echo "<input style=\"background-color:$color1\" value=\"pestėsiems\"  />";
  // code 1 - raudona
  // code 1 - žalia
  // code 1 - geltona

function get_traffic_light1($code){
  if($code == 1){
    return "red";
  }
  elseif ($code ==2) {
    return "green";
  }
  else {
    return "yellow";
  }
}

function get_traffic_light2($code){
  switch ($code) {
    case 1:
      return "red";
      break;
    case 2:
      return "green";
      break;
    default:
      return "yallow";
      break;
  }
}
function get_traffic_light_fot_pedestrian($code){
  return $code == 1 ? "red" : "green";
}
 ?>
