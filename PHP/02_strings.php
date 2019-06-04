<?php
  /*
    文字列
  */

  $name = "tomoya honma";
  $s1 = "hello $name! \n hello again!";
  // $s1 = "hello {$name}! \n hello again!"; // 波括弧で変数を視認しやすく
  // $s1 = "hello ${name}! \n hello again!";
  $s2 = 'hello $name! \n hello again!';

  echo $s1 . $s2;
?>
