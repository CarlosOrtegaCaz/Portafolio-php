<?php
session_start();

if (!isset($_SESSION['usuario'])) {
  header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="scripts/jquery.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title><?php switch (basename($_SERVER['PHP_SELF'])) {
      case 'home.php':
        echo "Home";
        break;
      case 'ejercicios.php':
        echo "Ejercicios";
        break;
      case 'contacto.php':
        echo "Contacto";
        break;
      default:
        echo "PHP";
        break;
    } ?></title>
    <style>
  .navbar {
    margin-bottom: 0;
    border-radius: 0;
  }

</style>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Portafolio PHP</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li <?php if ( basename($_SERVER['PHP_SELF']) == "home.php") {
          echo "class=\"active\"";
        } ?>><a href="home.php">Home</a></li>
        <li <?php if ( basename($_SERVER['PHP_SELF']) == "ejercicios.php") {
          echo "class=\"active\"";
        } ?>><a href="ejercicios.php">Ejercicios</a></li>
        <li <?php if ( basename($_SERVER['PHP_SELF']) == "contacto.php") {
          echo "class=\"active\"";
        } ?>><a href="contacto.php">Contacto</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><?php echo $_SESSION['usuario'] ?></a></li>
        <li><a href="logout.php">Log-out</a></li>
      </ul>
    </div>
  </div>
</nav>
