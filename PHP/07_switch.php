<?php
  // switchによる条件分岐
  $traffic_lights = "green";

  switch ($traffic_lights) {
    case "red":
      echo "stop!";
      break;
    case "blue":
    case "green":
      echo "go!";
      break;
    case "yellow":
      echo "caution";
      break;
    default:
      echo "wrong signal";
  }
?>
