<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vista/css/estilos.css">
    <link rel="stylesheet" href="vista/css/bootstrap.min.css">
    <link rel="icon" href="vista/imagenes/logoFlexmood2.png">
    <title>FlexMood</title>
</head>
<body>
  <!-- menu -->
  <nav class="navbar navbar-expand-lg container-fluid p-0 navbar-light bg-black sticky-top">
    <div class="container-fluid m-0 p-0">
      <a class="navbar-brand text-light ps-4 my-3" href="?peticion=inicio">
        <img src="vista/imagenes/logoFlexmood2.png" class="logo img-fluid" alt="logo">
      </a>
      <button class="navbar-toggler bg-danger me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class=" collapse navbar-collapse ps-3 text-start" id="navbarNav">
        <ul class="navbar-nav col menu-li" >
          <li class="nav-item ">
            <a class="nav-link text-light mx-2" aria-current="page" href="?peticion=inicio">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light mx-2" href=#Productos>Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light mx-2" href=#Contacto>Contacto</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link text-light mx-2" href="?peticion=servicio">Servicio</a>
          </li> -->

        </ul>
        <a href="#" class="d-lg-none ms-0 mb-3 p-0 rounded-3 d-flex align-items-center justify-content-center dl-cart" role="button" data-bs-toggle="button">
          <img src="vista/imagenes/cart.png" class="cart overflow-hidden" alt="">
        </a>  
      </div>
      
    </div>
  </nav>

<!-- Presentación -->
<header class="p-0 d-flex align-items-center bg-color" id="Inicio">
  <div class="h-100 d-inline-flex container-fluid justify-content-center align-items-center d-flex bg-color logo-cont">
    <div ><h1 class="text-light logo-nombre"><div class=""><img src="vista/imagenes/logoFlexmood2.png" class="p-4 logoPresentacion" alt="balonlogo"></div></h1></div>
    
  </div>
</header>

<!-- productos -->
<section class="d-flex justify-content-center" id="Productos">
  <div class=" container-lg container-md-fluid row p-0 productos-box">
    <!-- productos izq -->
    <aside class="col-lg-4 col-md-12 p-5 bg-dark offset-md-0 d-none d-md-inline ">
      <div class="text-center mb-5"><h2 class="text-light fs-1">Recomendado</h2></div>
      <div class="row g-4">
        <div class="col-lg-12 col-md-6 px-4 py-5 ">
          <div class="card overflow-hidden car-ind">
            <img src="vista/imagenes/Playera1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Playeras motivacionales</h5>
              <p class="card-text precio">$255</p>
              <button type="submit" class="btn btn-warning my-2">Comprar</button>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6 px-4 py-5 my-5">
          <div class="card overflow-hidden car-ind">
            <img src="vista/imagenes/Playera6.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Playeras con frases</h5>
              <p class="card-text precio">$200</p>
              <button type="submit" class="btn btn-warning my-2">Comprar</button>
            </div>
          </div>
        </div>
      </div>
    </aside>  
    <!-- productos der -->
    <article class="col-lg-8 p-5">
      <div class="text-center mb-5"><h2 class="text-light fs-1">Productos</h2></div>
      <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2   row-cols-lg-2 g-4">
        <div class="col p-5">
          <div class="card overflow-hidden car-ind">
            <img src="vista/imagenes/Playera2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Playera sin limites</h5>
              <p class="card-text precio">$255</p>
              <button type="submit" class="btn btn-warning my-2">Comprar</button>
            </div>
          </div>
        </div>
        <div class="col p-5">
          <div class="card overflow-hidden car-ind">
            <img src="vista/imagenes/Playera3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Playera de gorila</h5>
              <p class="card-text precio">$255</p>
              <button type="submit" class="btn btn-warning my-2">Comprar</button>
            </div>
          </div>
        </div>
        <div class="col p-5">
          <div class="card overflow-hidden car-ind">
            <img src="vista/imagenes/Playera4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Playera bonitos ojos</h5>
              <p class="card-text precio">$200</p>
              <button type="submit" class="btn btn-warning my-2">Comprar</button>
            </div>
          </div>
        </div>
        <div class="col p-5">
          <div class="card overflow-hidden car-ind">
            <img src="vista/imagenes/Playera5.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Playera y la queso</h5>
              <p class="card-text precio">$200</p>
              <button type="submit" class="btn btn-warning my-2">Comprar</button>
            </div>
          </div>
        </div>
      </div>
    </article>
  </div>
</section>

<!-- contacto -->
<section class="container-lg contacto pb-4" id="Contacto">
  <article class="row">
    <!-- formulario -->
    <div class="container-lg col-6 my-4 contacto-box">
      <h2 class="header-h text-center text-light rounded my-4 fs-1">Contáctanos</h2>
      <form action="" id="contactoForm">
        <div class=" row">
          <div class="col-md-5">
            <input type="text" class="form-control" placeholder="Nombre" required>
          </div>
          <div class="col">
            <input type="email" class="form-control" placeholder="Correo" required>
          </div> 
        </div><br>
          <div class="form-row">
            <textarea class="form-control" placeholder="ingresa tu comentario"></textarea>
          </div> <br>
          <div class="form-row text-center">
            <button type="submit" class="btn btn-danger my-2">Enviar</button>
          </div>
      </form>
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
            <p class="text-light">Buscamos ofrecerle un producto único, con diseños nuevos que den motivación día a día.
              Si tiene sugerencias o dudas no dude en contactarnos
            </p>
          </div>
          <div class="col-6 text-center">
            <a href="./html/servicio.html" class="text-decoration-none"><h3 class="fs-2">  </h3></a>
            <a href="./html/contacto.html" class="text-decoration-none"><h3 class="fs-2"> </h3></a>
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