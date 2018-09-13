<?php

if ($_FILES['archivo']['error']> 0) {
  echo "Error: ". $_FILES['archivo']['error']. "<br>";
} else {
  echo "Nombre: ". $_FILES['archivo']['name'] ."<br>";
  echo "Tipo: " .  $_FILES['archivo']['type']. "<br>";
  echo "Tamano: " .  $_FILES['archivo']['size'] . "<br>";
  move_uploaded_file( $_FILES['archivo']['tmp_name'], "subidas/". $_FILES['archivo']['name']);
  echo "Almacenado en: subidas/". $_FILES['archivo']['name'];

}
echo "<br><a href=\"ejercicios.php\">Regresar</a>";

?>
