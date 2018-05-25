<?php include "header.php"?>
        <!-- contenido -->
        <div class="container-fluid contenido">
            <div class="row">
                <div class="col-md-12">
                     <h4 class="text-center">Cargar nuevo producto</h4>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                     <img class="img-fluid" src="img/img.svg" alt="">
                      <form>
                      <div class="form-group">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                      </div>
                    </form>
                </div>
                <div class="col-md-9">
                    <form>
                        <div class="row">
                            <div class="form-group col-md-8">  
                                <input type="text" class="form-control" placeholder="Nombre">
                            </div>   
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" placeholder="Codigo"> 
                            </div>
                        </div>    
                        <div class="row">
                            <div class="form-group col-md-6">  
                                <input type="text" class="form-control" placeholder="precio">
                            </div>   
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="stock"> 
                            </div>
                        </div>    
                        <div class="form-group">
                            <label for="descripcion">Descripcion del producto</label>
                            <textarea class="form-control" id="descripcion" rows="3"></textarea>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <select id="inputState" class="form-control">
                                    <option selected>Categoria</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>    
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Cargar producto</button>
                    </form>  
                    
                </div>    
            </div>
        </div>
        <!-- fin contenido -->
        <!-- Footer -->
         <?php include "footer.php"?>   
        <!-- Fin footer -->
        <!-- Separar -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>