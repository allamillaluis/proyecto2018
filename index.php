<?php
require_once "basedatos.php";
require_once "clases/Producto.php";
require_once "header.php";
?>
    <div class="container">
    <!-- Contenido de la pagina -->
      <div class="row">
        <div class="col l12">
          <h5 class="grey-text">Puede llegar a interesarte</h5>          
        </div>  
      </div>
      <div class="row">
      <?php
        /* Generar lista de productos*/
        while ($producto = $listaProductosStmt->fetch()) {
            // acá tenemos que instanciar los objetos
            $nuevoProducto = new app\clases\Producto($producto['nombre_producto'], $producto['descripcion_producto'], $producto['precio_producto'], $producto['codigo_producto'], $producto['imagen_producto'], $producto['id']);
        
            echo "<div class='col l3 s6'>
                    <div class='card'>
                      <div class='card-image waves-effect waves-block waves-light'>
                        <img class='activator' src='img/{$producto['imagen_producto']}.jpg'>
                      </div>
                      <div class='card-content'>
                        <p class='card-title grey-text text-darken-4'>{$producto['nombre_producto']}</p>
                        <p class='green-text text-accent-4'>$ {$producto['precio_producto']}</p>
                      </div>
                    </div>
                  </div>";
        }//fin while
      ?>
      </div>
  </div>
  <?php include 'footer.php'?>