<?php
session_start();
$solicitud = fopen("mensajesContacto.txt", "a+") or die("No se pudo abrir para escribir");

fwrite($solicitud, "Usuario:". $_SESSION['usuario']."\r\n");
fwrite($solicitud, "Fecha:". getdate()['mday']."/".getdate()['mon']."/".getdate()['year']."\r\n");
fwrite($solicitud, "Asunto: ". $_POST['asunto']."\r\n");
fwrite($solicitud, "Mensaje:". $_POST['mensaje']."\r\n \r\n");

fclose($solicitud);
$_SESSION['mensajeEnviado'] = true;
header("location: contacto.php");
 ?>
