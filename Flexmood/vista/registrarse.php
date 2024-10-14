<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Agencia de marketing" />
    <meta name="keywords" content="FutMerch"/>
    <meta name="author" content="Miguel Rivera" />
    <title>FutMerch</title>     
    <link rel="stylesheet" href="vista/css/estilos.css">
    <link rel="stylesheet" href="vista/css/bootstrap.min.css">
    <script src="vista/js/funciones.js"></script>
    <script src="vista/js/sha256.js"></script>
    <link rel="icon" href="vista/imagenes/balon.png">
</head>
<body>
  <!-- navegacion-->
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
          <a class="nav-link text-light mx-2" aria-current="page" href="?peticion=inicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light mx-2" href="?peticion=productos">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light mx-2" href="?peticion=contacto">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light mx-2" href="?peticion=servicio">Servicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light mx-2" href="?peticion=iniciars">Iniciar Sesión</a>
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

<!--Registrarse-->
<section class="inic container-lg d-flex justify-content-center align-middle pt-1" id="iniciars">
  <article class="">
    <div class="col-lg-6 offset-lg-3 col-sm-6 offset-sm-3 col-md-6 offset-md-3 my-4 px-4 log">
    <h2 class="header-h text-center text-light rounded my-4 fs-1">Registrarse</h2>
      <form method="post" action="" enctype="multipart/form-data">
        <div class="row">
          <div class="row my-2">
            <div class="col-3"><p class="text-light fs-5">Nombre</p></div>
            <div class="col-9">
                <input name="nombre" type="text" placeholder="nombre" class="form-control" required>
            </div>
          </div>
          <div class="row my-2">
            <div class="col-3"><p class="text-light fs-5">Apellidos</p></div>
            <div class="col-9">
                <input name="apellidos" type="text" placeholder="apellidos" class="form-control" required>
            </div>
          </div>
          <div class="row my-2">
            <div class="col-3"><p class="text-light fs-5">Correo</p></div>
            <div class="col-9">
                <input type="email" name="correo" class="form-control" placeholder="Correo" required>
            </div>
          </div>
          <div class="row my-2">
            <div class="col-3"><p class="text-light fs-5">Contraseña</p></div>
            <div class="col-9">
                <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" required>
            </div>
          </div>
          <div class="row my-2">       
          </div>
          <div class="row my-3">
            <div class="col-12 text-center"><p class="text-light fs-5">Sexo</p></div>
            <div class="offset-1 col-3" id="mujer">
              <label class="text-light fs-6">Mujer</label>
              <input type="radio" name="sexo" value="mujer">
            </div>
            <div class="offset-1 col-3" id="hombre">
              <label class="text-light fs-6">Hombre</label>
              <input type="radio" name="sexo" value="hombre">
            </div>
            <div class="offset-1 col-3" id="otro">
            <label class="text-light fs-6">Otro</label>
            <input type="radio" name="sexo" value="otro">
            </div>
          </div>
          <input type="hidden" name="peticion" value="guardarUsuario">
          <input class="col-6 offset-3 btn btn-light my-2" type="submit" value="Guardar">
        </div>
        </form>
        <p class="fs-5 text-center text-light my-2">   
    <?php
            if(isset($nombre)){
                if($datos){
                    echo 'Tu registro se ha realizado con éxito';
                }else{
                    echo 'No hemos podido realizar tu registro';  
                }
            }

            ?>
      </div>
    </article>
  </section> 
</body>
    <script src="vista/js/bootstrap.min.js"></script>
</html>