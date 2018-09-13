<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "ejemploBD";

$conexion= mysqli_connect($host, $user, $pass, $db);
mysqli_set_chartset($conexion, "utf8");
?>
