<?php
#conexion
include("conexion.php");

#Crear tabla
$solicitud = "CREATE TABLE datos (
  ID int NOT NULL AUTO_INCREMENT,
  Nombre varchar(15),
  Apellido varchar(15),
  Edad int,
  Celular int,
  PRIMARY KEY(ID)
)";
$resultado = mysqli_query($conexion, $solicitud);

#Insercion
$solicitudInsert = "INSERT INTO datos (Nombre, Apellido, Edad, Celular)
VALUES('$nombre', '$apellido', '$edad', '$celular')";
$resultadoInsert = mysqli_query($conexion, $solicitudInsert);

#Consulta
$solicitudRead = $"SELECT * FROM datos";
$resultadoRead = mysqli_query($conexion, $solicitudRead);

#Vaciado de datos en un arreglo de arreglos
$arrayDatos = [];
while($fila = mysqli_fetch_array($resultadoRead)){
  $arrayFila = ($fila['Nombre'], $fila['Apellido'], $fila['Edad'], $fila['Celular']);
  array_push($arrayDatos, $arrayFila);
}

#Eliminar registro
$solicitudEliminar = "DELETE FROM datos WHERE ID=$id";
$resultadoEliminar = mysqli_query($conexion, $solicitudEliminar);

#Editar registro
$solicitudEditar = "UPDATE datos SET Nombre='$nombre', Apellido='$apellido', Edad='$edad', Celular='$Celular'
WHERE ID=$id";
$resultadoEditar = mysqli_query($conexion, $solicitudEditar);
?>
