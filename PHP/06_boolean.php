<?php
  /*
    真偽値
  */

  /*
    # falseになる場合
    String: 空, "0"
    Integer: 0, 0.0
    Boolean: false
    Array: 要素の数が0
    null
  */

  $x = 5;
  if ($x) {
    echo "Yes, That's true";
  }

  // 三項演算子
  $max = ($a > $b) ? $a : $b;

  if ($a > $b) {
    $max = $a;
  } else {
    $max = $b;
  }

?>
