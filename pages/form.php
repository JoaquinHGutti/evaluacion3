<!DOCTYPE html>
<?php 
include("connection.php")
?>
<html lang="zxx">
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
                  <div>
                    <a class="navbar-brand" href="#"
                      > LircayHub
                    </a>
                  </div>
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
          <div class="row">
            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="aboutus-wrapper">
                    <h1 class="mt-5 text-center mb-5">
                      Aregar contenido
                    </h1>
                    <div class="row">
                      <div class="col-lg-12 mb-5 mb-sm-2">
                        <form action="save.php" method="POST">
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="form-group">
                              <select class="custom-select" name="tema">
                              <option selected>Seleccione tema</option>
                              <option value="1">Elecciones 2021</option>
                              <option value="2">Clasificatorias Qatar 2022</option>
                              <option value="3">Cambio climatico</option>
                              <option value="4">Energía renovable</option>
                              <option value="5">Ciencia de datos (IA/ML)</option>
                              <option value="6">Universo cinematografico</option>
                            </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="form-group">
                              <input                                       
                                type="text"
                                class="form-control"
                                id="revision"
                                aria-describedby="name"
                                placeholder="Su nombre *"
                                name="name" onsubmit="filtro()" >
                              </div>
                              <div class="form-group">
                                <input
                                  type="text"
                                  class="form-control"
                                  id="revision"
                                  aria-describedby="email"
                                  placeholder="Titulo del articulo *" name="titulo" onsubmit="filtro()"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                              <textarea
                                  class="form-control textarea"
                                  placeholder="Comentario *"
                                  id="revision" name="descripcion" onsubmit="filtro()"
                                ></textarea>

                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input
                                  type="text"
                                  class="form-control"
                                  id="revision"
                                  aria-describedby="email"
                                  placeholder="contenido *" name="contenido" onsubmit="filtro()"
                                />
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input
                                  type="text"
                                  class="form-control"
                                  id="revision"
                                  aria-describedby="email"
                                  placeholder="link de imagen *" name="contenido" onsubmit="filtro()"
                                />
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm-12">
                              <div class="form-group">
                                <button
                                  href="#"
                                  class="btn btn-lg btn-dark font-weight-bold mt-3" id="enviar" type="submit" name="enviar"
                                  >Publicar</a
                                > </button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
    <!-- inject:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->

    <script src="../assets/vendors/aos/dist/aos.js/aos.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="../assets/js/demo.js"></script>
    <script src="../assets/js/jquery.easeScroll.js"></script>
    <script src="../assets/js/revision.js"></script>

    <!-- End custom js for this page-->
  </body>
</html>
