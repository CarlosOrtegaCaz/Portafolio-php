<?php
session_start();
if (!isset($_SESSION["errorCred"])) {
  $_SESSION["errorCred"] = false;
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="scripts/jquery.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Log in</title>
  </head>
  <body>
    <div class="container">

      <div class="col-md-6 col-md-offset-3" >
        <div class="panel panel-primary text-center">
          <div class="panel-heading">
            <h3>Log-in</h3>
          </div>

          <form class="panel-body" action="verificacion.php" method="post">

            Nombre de usuario <input type="text" required placeholder="Escribe tu nombre" class="form-control" name="user"> <br>
            Contrasena <input class="form-control" required placeholder="Escribe mexiconow" type="password" name="pass"> <br>
            <?php
            if ($_SESSION["errorCred"] == true) {
              echo "<p style='color:red'>Error en el password</p>";
              $_SESSION["errorCred"] = false;
            }

             ?>
            <input type="submit" class="btn btn-primary pull-right" name="Entrar">
            <p>pass: mexiconow</p>
          </form>
        </div>
      </div>

    </div>


  </body>
</html>
