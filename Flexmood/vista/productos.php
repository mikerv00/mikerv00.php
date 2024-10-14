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

<!-- productos -->
<section class="container-lg d-flex justify-content-center productos-box" id="Productos">
<article class="d-block">
  <div class="d-block">
      <div class="d-flex justify-content-center">
        <h2 class="text-center mt-3 fs-1">Jerseys</h2>
      </div>
        <!-- productos-->
    <div id="carouselControls-1" class="carousel slide d-none d-md-block my-5" data-bs-ride="carousel-1">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row d-flex justify-content-center">
            <div class="col-3 ">
              <div class="card overflow-hidden">
                <img src="vista/imagenes/jersey4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Jersey Paris Saint Germain 22/23</h5>
                  <p class="card-text">$1650</p>
                </div>
              </div>
            </div>
            <div class="col-3 ">
              <div class="card overflow-hidden">
                <img src="vista/imagenes/jersey6.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Jersey Real Madrid Dama</h5>
                  <p class="card-text">$1355</p>
                </div>
              </div>
            </div>
            <div class="col-3 ">
              <div class="card overflow-hidden">
                <img src="vista/imagenes/jersey5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Jersey Manchester United</h5>
                  <p class="card-text">$1240</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item"> 
          <div class="row d-flex justify-content-center">
            <div class="col-3 ">
              <div class="card overflow-hidden">
                <img src="vista/imagenes/jersey.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Jersey Real Madrid 22/23</h5>
                  <p class="card-text">$1400</p>
                </div>
              </div>
            </div>
            <div class="col-3 ">
              <div class="card overflow-hidden">
                <img src="vista/imagenes/jersey3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Jersey Selección Mexicana</h5>
                  <p class="card-text">$1650 MXN</p>
                </div>
              </div>
            </div>
            <div class="col-3 ">
              <div class="card overflow-hidden">
                <img src="vista/imagenes/jersey2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Jersey bayern Munich 22/23</h5>
                  <p class="card-text">$1369</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls-1" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselControls-1" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div> 
  </div>

  <div>
  <div id="carouselControls-1b" class="carousel slide d-block d-sm-block d-md-none my-4" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="d-flex justify-content-center">
            <div class="card col-6">
              <img src="vista/imagenes/jersey3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Jersey Selección Mexicana</h5>
                <p class="card-text">$1650</p>
              </div>
            </div>
          </div>
      </div>
      <div class="carousel-item">
        <div class="d-flex justify-content-center">    
          <div class="card col-6">
            <img src="vista/imagenes/jersey6.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Jersey Real Madrid Dama</h5>
              <p class="card-text">$1355</p>
            </div>
          </div>
        </div> 
      </div>
      <div class="carousel-item">
        <div class="d-flex justify-content-center">    
          <div class="card col-6">
          <img src="vista/imagenes/jersey5.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Jersey Paris Saint Germain 22/23</h5>
            p class="card-text">$1650</p>
          </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="d-flex justify-content-center">    
          <div class="card col-6">
          <img src="vista/imagenes/jersey.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Jersey Real Madrid 22/23</h5>
            <p class="card-text">$1400</p>
          </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="d-flex justify-content-center">    
          <div class="card col-6">
          <img src="vista/imagenes/jersey4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Jersey Paris Saint Germain 22/23</h5>
            <p class="card-text">$1650</p>
          </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="d-flex justify-content-center">    
          <div class="card col-6">
          <img src="vista/imagenes/jersey2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Jersey bayern Munich 22/23</h5>
            <p class="card-text">$1369</p>
          </div>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls-1" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselControls-1b" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>



<!-- Tachones -->
<div class="d-block">
    <div class="d-flex justify-content-center">
      <h2 class="text-center mt-3 fs-1">Tachones</h2>
    </div>
        <!-- productos-->
    <div id="carouselControls-2" class="carousel slide d-none d-md-block my-5" data-bs-ride="carousel-2">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row d-flex justify-content-center">
            <div class="col-3 ">
              <div class="card overflow-hidden">
                <img src="vista/imagenes/tachos.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Tachones blancos</h5>
                  <p class="card-text">$737</p>
                </div>
              </div>
            </div>
            <div class="col-3 ">
              <div class="card overflow-hidden">
                <img src="vista/imagenes/tachos2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Tenis Fut 7</h5>
                  <p class="card-text">$499</p>
                </div>
              </div>
            </div>
            <div class="col-3 ">
              <div class="card overflow-hidden">
                <img src="vista/imagenes/tachos3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Tachones Terreno Firme</h5>
                  <p class="card-text">$1140</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item"> 
          <div class="row d-flex justify-content-center">
            <div class="col-3 ">
              <div class="card overflow-hidden">
                <img src="vista/imagenes/tachos4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Tachones Predator</h5>
                  <p class="card-text">$2900</p>
                </div>
              </div>
            </div>
            <div class="col-3 ">
              <div class="card overflow-hidden">
                <img src="vista/imagenes/tachos5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Tachones negros pirma</h5>
                  <p class="card-text">$1099</p>
                </div>
              </div>
            </div>
            <div class="col-3 ">
              <div class="card overflow-hidden">
                <img src="vista/imagenes/tachos6.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Nike Mercurial Superfly</h5>
                  <p class="card-text">$5799</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls-2" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselControls-2" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div> 
