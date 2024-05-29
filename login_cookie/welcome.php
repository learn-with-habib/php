<?php
/*if (!isset($_COOKIE["user"])) {
  header("location: index.php");
}*/

if ($_COOKIE["cookie"] == null) {
  header("location: index.php");
  exit();
}

if (isset($_GET['adminlogout'])) {
  if ($_GET['adminlogout'] == "logout") {
    setcookie("cookie", $assoc['protected'], time() - (86400 * 30), "/");
    header("location: index.php");
    exit();
  }
}
?>



<h1><a href="?adminlogout=logout">logout</a></h1>