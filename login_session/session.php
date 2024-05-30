<?php
session_start();
if (isset($_SESSION['ID'])) {
  $id = $_SESSION['ID'];
}

if ($id == true) {
  header("location: welcome.php");
} else {
  header("location: index.php");

}

/*if(isset($id)){
  header("location: welcome.php");
}*/






$conn = new mysqli("localhost", "root", "", "form") or die("connection error: ".mysqli_connect_error());

if (isset($_POST['submit'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = md5($_POST['password']);




  $sql = "SELECT * FROM login WHERE user ='$username' && pass ='$password'";

  if (mysqli_query($conn, $sql)) {
    $query = mysqli_query($conn, $sql);
    if ($query) {
      $row = mysqli_num_rows($query);
      if ($row === 1) {
        header("location: welcome.php");
        $assoc = mysqli_fetch_assoc($query);

        session_start();
        $_SESSION['ID'] = $assoc['id'];
        $_SESSION['user'] = $assoc['user'];
        $id = $_SESSION['ID'];
      } else {

        $msg = "Incorrect method";
      }
    }

  }
}



?>