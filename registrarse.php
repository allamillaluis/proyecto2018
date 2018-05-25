<?php include "header.php"?>
        <!-- contenido -->
        <div class="container-fluid contenido">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <h4 class="text-center">Registrarse</h4>
                    <form>
                        <div class="row">
                            <div class="form-group col-md-6">  
                                <input type="text" class="form-control" placeholder="Nombre">
                            </div>   
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Apellido"> 
                            </div>
                        </div>    
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nombre de usuario"> 
                        </div>
                        <div class="form-group"> 
                            <input type="email" class="form-control" id="email" placeholder="Correo electrónico">
                        </div>
                        <div class="form-group">                   
                            <input type="password" class="form-control" id="password" placeholder="Contraseña">
                        </div>
                        <div class="form-group">                   
                            <input type="password" class="form-control" id="password-confirm" placeholder="Confirmar contraseña">
                        </div>
                        <label>Domicilio</label>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Domicilio"> 
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <select id="inputState" class="form-control">
                                    <option selected>Provincia</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <select id="ciudad" class="form-control">
                                    <option selected>Ciudad</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>  
                        <label>Fecha de nacimiento</label>
                        <div class="row">    
                            <div class="form-group col-md-4">
                                <select id="dia" class="form-control">
                                    <option selected>dia</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <select id="mes" class="form-control">
                                    <option selected>mes</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <select id="anio" class="form-control">
                                    <option selected>año</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="form-group col-md-6">  
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">hombre</label>
                            </div>   
                            <div class="form-group col-md-6">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">mujer</label>
                            </div>
                        </div>  
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Registrarse</button>
                    </form>  
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