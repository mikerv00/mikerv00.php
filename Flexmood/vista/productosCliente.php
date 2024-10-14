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
          <a class="nav-link text-light mx-2" aria-current="page" href="?peticion=perfilCliente">Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light mx-2" href="?peticion=productosCliente">Productos</a>
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

<!-- Galería -->
<section class="container-lg h-50 d-flex justify-content-center productos-box" id="Productos">
  <article class="d-block" style="height: auto;">
    <h2 class="fs-1 text-light text-center mt-4 ps-4">Productos</h2>
    <div class="row gx-5 d-md-flex justify-content-center">

    <?php
          while ($producto = $datos->fetch_assoc()) {
            echo '<div class="card m-3 p-3" style="width: 18rem;">
            <img class="p-1 overflow-hidden imgGaleria" src="'.$producto['foto'].'">
            <h6 class="card-title">'.$producto['nombre'].'</h6>
            <span class="card-text">'.$producto['modelo'].'</span>
            </div>';
          }
        ?>
    </div>
  </article>
</section>



   
</body>
<script src="vista/js/bootstrap.min.js"></script>
</html>