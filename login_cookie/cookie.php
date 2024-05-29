<?php

if (isset($_COOKIE["cookie"])) {
  $cookie = $_COOKIE["cookie"];
}
if ($cookie == true) {
  header("location: welcome.php");
} else {
  header("location: index.php");
}


$conn = mysqli_connect("localhost", "root", "", "form") or die("connection error: ".mysqli_connect_error());






if (isset($_POST['submit'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM `login` WHERE user ='$username' && pass ='$password'";

  if (mysqli_query($conn, $sql)) {
    $query = mysqli_query($conn, $sql);
  }
  if ($query) {
    $rows = mysqli_num_rows($query);
  }
  if ($rows === 1) {
    $assoc = mysqli_fetch_assoc($query);
    $array = mysqli_fetch_array($query);
    //COOKIE
    setcookie("cookie", $assoc['protected'], time() + (86400 * 30), "/");
    //86400sec = 1day

  } else {
    echo "login failed";
  }



}






?>