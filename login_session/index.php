<?php

session_start();
if (isset($_SESSION['ID'])) {
  $id = $_SESSION['ID'];
}
if (isset($id)) {
  header("location: welcome.php");
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="gray">
  <title>Login Session</title>
</head>

<body>

  <form action="session.php" method="post" autocomplete="off">
    <?php
    if (isset($msg)) {
      echo $msg;
    }
    ?>


    <label for="">Username:</label>
    <input type="text" name="username" id="" placeholder="username" />
  <br>

  <label for="">Password:</label>
  <input type="password" name="password" id="" placeholder="password" />
<br>
<input type="submit" name="submit" value="Login">
</form>
</body>

</html>