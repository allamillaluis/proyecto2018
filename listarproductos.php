<?php include "header.php"?>
        <!-- contenido -->
        <div class="container-fluid contenido">

            <div class="row">
                <div class="col-md-4">
                    <!-- Categorias -->
                    <h4>Categorías</h4>
                    <div class="list-group">
                        <?php 
                            for ($i = 0; $i < 10; $i++) {
                                echo '<a href="#" class="list-group-item list-group-item-action">Una categoria</a>';
                            }
                        ?>
                    </div>
                    <!-- fin categorias -->
                </div>
                <div class="col-md-7">
                    <p class="font-italic">Resultados de la busqueda "algo que busque"</p>
                    <!-- item -->
                    
                    <?php
                    /* Generar lista de productos */
                     for ($i = 0; $i < 4; $i++) {
                         
                        echo ' <div class="row articulo rounded">
                                    <div class="col-md-4">
                                        <a href="#">
                                            <img class="img-fluid" src="img/img.svg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Nombre producto</h3>
                                        <p>$ precio producto</p>
                                        <a class="btn btn-primary" href="#">comprar</a>
                                    </div>
                                </div>';
                     }
                     ?>
                    <!--fin item -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Anterior</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Siguiente</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    
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