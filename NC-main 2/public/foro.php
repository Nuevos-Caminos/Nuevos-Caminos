<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Foro</title>
    <meta name="format-detection" content="telephone=no" />
    <meta
      name="viewport"
      content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <!-- Stylesheets-->
    <link
      rel="stylesheet"
      type="text/css"
      href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400"
    />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/mapa.css" />
    <link rel="stylesheet" href="css/Publicacao.css" />
    <style>
      .ie-panel {
        display: none;
        background: #212121;
        padding: 10px 0;
        box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, 0.3);
        clear: both;
        text-align: center;
        position: relative;
        z-index: 1;
      }
      html.ie-10 .ie-panel,
      html.lt-ie-10 .ie-panel {
        display: block;
      }
    </style>
  </head>
  <body>
  <?php include 'src/includes/Navbar.php'; ?>
<!-- Foto em cima  -->
<section class="section bg-default text-center">
  <div class="parallax-container" data-parallax-img="images/foro.jpg">
    <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
      <div class="container">
        <h2 class="heading-2 oh font-weight-normal wow slideInDown">
          <span class="d-block font-weight-semi-bold"
            >Explora el Foro.</span>
        </h2>
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Home</a></li>
            <li class="active">Foro</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Foto em cima  -->

<div class="row">
</div>

      <!-- RD Google Map
      <section class="section section-fluid">
        <div
          class="google-map-container"
          data-zoom="5"
          data-icon="images/gmap_marker.png"
          data-icon-active="images/gmap_marker.png"
          data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45."
          data-styles='[{"featureType":"landscape","stylers":[{"hue":"#FFBB00"},{"saturation":43.400000000000006},{"lightness":37.599999999999994},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#FFC200"},{"saturation":-61.8},{"lightness":45.599999999999994},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":51.19999999999999},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":52},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#0078FF"},{"saturation":-13.200000000000003},{"lightness":2.4000000000000057},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#00FF6A"},{"saturation":-1.0989010989011234},{"lightness":11.200000000000017},{"gamma":1}]}]'
        >
          <div class="google-map"></div>
          <ul class="google-map-markers">
            <li
              data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45."
              data-description="9870 St Vincent Place, Glasgow"
            ></li>
          </ul>
        </div>
      </section> -->

      <!-- Inicio Forum -->
<section class="section section-sm section-last bg-default text-left">
  <div class="container">
    <article class="title-classic d-flex justify-content-between">
      <!-- Título -->
      <div class="title-classic-title justify-content-sm-start">
        <h3 class="title-with-line">Publicaciones</h3>
      </div>
      <!-- Botões e separador -->
      <div class="title-classic-buttons d-flex align-items-center">
        <!-- Botão de Nova Publicação -->
        <button class="btn-nova-publicacao btn-sm d-flex align-items-center me-2">
          <i class="fa fa-plus"></i> <!-- Usando a classe Font Awesome para o ícone -->
          <span class="ms-2">Nueva Publicación</span>
        </button>
        <!-- Separador -->
        <div class="separator"></div>
        <!-- Botão de Filtrar -->
        <button class="btn btn-primary dropdown-toggle btn-sm d-flex align-items-center ms-2" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-filter"></i> <!-- Usando a classe Font Awesome para o ícone -->
          <span class="ms-2">Filtrar</span>
        </button>
        <!-- Menu suspenso para filtros -->
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <li>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="checkbox1">
              <label class="form-check-label" for="checkbox1">Hogar</label>
            </div>
          </li>
          <li>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="checkbox2">
              <label class="form-check-label" for="checkbox2">Empleabilidad</label>
            </div>
          </li>
          <li>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="checkbox3">
              <label class="form-check-label" for="checkbox3">Consejos Diarios</label>
            </div>
          </li>
        </ul>
      </div>
    </article>
  </div>
</section>
<!-- Fim Forum -->

