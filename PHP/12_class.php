<?php
  // クラス/インスタンス
  // 抽象クラス、インターフェースに関しては、下記URLを参考にすること
  // https://havelog.ayumusato.com/develop/php/e166-php-interface-abstract.html
  class User {
    // アクセス権
    // - private: そのクラス内からのみアクセス可能
    // - protected: そのクラス+親子クラス内からのみアクセス可能
    // - public: どこからでもアクセス可能

    // private $name; // AdminUserインスタンスは参照できない
    protected $name; // AdminUserインスタンスは参照できる
    // public $name; // AdminUserインスタンスは参照できる
    public $email;
    public static $count = 0;

    public function __construct(String $name, String $email) {
      $this->name = $name;
      $this->email = $email;
      self::$count++;
    }

    // finalで定義することで子クラスでオーバーライド不可にできる
    public function sayHello() {
      echo "Hello $this->name, Is this your email? : $this->email";
    }

    public static function getMessage() {
      echo "hello from User class!";
    }
  }

  class AdminUser extends User {
    public function sayHello() {
      echo "Hello again $this->name, You're Admin!";
    }
  }

  $user = new User("tomoya", "tomoya.honma@gmail.com");
  $admin = new AdminUser("otoko", "otoko.maeda@gmail.com");
  // echo "user: {$user->name}, email: {$user->email}";
  $user->sayHello();
  // echo $user->name; // cannot access error
  $admin->sayHello();


  User::getMessage();
  echo User::$count; // 2個インスタンスを作成しているため、2
?>
