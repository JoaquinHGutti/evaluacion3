<!DOCTYPE html>
<?php 
include("connection.php");
?>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>LircayHub</title>
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href=".././assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="../assets/vendors/aos/dist/aos.css/aos.css" />
    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- endinject -->
  </head>

  <body>
    <div class="container-scroller">
      <div class="main-panel">
        <!-- partial:../partials/_navbar.html -->
        <header id="header">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="navbar-top">
                <div class="d-flex justify-content-between align-items-center">
                  <ul class="navbar-top-left-menu">
                    <li class="nav-item">
                      <a href="./index-inner.html" class="nav-link">Advertise</a>
                    </li>
                    <li class="nav-item">
                      <a href="./aboutus.html" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Events</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Write for Us</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">In the Press</a>
                    </li>
                  </ul>
                  <ul class="navbar-top-right-menu">
                    <li class="nav-item">
                      <a href="#" class="nav-link"><i class="mdi mdi-magnify"></i></a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Sign in</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="navbar-bottom">
                <div class="d-flex justify-content-between align-items-center">
                  <H2>
                    <a class="navbar-brand" href="#">LIRCAYHUB</a>
                  </H2>
                  <div>
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                      class="navbar-collapse justify-content-center collapse"
                      id="navbarSupportedContent"
                    >
                    <ul
                        class="navbar-nav d-lg-flex justify-content-between align-items-center"
                      >
                        <li>
                          <button class="navbar-close">
                            <i class="mdi mdi-close"></i>
                          </button>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="elecciones.php">Elecciones 2021</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="sports.php">Clasificatorias Qatar 2022</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="cambio.php">Cambio climatico</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="energia.php">Energia renovable</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="ciencia.php">Ciencia de datos (IA / ML)</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="cine.php">Universo cinematografico</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="form.php">Subir contenido</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="debate.php">Debate</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <ul class="social-media">
                    <li>
                      <a href="#">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </header>

        <!-- partial -->
        <div class="flash-news-banner">
          <div class="container">
            <div class="d-lg-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center">
                <p class="mb-0">
                  LircayHub administracion del sistema, acá podra gestionar el contenido de la plataforma
                </p>
              </div>
              <div class="d-flex">
                <span class="mr-3 text-danger">Jueves, Diciembre 9, 2021</span>
                <span class="text-danger">30°C,Talca</span>
              </div>
            </div>
          </div>
        </div>
        <div class="content-wrapper">
          <div class="container">
            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <h1 class="font-weight-600 mb-4">
                        Universo cinematografico
                      </h1>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8">
                      <?php
                      $inc = include("connection.php");
                      if ($inc) 
                        { 
                          $consulta = "SELECT * FROM sports WHERE tema = 6 ORDER BY fecha DESC";
                          $resultado = mysqli_query($conection,$consulta);
                          if ($resultado) 
                            {
                              while ($row = $resultado->fetch_array()) 
                                {
                                  $titulo = $row['titulo'];
                                  $descripcion = $row['descripcion'];
                                  $contenido = $row['contenido'];
                                  $fecha = $row['fecha'];
                                  $name = $row['name'];
                                  $link = $row['link'];

                                  ?>
                      <div class="row">
                        <div class="col-sm-4 grid-margin">
                          <div class="rotate-img">
                          <img
                              src="<?php echo $link; ?>"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                        </div>
                        <div class="col-sm-8 grid-margin">
                          <h2 class="font-weight-600 mb-2">
                                <i class="fas fa-marker"></i> 
                                <i class="fas fa-marker"></i> 

                          <a href="<?php echo $contenido?>"><?php echo $titulo; ?></a>
                           
                          </h2>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2"><?php echo $fecha; ?> </span>Fecha publicacion
                          </p>
                          <p class="fs-15">
                            <h3>
                              <span class="mr-2"></span>Dice:
                              <?php echo $name; ?>
                            </h3>
                            <?php echo $descripcion; ?>
                          </p>
                        </div>          
                      </div>

                      <?php 
                    
                    }
                }
              }
                ?>
                    <!-- <div class="row">
                        <div class="col-sm-8 grid-margin">
                        <form method="POST" action="save_comentarios.php">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input name="nombre" required type="text" id="nombre"
                                class="form-control" placeholder="Tu nombre">
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea required placeholder="Escribe tu mensaje"
                                class="form-control" name="comentario" id="mensaje"
                                cols="30" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn-success btn" type="submit" name="enviar_comentarios">
                                Enviar
                            </button>
                        </div>
                          </form>
                        </div> 
                      </div> -->
                      <!--<div class="row">
                        <div class="col-sm-4 grid-margin">
                          <div class="rotate-img">
                            <img
                              src="../assets/images/magazine/Magzine_10.jpg"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                        </div>
                        <div class="col-sm-8 grid-margin">
                          <h2 class="font-weight-600 mb-2">
                            South Korea’s Moon Jae-in sworn in vowing to address
                          </h2>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Photo </span>10 Minutes ago
                          </p>
                          <p class="fs-15">
                            Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a
                            type specimen book.
                          </p>
                        </div>
                      </div> -->
                      <!--<div class="row">
                        <div class="col-sm-4 grid-margin">
                          <div class="rotate-img">
                            <img
                              src="../assets/images/magazine/Magzine_11.jpg"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                        </div>
                        <div class="col-sm-8 grid-margin">
                          <h2 class="font-weight-600 mb-2">
                            No charges over 2017 battle bus cases
                          </h2>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Photo </span>10 Minutes ago
                          </p>
                          <p class="fs-15">
                            Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a
                            type specimen book.
                          </p>
                        </div>
                      </div> -->
                      <!--<div class="row">
                        <div class="col-sm-4 grid-margin">
                          <div class="rotate-img">
                            <img
                              src="../assets/images/magazine/Magzine_12.jpg"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                        </div>
                        <div class="col-sm-8 grid-margin">
                          <h2 class="font-weight-600 mb-2">
                            Kaine: Trump Jr. may have committed treason
                          </h2>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Photo </span>10 Minutes ago
                          </p>
                          <p class="fs-15">
                            Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a
                            type specimen book.
                          </p>
                        </div>
                      </div> -->
                    </div>
                    <div class="col-lg-4">
                      <h2 class="mb-4 text-primary font-weight-600">
                        Latest news
                      </h2>
                      <?php
                      $inc = include("connection.php");
                      if ($inc) 
                        { 
                          $consulta = "SELECT * FROM sports ORDER BY fecha DESC";
                          $resultado = mysqli_query($conection,$consulta);
                          if ($resultado) 
                            {
                              while ($row = $resultado->fetch_array()) 
                                {
                                  $titulo = $row['titulo'];
                                  $descripcion = $row['descripcion'];
                                  $contenido = $row['contenido'];
                                  $fecha = $row['fecha'];
                                  ?>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="border-bottom pb-4 pt-4">
                            <div class="row">
                              <div class="col-sm-8">
                                <h5 class="font-weight-600 mb-1">
                                <?php echo $titulo; ?>
                                </h5>
                                <p class="fs-13 text-muted mb-0">
                                  <span class="mr-2"> <?php echo $fecha; ?></span>10 Minutes ago
                                </p>
                              </div>
                              <div class="col-sm-4">
                                <div class="rotate-img">
                                  <img
                                    src="../assets/images/magazine/Magzine_1.jpg"
                                    alt="banner"
                                    class="img-fluid"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php 
                    
                  }
              }
            }
              ?>
                     <!-- <div class="row">
                        <div class="col-sm-12">
                          <div class="border-bottom pb-4 pt-4">
                            <div class="row">
                              <div class="col-sm-8">
                                <h5 class="font-weight-600 mb-1">
                                  Premier League players join charity..
                                </h5>
                                <p class="fs-13 text-muted mb-0">
                                  <span class="mr-2">Photo </span>10 Minutes ago
                                </p>
                              </div>
                              <div class="col-sm-4">
                                <div class="rotate-img">
                                  <img
                                    src="../assets/images/magazine/Magzine_2.jpg"
                                    alt="banner"
                                    class="img-fluid"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> -->
                      <!--<div class="row">
                        <div class="col-sm-12">
                          <div class="pt-4">
                            <div class="row">
                              <div class="col-sm-8">
                                <h5 class="font-weight-600 mb-1">
                                  UK Athletics board changed stance on..
                                </h5>
                                <p class="fs-13 text-muted mb-0">
                                  <span class="mr-2">Photo </span>10 Minutes ago
                                </p>
                              </div>
                              <div class="col-sm-4">
                                <div class="rotate-img">
                                  <img
                                    src="../assets/images/magazine/Magzine_3.jpg"
                                    alt="banner"
                                    class="img-fluid"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> -->
                      <div class="trending"> <!-- TREENDING-->
                        <h2 class="mb-4 text-primary font-weight-600">
                          Trending
                        </h2>
                        <div class="mb-4">
                          <div class="rotate-img">
                            <img
                              src="../assets/images/magazine/Magzine_4.jpg"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                          <h3 class="mt-3 font-weight-600">
                            Chile principal lider en energia renovable
                          </h3>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Photo </span>10 Minutes ago
                          </p>
                        </div>
                        <div class="mb-4">
                          <div class="rotate-img">
                            <img
                              src="../assets/images/magazine/Magzine_5.jpg"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                          <h3 class="mt-3 font-weight-600">
                            Javier Naranjo, nuevo ministro de medio ambiente
                          </h3>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Photo </span>10 Minutes ago
                          </p>
                        </div>
                        <div class="mb-4">
                          <div class="rotate-img">
                            <img
                              src="../assets/images/magazine/Magzine_6.jpg"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                          <h3 class="mt-3 font-weight-600">
                            Novena edicion de FIDBA
                          </h3>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Photo </span>10 Minutes ago
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- partial:../partials/_footer.html -->
        <footer>
          <div class="footer-top">
            <div class="container">
              <div class="row">
                <div class="col-sm-5">
                  <h1>LircayHub</h1>
                  <h5 class="font-weight-normal mt-4 mb-5">
                    LircayHub tiene como propósito brindar a los usuarios una plataforma en la cual puedan compartir contenido, ademas de generar debates entre los participantes. 
                  </h5>
                  <ul class="social-media mb-3">
                    <li>
                      <a href="#">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-4">
                  <h3 class="font-weight-bold mb-3">Recien agregados</h3>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="footer-border-bottom pb-2">
                        <div class="row">
                          <div class="col-9">
                            <h5 class="font-weight-600">
                              Las siete ‘V’ del Big Data
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="footer-border-bottom pb-2 pt-2">
                        <div class="row">
                          <div class="col-9">
                            <h5 class="font-weight-600">
                            FIDBA: todo lo que hay que saber sobre la novena edición del festival especializado en cine documental
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div>
                        <div class="row">
                          <div class="col-9">
                            <h5 class="font-weight-600 mb-3">
                              Cotton import from USA to soar was American traders
                              predict
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <h3 class="font-weight-bold mb-3">CATEGORIAS</h3>
                  <div class="footer-border-bottom pb-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Elecciones 2021</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                  <div class="footer-border-bottom pb-2 pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Clasificatorias 2022</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                  <div class="footer-border-bottom pb-2 pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Cambio climatico</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                  <div class="footer-border-bottom pb-2 pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">energia renovable</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                  <div class="pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Ciencia de datos</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                  <div class="pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Universo cinematografico</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-bottom">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="d-sm-flex justify-content-between align-items-center">
                    <div class="fs-14 font-weight-600">
                      © 2021 @ <a href="#" target="_blank" class="text-white"> LircayHub</a>. Derechos reservados.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>
    <!-- inject:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->

    <script src="../assets/vendors/aos/dist/aos.js/aos.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="../assets/js/demo.js"></script>
    <script src="../assets/js/jquery.easeScroll.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>
