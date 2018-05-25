<?php include "header.php"?>
        <!-- contenido -->
        <div class="container-fluid contenido">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <form>
                        <div class="form-group">
                          <label for="exampleInputEmail1"></label>
                          <input type="email" class="form-control" id="email" placeholder="Correo electrónico o nombre de usuario">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1"></label>
                          <input type="password" class="form-control" id="password" placeholder="Contraseña">
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="recordarme">
                          <label class="form-check-label" for="recordarme">Recordarme</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Iniciar sesión</button>
                    </form>
                    <p class="text-center"><a href="#">¿Olvidaste tu nombre de usuario o contraseña?</a></p>
                    <p class="text-center"><a href="registrarse.html">¿No tienes cuenta? Regístrate</a></p>      
                </div>
            </div>
        </div>
        <!-- fin contenido -->
        <!-- Footer -->
         <?php include "footer.php"?>   
        <!-- Fin footer -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>