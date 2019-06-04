<?php
  // 使用例は、13_requireに記述
  namespace Dotinstall\lib;

  class User {
    public $name;

    function __construct(String $name = '') {
      $this->name = $name;
    }

    public function sayHello() {
      echo "Hello Dotinstall library man, $this->name!";
    }
  }

?>