<!-- Publicações -->
<section class="publicacoes-container">
  <div class="publicacao">
    <img src="https://via.placeholder.com/300x150" alt="Imagem Publicação 1">
    <div class="publicacao-content">
      <span class="publicacao-category">Hogar</span>
      <h3 class="publicacao-title">Transforma Tu Espacio con Consejos de Decoración Sostenible</h3>
      <div class="publicacao-icons">
        <a class="icon-view" title="Visualizar">
          <i class="fas fa-eye"></i>
          <span class="icon-number">1500</span>
        </a>
        <a class="icon-comment" title="Comentarios">
          <i class="fas fa-comments"></i>
          <span class="icon-number">45</span>
        </a>
      </div>
      <p class="publicacao-text">Descubre cómo pequeños cambios pueden crear un ambiente más sostenible y acogedor. Conoce las últimas tendencias en decoración verde.</p>
      <a href="#">Leer Más</a>
    </div>
  </div>

  <div class="publicacao">
    <img src="https://via.placeholder.com/300x150" alt="Imagem Publicação 2">
    <div class="publicacao-content">
      <span class="publicacao-category">Empleabilidad</span>
      <h3 class="publicacao-title">Cómo Aumentar Tus Posibilidades en Entrevistas de Trabajo</h3>
      <div class="publicacao-icons">
        <a class="icon-view" title="Visualizar">
          <i class="fas fa-eye"></i>
          <span class="icon-number">2750</span>
        </a>
        <a class="icon-comment" title="Comentarios">
          <i class="fas fa-comments"></i>
          <span class="icon-number">56</span>
        </a>
      </div>
      <p class="publicacao-text">Descubre cómo prepararte para entrevistas de manera efectiva e impresionar a tus futuros empleadores. Consejos prácticos para destacar tus habilidades y experiencias.</p>
      <a href="#">Leer Más</a>
    </div>
  </div>

  <div class="publicacao">
    <img src="https://via.placeholder.com/300x150" alt="Imagem Publicação 3">
    <div class="publicacao-content">
      <span class="publicacao-category">Consejos Diarios</span>
      <h3 class="publicacao-title">5 Hábitos Diarios para Aumentar Tu Productividad</h3>
      <div class="publicacao-icons">
        <a class="icon-view" title="Visualizar">
          <i class="fas fa-eye"></i>
          <span class="icon-number">3200</span>
        </a>
        <a class="icon-comment" title="Comentarios">
          <i class="fas fa-comments"></i>
          <span class="icon-number">78</span>
        </a>
      </div>
      <p class="publicacao-text">Adopta hábitos simples que pueden transformar tu rutina y ayudarte a alcanzar tus objetivos más rápidamente. Consejos para una vida más productiva y equilibrada.</p>
      <a href="#">Leer Más</a>
    </div>
  </div>
</section>
<!-- Publicações --> <br><br>

      <!-- Footer-->
      <footer class="section footer-corporate context-dark">
        <div class="footer-corporate-inset">
          <div class="container">
            <div class="row row-40 justify-content-lg-between">
              <!-- Repartição 1-->
              <div class="col-sm-6 col-md-12 col-lg-3 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInRight" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">Contáctenos</h6>
                    <ul class="footer-contacts d-inline-block d-sm-block">
                      <li>
                        <div class="unit">
                          <div class="unit-left">
                            <span class="icon fa fa-envelope"></span>
                          </div>
                          <div class="unit-body">
                            <a class="link-aemail" href="mailto:#"
                              >nuevoscaminos.02@gmail.com</a>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Fim Repartição 1-->

              <!-- Repartição 2-->
              <div class="col-sm-6 col-md-5 col-lg-3 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInDown" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">
                      Preguntas frecuentes
                    </h6>

                    <article class="post post-minimal-2">
                      <p class="post-minimal-2-title">
                        <a href="#"
                          >¿Qué empleos están aumentando en Brasil?</a>
                      </p>
                    </article>

                    <article class="post post-minimal-2">
                      <p class="post-minimal-2-title">
                        <a href="#"
                          >¿Cómo hacer un CV aceptable?</a
                        >
                      </p>
                    </article>
                  </div>
                </div>
              </div>
              <!-- Fim Repartição 2-->
              
              <!-- Repartição 3-->
              <div class="col-sm-11 col-md-7 col-lg-5 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInLeft" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">Más links</h6>
                    <ul
                      class="row-6 list-0 list-marked list-marked-md list-marked-secondary list-custom-2">
                      <li><a href="sobre.html">Sobre nosotros</a></li>
                      <li><a href="#">Galeria</a></li>
                    </ul>
                    <div class="group-md group-middle justify-content-sm-start">
                      <a class="button button-lg button-primary button-ujarak" href="#">Saber más</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Fim Repartição 3-->

            </div>
          </div>
        </div>
        <div class="footer-corporate-bottom-panel">
          <div class="container">
            <div
              class="row justfy-content-xl-space-berween row-10 align-items-md-center2"
            >
              <div class="col-sm-6 col-md-4 text-sm-right text-md-center">
                <div>
                  <ul class="list-inline list-inline-sm footer-social-list-2">
                    <li><a class="icon fa fa-github" href="https://github.com/Nuevos-Caminos/NC"></a></li> 
                  <li><a class="icon fa fa-twitter" href="https://x.com/Nuevos_Caminos0"></a></li>
                  <li><a class="icon fa fa-instagram" href="https://www.instagram.com/tcc_nuevoscaminos/"></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 order-sm-first">
                
                <!-- Considerações-->
                <p class="rights">
                  <span>&copy;&nbsp;</span><span class="copyright-year"></span
                  ><span>&nbsp;</span><span>Etec Zona leste</span>.
                  <span>TCC Nuevos Caminos</span>
                </p>
              </div>
              <div class="col-sm-6 col-md-4 text-md-right">
                <p class="rights"><a href="#">Privacy Policy</a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    <!--Fim Footer-->

    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>