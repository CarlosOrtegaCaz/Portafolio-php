<?php require_once("header.php"); ?>
    <div class="container">
      <?php
        if (isset($_SESSION['mensajeEnviado']) && $_SESSION['mensajeEnviado']== true) {
          echo "<div class=\"well well-sm\">
                  Tu mensaje fue enviado
                </div>";
          $_SESSION['mensajeEnviado'] = false;
        }
       ?>
      <h3>Los mensajes se guardan en un txt en el servidor</h3>
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">
              <h2>Contactanos</h2>
          </div>
          <form class="panel-body" action="guardaMensajes.php" method="post">
            Asunto: <input type="text" name="asunto" class="form-control">
            Mensaje: <textarea  class="form-control" name="mensaje" rows="8" cols="80"></textarea>
            <input type="submit" name="enviar" class="btn btn-default pull-right">
          </form>
        </div>
      </div>



    </div>
<?php
require_once("footer.php");
 ?>
