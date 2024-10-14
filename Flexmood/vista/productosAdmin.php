<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vista/css/estilos.css">
    <link rel="stylesheet" href="vista/css/bootstrap.min.css">
    <script src="vista/js/funciones.js"></script>
    <script src="vista/js/sha256.js"></script>
    <link rel="icon" href="vista/imagenes/balon.png">
    <title>FutMerch</title>
</head>
<body>

<!-- menu -->
<nav class="navbar navbar-expand-lg container-fluid p-0 navbar-light bg-black sticky-top">
  <div class="container-fluid m-0 p-0">
    <a class="navbar-brand text-light ps-4 my-3" href="?peticion=inicio">FutMerch
      <img src="vista/imagenes/balon.png" class="logo" alt="logo">
    </a>
    <button class="navbar-toggler bg-success me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class=" collapse navbar-collapse ps-3 text-start" id="navbarNav">
      <ul class="navbar-nav col menu-li" >
        <li class="nav-item ">
          <a class="nav-link text-light mx-2" aria-current="page" href="?peticion=perfilAdmin">Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light mx-2" href="?peticion=registroProducto">Registrar Producto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light mx-2" href="?peticion=productosAdmin">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light mx-2" href="?peticion=cerrar">Cerrar de Sesión</a>
        </li>
      </ul>
      <a href="#" class="d-lg-none ms-0 mb-3 p-0 rounded-3 d-flex align-items-center justify-content-center dl-cart" role="button" data-bs-toggle="button">
        <img src="vista/imagenes/cart.png" class="cart overflow-hidden" alt="">
      </a>  
    </div>
    <a href="#" class="d-sm-none d-md-none d-lg-flex p-0 m-0 d-none align-items-center justify-content-center d-cart" role="button" data-bs-toggle="button">
      <img src="vista/imagenes/cart.png" class="cart overflow-hidden" alt="">
    </a>
  </div>
</nav>

<section class="container-lg h-50 d-flex justify-content-center productos-box" id="Productos">
  <article class="d-block">
    <h2 class="fs-1 text-light mt-4 ps-4">Productos</h2>
    <div class="row gx-5 d-md-flex justify-content-center">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Cancelar</th>
          <th scope="col">Foto</th>
          <th scope="col">Modelo</th>
          <th scope="col">Nombre</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Precio</th>
          <th scope="col">Stock</th>
          <th scope="col">Modificar</th>
        </tr>
      <thead>
        <?php
          while ($producto = $datos->fetch_assoc()) {
            echo '<tr scope="row">
            <td> <a href="?peticion=cancelar&modelo=' .$producto['modelo'].'">
              <img class="icono" width="50" height="auto" src="vista/imagenes/cancelar.png"/>
            </a></td>
            <td><img width="50" height="auto" src="'.$producto['foto'].'" /></td>
            <td><span>'.$producto['modelo'].'</span></td>
            <td><span>'.$producto['nombre'].'</span></td>
            <td><span>'.$producto['descripcion'].'</span></td>
            <td><span>'.$producto['precio'].'</span></td>
            <td><span>'.$producto['stock'].'</span></td>
            <td><a href="?peticion=modificar&modelo='.$producto['modelo'].'">
              <img class="icono" width="50" height="auto" src="vista/imagenes/cambiar.png"/>
            </a></td>
          
            </tr>';
          }
        ?>
      </table>
    </div>
  </article>
</section>



   
</body>
<script src="vista/js/bootstrap.min.js"></script>
</html>