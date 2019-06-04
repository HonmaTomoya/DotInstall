<?php
  // 配列

  $sales = [
    "taguchi" => 200,
    "honma" => 300,
    "dotinstall" => 400,
  ];

  echo $sales["honma"];
  $sales["honma"] = 1000;
  echo $sales["honma"];

  foreach ($sales as $key => $value) {
    echo "$key: $value ";
  }

  $colors = ["red", "blue", "pink"];
  echo $colors[2];

  foreach ($colors as $value) {
    echo "$value ";
  }

  // コロン構文
  // for, foreach, while, if
  foreach ($colors as $value) :
    echo "$value ";
  endforeach
?>

<ul>
  <?php foreach ($colors as $value) : ?>
  <li><?php echo $value; ?></li>
  <?php endforeach ?>
</ul>
