
<?php
require("header.php");
 ?>

<div class="container">
  <h3>Hola <?php echo $_SESSION['usuario']; ?> para entrar aqui se hizo uso de session</h3>
  <h4>Aqui abajo hay una lista con los archivos php utlizados en este portal</h4>
<br>
<h4>Paginas.php</h4>
<li>index.php - Inicio de session donde ingresas los datos para entrar al portal</li>
<li>home.php - Introduccion al portal</li>
<li>ejercicios.php - Aqui se encuetran diversas funciones y arreglos propios de php</li>
<li>contacto.php - Aqui se encuentra un formulario para dejar un mensaje guardado en el servidor</li>
<li>header.php - Aqui esta la cabezera que se utiliza a lo largo del portal con MVC</li>
<li>footer.php - Aqui esta el pie de pagina que se utiliza a lo largo del portal con MVC</li>

<h4>Scripts.php</h4>
<li>verificacion.php - Compara si el password es correcto y crea las variables necesarias
de la session</li>
<li>upload.php - script para mostrar la informacion del archivo subido y moverlo a una carpeta no temporal</li>
<li>guardaMensajes.php - A esta archivo llegan los datos del POST para ser guardados en un txt</li>
<li>conexion.php - Contiene la conexion a la base de datos. Por motivos practicos
  no esta instaciado en la pagina</li>
<li>crudSQL.php - COntiene las funciones basicas para utilizar bases de datos</li>
<li>logout.php - Aqui se realiza el procedimiento para salir de la session actual y redireccionarte a index.php</li>

</div>
<style media="screen">
  h3{
    margin-top: 30px;
  }
  li{
    margin-bottom: 7px;
  }
</style>
<?php require("footer.php"); ?>