</div>
<div>
  <div id="carouselControls-2b" class="carousel slide d-block d-sm-block d-md-none my-4" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="d-flex justify-content-center">
            <div class="card col-6">
              <img src="vista/imagenes/tachos.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Tachones blancos</h5>
                <p class="card-text">$737</p>
              </div>
            </div>
          </div>
      </div>
      <div class="carousel-item">
        <div class="d-flex justify-content-center">    
          <div class="card col-6">
            <img src="vista/imagenes/tachos2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Tenis Fut 7</h5>
              <p class="card-text">$499</p>
            </div>
          </div>
        </div> 
      </div>
      <div class="carousel-item">
        <div class="d-flex justify-content-center">    
          <div class="card col-6">
          <img src="vista/imagenes/tachos3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tachones Terreno Firme</h5>
            <p class="card-text">$1140</p>
          </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="d-flex justify-content-center">    
          <div class="card col-6">
          <img src="vista/imagenes/tachos4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tachones Predator</h5>
            <p class="card-text">$2900</p>
          </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="d-flex justify-content-center">    
          <div class="card col-6">
          <img src="vista/imagenes/tachos5.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tachones negros pirma</h5>
            <p class="card-text">$1099</p>
          </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="d-flex justify-content-center">    
          <div class="card col-6">
          <img src="vista/imagenes/tachos6.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nike Mercurial Superfly</h5>
            <p class="card-text">$5799</p>
          </div>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls-2b" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselControls-2b" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>



<!-- Accesorios -->
<div class="d-block">
  <div class="d-flex justify-content-center">
    <h2 class="text-center mt-3 fs-1">Accesorios</h2>
  </div>
      <!-- productos-->
  <div id="carouselControls-3" class="carousel slide d-none d-md-block my-5" data-bs-ride="carousel-3">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row d-flex justify-content-center">
          <div class="col-3 ">
            <div class="card overflow-hidden">
              <img src="vista/imagenes/ballon2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Balon Qatar 2022</h5>
                <p class="card-text">$450</p>
              </div>
            </div>
          </div>
          <div class="col-3 ">
            <div class="card overflow-hidden">
              <img src="vista/imagenes/espinilleras2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Espinilleras Everlesto</h5>
                <p class="card-text">$140</p>
              </div>
            </div>
          </div>
          <div class="col-3 ">
            <div class="card overflow-hidden">
              <img src="vista/imagenes/bag.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Maleta Real Madrid</h5>
                <p class="card-text">$1200</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item"> 
        <div class="row d-flex justify-content-center">
          <div class="col-3 ">
            <div class="card overflow-hidden">
              <img src="vista/imagenes/guantes.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Guantes Predator</h5>
                <p class="card-text">$279</p>
              </div>
            </div>
          </div>
          <div class="col-3 ">
            <div class="card overflow-hidden">
              <img src="vista/imagenes/ballon3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Balon Juventus</h5>
                <p class="card-text">$460</p>
              </div>
            </div>
          </div>
          <div class="col-3 ">
            <div class="card overflow-hidden">
              <img src="vista/imagenes/gorra.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Gorra Seleccion Argentina</h5>
                <p class="card-text">$1200</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls-3" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselControls-3" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> 
</div>
<div>
  <div id="carouselControls-3b" class="carousel slide d-block d-sm-block d-md-none my-4" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="d-flex justify-content-center">
            <div class="card col-6">
              <img src="vista/imagenes/ballon2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Balon Qatar 2022</h5>
                <p class="card-text">$450</p>
              </div>
            </div>
          </div>
      </div>
      <div class="carousel-item">
        <div class="d-flex justify-content-center">    
          <div class="card col-6">
            <img src="vista/imagenes/espinilleras2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Espinilleras Everlesto</h5>
              <p class="card-text">$140</p>
            </div>
          </div>
        </div> 
      </div>
      <div class="carousel-item">
        <div class="d-flex justify-content-center">    
          <div class="card col-6">
          <img src="vista/imagenes/bag.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Maleta Real Madrid</h5>
            <p class="card-text">$1200</p>
          </div>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls-3b" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselControls-3b" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    </button>
  </div>
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