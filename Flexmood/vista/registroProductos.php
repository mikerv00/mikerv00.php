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

<!-- Direccion -->
<section class="container-lg h-50 d-flex justify-content-center productos-box" id="Productos">
  <article class="d-block">
    <h2 class="fs-1 text-light mt-4 ps-4">Registrar productos</h2>
    <div class="row gx-5 d-md-flex justify-content-center">
    <form class="" action="" method="post" enctype="multipart/form-data">
          <div class="col offset-md-1">
            <div class="row my-3">
              <div class="col-3"><p class="text-light fs-5">Modelo</p></div>
              <div class="col-9">
                <input type="text" name="modelo" placeholder="Introduce el modelo">
              </div>
            </div>
            <div class="row my-3">
              <div class="col-3"><p class="text-light fs-5">Nombre</p></div>
              <div class="col-9">
                <input type="text" name="nombre" placeholder="Introduce tu nombre">
              </div>
            </div><br>
            <div class="row my-3">
              <div class="col-3"><p class="text-light fs-5">Descripcion</p></div>
              <div class="col-9">
                <input type="text" name="descripcion" cols="30" rows="10" placeholder="Descripción">
              </div>
            </div><br>
            <div class="row my-3">
              <div class="col-3"><p class="text-light fs-5">Precio</p></div>
              <div class="col-9">
                <input type="number" name="precio" placeholder="precio">
              </div>
            </div><br>
            <div class="row my-3">
              <div class="col-3"><p class="text-light fs-5">Stock</p></div>
              <div class="col-9">
                <input type="number" name="stock" placeholder="stock">
              </div>
            </div><br>
            <div class="row my-3">
              <div class="col-3"><p class="text-light fs-5">Foto</p></div>
              <div class="col-9">
                <input type="file" name="foto" placeholder="foto" class="text-light fs-6">
              </div>
            </div><br>

            <div class="col-12 text-center my-3">
              <div class="col-6 text-center d-inline mx-2">
                <input type="hidden" name="peticion" value="guardarProducto">
                <input type="submit"  value="registroProducto">  
              </div>
              
            </div>
            <div class="col-12 text-center my-3">
              <div class="col-6 text-center d-inline mx-2">
                <p class="text-light fs-5">
              <?php
                if(isset($nombre)){
                    if($datos){
                        echo 'Tu registro se ha realizado con éxito';
                    }else{
                        echo 'Lo sentimos no hemos podido realizar tu registro';  
                    }
                }
                ?>
                </p>
              </div>
            </div>
            
          </div>
      </form>
    <!-- <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="modelo" placeholder="Introduce el modelo">
        <input type="text" name="nombre" placeholder="Introduce tu nombre">
        <input type="text" name="descripcion" cols="30" rows="10" height="200px" placeholder="Descripción">
        <input type="number" name="precio" placeholder="precio">
        <input type="number" name="stock" placeholder="stock">
        <input type="file" name="foto" placeholder="foto">

        <input type="hidden" name="peticion" value="guardarProducto">
        <input type="submit"  value="Guardar">  
        </form> -->
    </div>
  </article>
</section>
   
</body>
<script src="vista/js/bootstrap.min.js"></script>
</html>