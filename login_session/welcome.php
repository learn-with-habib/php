<?php


session_start();
$id = $_SESSION['ID'];
if($id == null){
  header("location: index.php");
  exit();
}

if(isset($_GET['adminlogout'])){
  if($_GET['adminlogout'] == 'logout'){
    session_destroy();
    unset($_SESSION['ID']);
    unset($_SESSION['user']);
    header("location: index.php");
    exit();
  }
}



?>
<h1><a href="?adminlogout=logout">logout</a></h1>



