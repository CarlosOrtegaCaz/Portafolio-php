<?php

#arreglo para poblar tabla
$personas = [
  ["Edgar", "Hernandez", 22],
  ["Elvis", "Serna", 19],
  ["Bibiana", "Solis", 30],
  ["Samanta", "Martinez", 15]
];

#header
require_once("header.php");
 ?>
<div class="container">
  <?php
  $cadena = "esTo es Una caDena";
  $numero = 3.1416;
   ?>
  <h3>Funciones de strings</h3>
  <h4>Variable utilizada: $cadena = "<?php echo $cadena; ?>"</h4>
  <li>strtoupper: <?php echo strtoupper($cadena); ?> </li>
  <li>strtolower: <?php echo strtolower($cadena); ?></li>
  <li>ucfirst + strtolower: <?php echo ucfirst(strtolower($cadena)); ?></li>
  <li>ucwords + strtolower: <?php echo ucwords(strtolower($cadena)); ?></li>
  <li>strlen: <?php echo strlen($cadena); ?> -Cuenta el numero de caracteres</li>
  <li>strrev: <?php echo strrev($cadena); ?></li>

  <h3>Funciones numericos</h3>
  <h4>Variable utilizada: $numero <?php echo $numero; ?></h4>
  <li>is_int(3.1416):<?php echo is_int($numero); ?>  -Regresa vacio ya que es falso</li>
  <li>is_float(3.1416): <?php echo is_float($numero); ?> -Regresa 1 porque es verdadero</li>
  <li>is_numeric(3.1416): <?php echo is_numeric($numero); ?> -Regresa 1 porque es verdadero</li>
  <li>round(3.1416): <?php echo round($numero); ?> -Redondea un numero</li>
  <li>rand(1, 10): <?php echo rand(1, 10); ?> -Regresa un valor aleatorio entre 1 y 10</li>
  <li>min(3,2,4,1,5): <?php echo min(3,2,4,1,5); ?></li>
  <li>max(3,2,4,1,5): <?php echo max(3,2,4,1,5); ?></li>

  <h3>Fecha de hoy: <?php echo date('d - m - Y'); ?></h3>

  <h3>Funciones de arreglos</h3>
  <h4>Arreglo utilizado: $colores = ["rojo", "verde", "azul"]</h4>
  <?php  $colores = ["rojo", "verde", "azul"];?>
  <h4>Funcion utilizado para mostrar resultados: implode(", ",$colores)</h4>
  <li>count(): <?php echo count($colores); ?></li>
  <li>array_reverse(): <?php $reverse = array_reverse($colores); echo implode(", ",$reverse); ?></li>
  <li>array_push($colores,"morado"): <?php array_push($colores,"morado"); echo implode(", ",$colores);?></li>
  <li>array_pop($colores): <?php $colores = ["rojo", "verde", "azul"];
   array_pop($colores);
   echo implode(", ",$colores);?></li>
  <li>array_shift(): <?php $colores = ["rojo", "verde", "azul"];
    array_shift($colores);
    echo implode(", ",$colores);?></li>
  <li>array_unshift(): <?php $colores = ["rojo", "verde", "azul"];
     array_unshift($colores, "negro");
     echo implode(", ",$colores);?></li>


  <h4>Para ordenar</h4>
  <li>Asort(): <?php $colores = ["rojo", "verde", "azul"];
  Asort($colores);
  echo implode(", ", $colores);?></li>
  <li>arsort(): <?php  Arsort($colores);
    echo implode(", ", $colores);?></li>
    <li>ksort(): -Ordena ascendente con respecto al key</li>
    <li>krsort(): -Ordena descendente con respecto al key</li>

  <h3>Tabla poblada desde un arreglo</h3>
  <table class="table-hover table col-md-6">
   <thead>
     <tr>
       <th>Nombre</th>
       <th>Apellido</th>
       <th>Edad</th>
     </tr>
   </thead>
   <tbody>
      <?php
      $a = 0;
      $b = count($personas);

       while ($a < $b) {
         echo "<tr>
         <td>".$personas[$a][0]."</td>
         <td>".$personas[$a][1]."</td>
         <td>".$personas[$a][2]."</td>
         </tr>";
         $a++;
       }
       ?>
   </tbody>
  </table>

  <h3 class="text-center">Subir un archivo</h3>
  <h4 class="text-center">Menores a 2Mb</h4>

  <div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default">
      <div class="panel-heading">
        El archivo se subira en la carpeta subidas
      </div>
      <form class="panel-body" action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo" required>
        <input type="submit" name="Subir" class="btn btn-success pull-right" value="Subir">
      </form>

    </div>

  </div>

</div>
<style media="screen">
  h3{
    margin-top: 30px;
  }
  li{
    margin-bottom: 7px;
  }
  .panel {
    margin-bottom: 90px;
  }
</style>

<?php
require_once("footer.php") ?>
