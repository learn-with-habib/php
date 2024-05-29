<?php
if (isset($_COOKIE["cookie"])) {
  header("location: welcome.php");
}

?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="red">
  <title>Login Cookie</title>
</head>
<style>
</style>
<body>

  <form action="cookie.php" method="post" autocomplete="off" enctype="multipart/form-data">




    <label for="">Username:</label>
    <input type="text" name="username" id="" value="<?php echo"admin"; ?>" required="1" />
  <br>

  <label for="">Password:</label>
  <input type="password" name="password" id="" value="<?php echo"admin"; ?>" required="1" />
<br>
<input type="submit" name="submit" value="Login">
</form>
</body>

</html>