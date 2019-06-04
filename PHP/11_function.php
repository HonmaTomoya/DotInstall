<?php
  declare(strict_types = 1);

  // 関数
  function sayHello (String $name = "default") {
    // echo "Hello ${name}!";
    return "Hello ${name}!";
  }

  // sayHello();
  // sayHello("Tomoya");

  var_export(sayHello());
  echo sayHello();

  // 計算
  $x = 5.6;
  echo ceil($x);
  echo floor($x);
  echo round($x);
  echo rand(1, 9);

  // 文字列
  $s1 = "hi";
  echo strlen($s1);
  echo mb_strlen($s1);
  printf("%s - %.3f", $s1, $x);
  echo sprintf("%s - %.2f", $s1, $x);

  // 配列
  $colors = ["red", "blue", "yellow"];
  echo count($colors);
  echo implode("/", $colors);

?>
