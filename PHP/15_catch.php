<?php
  // 例外処理
  function div(Int $a, Int $b) {
    try {
      if ($b === 0) throw new Exception("cannot division error!");
      echo $a / $b;
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  div(4, 2);
  div(4, 0);

?>
