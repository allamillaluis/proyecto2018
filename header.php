<!DOCTYPE html>
<html>
  <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css" />
       <!--Import style.css-->
      <link type="text/css" rel="stylesheet" href="css/style.css" />
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
       $(document).ready(function() {
              $('select').material_select();
       });
      </script>
      <title>Mi sistema</title>
  </head>

  <body> 
  <!--Navigation-->
    <div class="navbar-fixed">
      <nav class="teal darken-3">
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo">Mi sistema</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="registrarse.php">Registrarse</a></li>
            <li><a href="#">Listar Productos</a></li>
            <li><a href="login.php">Iniciar Sesion</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- End Navigation-->