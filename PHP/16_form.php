<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $error_message = strlen($username) >= 8 ? "username must be 8 characters or less." : "";
  }
?>

<!DOCTYPE html>
<html lag="ja">
<head>
  <meta charset="utf-8">
  <title>Dotinstall-Check username</title>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="username" />
    <input type="submit" value="submit" />
    <?php if ($error_message) echo "<div>$error_message</div>" ?>
  </form>
</body>
</html>
