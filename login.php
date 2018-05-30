<?php include 'header.php'?>
    <div class="container">
    <!-- Contenido de la pagina -->
         <div class="row">
            <form class="col l6 s12 offset-l3">
              <div class="row">
                <div class="input-field col l12 s12">
                  <input  id="first_name" type="text" class="validate">
                  <label for="first_name">Nombre de usuario o email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col l12 s12">
                  <input id="password" type="password" class="validate">
                  <label for="password">Contraseña</label>
                </div>
              </div>
              <div class="row">
                <div class="col l12 s12">
                  <button class="btn waves-effect waves-light btn-large col s12" type="submit" name="action">Iniciar Sesion
                  </button>
                </div>
              </div>
              <div class="row">
                <div class="col l12 s12 center-align">
                     <a href="#">¿Olvidaste tu nombre de usuario o contraseña?</a>
                </div>
              </div>
              <div class="row">
                <div class="col l12 s12 center-align">
                     <a href="registrarse.php">¿No tienes cuenta? Regístrate</a>
                </div>
              </div>
            </form>
          </div>
    </div>
    <!-- Fin contenido de la pagina -->
    <?php include 'footer.php'?>