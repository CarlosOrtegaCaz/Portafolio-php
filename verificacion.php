<?php
$pass = "mexiconow";

session_start();

if($_POST['pass']==$pass){
  $_SESSION['usuario'] = $_POST['user'];
  $_SESSION["errorCred"] = false;
  header('location: home.php');
} else {
  $_SESSION['errorCred'] = true;
  header('location: index.php');
}
 ?>
