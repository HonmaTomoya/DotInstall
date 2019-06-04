<?php
  // require: fatal error
  // required_once:

  // include: warning
  // include_once

  // autoload

  require("12_class.php");

  $user = new User("cocacola", "cola@pepsi.com");
  // echo $user->name; // protectedで宣言されたプロパティのため、参照できない
  $user->sayHello();

  // 14_namespace.phpで定義した名前空間配下を読み込む
  require("14_namespace.php");
  use Dotinstall\Lib as Lib;
  $dot_user = new Lib\User("sample");
  $dot_user->sayHello();
?>
