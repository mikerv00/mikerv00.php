<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vista/css/estilos.css">
    <link rel="stylesheet" href="vista/css/bootstrap.min.css">
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

<!-- Suscribete -->
<section class="container-lg d-flex justify-content-center productos-box" id="Productos">
  <article class="">
      <div class="col-lg-4 offset-lg-4 col-sm-6 offset-sm-3 col-md-6 offset-md-3 my-4 px-4">
      <h2 class="header-h text-center text-light rounded my-4 fs-1">Suscríbete</h2>
      <form action="" id="SuscripcionForm">
          <div class="row">
              <div class="col-3"><p>Nombre</p></div>
              <div class="col-9">
                  <input type="text" class="form-control" placeholder="Nombre" required>
              </div>
              <div class="col-3"><p>Apellidos</p></div>
              <div class="col-9">
                  <input type="text" class="form-control" placeholder="Apellidos" required>
              </div>
              <div class="col-3"><p>Correo</p></div>
              <div class="col-9">
                  <input type="email" class="form-control" placeholder="Correo" required>
              </div> 
          </div><br>
          <div class="form-row text-center">
              <button type="submit" class="btn btn-light my-2">Suscribirse</button>
          </div>
      </form>
      </div>
  </article>
</section>

<!-- devoluciones -->
<section class="container-lg contacto2 pb-4" id="Contacto">
  <article class="row">
    <div class="container-lg col-6 my-4 text-light">
      <h2 class="header-h text-center text-light rounded my-4 fs-1">Devoluciones</h2>
      <p>
        Podrá realizar su devolución siempre y cuando cumpla con los siguientes
        requisitos:
      </p>
      <p>
        1- Los Jerseys Personalizados sólo pueden devolverse si cuentan con un error de
        impresión ocasionado por nuestro personal.
      </p>
      <p>
        2- Si el producto participó en una promoción, deben devolverse todas las piezas
        involucradas en la promoción.
      </p>
      <p>
        3- Si cuenta con defecto de fabricación podrá solicitarse una devolución dentro de
        los primeros 30 días una vez que se haya recibido el producto. Está sujeto a
        aprobación por parte del Centro de Atención a Clientes.
      </p>
      <p>
        3- Si aún tu producto no se envia puedes cancelarlo comunicándote con nosotros.
      </p>
    </div>
  </article>
</section>

<!-- footer -->
    <footer class="container-fluid row bg-black m-0 p-0" id="Redes">
      <section class="container-lg row m-0 p-0">
        <article class="col-lg-8 d-md-0 d-lg-inline my-4 ps-4 d-none">
          <div class="row justify-content-around">
            <div class="col-6">
              <h2 class=" fs-2">Acerca de nosotros</h2>
              <p class="text-light">Buscamos ofrecerle los productos de marcas originales de futbol hasta su hogar.
                Si tiene sugerencias o dudas no dude en contactarnos
              </p>
            </div>
            <div class="col-6 text-center">
                <a href="../html/servicio.html" class="text-decoration-none"><h3 class="fs-2"> Servicio </h3></a>
                <a href="../html/contacto.html" class="text-decoration-none"><h3 class="fs-2"> Contacto</h3></a>
            </div>
          </div>
        </article>
        <aside class=" col-lg-4 col-md-12 py-5 m-0 d-flex align-items-center justify-content-center redesC">
          <div class="text-center">
            <h2 class="text-light m-3 fs-2" >Redes</h2>
            <div class="d-inline-flex">
             <a href="" class="mx-3"><img src="vista/imagenes/facebook.svg" alt=""></a>
             <a href="" class="mx-3"><img src="vista/imagenes/twitter.svg" alt=""></a>
             <a href="" class="mx-3"><img src="vista/imagenes/instagram.svg" alt=""></a>
            </div>
          </div>
        </aside>
      </section>
    </footer>
   
</body>
<script src="vista/js/bootstrap.min.js"></script>
</html>