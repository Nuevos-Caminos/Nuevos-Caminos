<!DOCTYPE html>
<html class="wide wow-animation" lang="es">
  <head>
    <title>Colaborador</title>
    <meta name="format-detection" content="telephone=no" />
    <meta
      name="viewport"
      content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <link rel="icon" href="../images/logo.png" type="image/x-icon" />
    <!-- Stylesheets-->
    <link
      rel="stylesheet"
      type="text/css"
      href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400"
    />
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/fonts.css" />
    <link rel="stylesheet" href="../css/style.css" />
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
  <?php include 'includes/NavbarInf.php'; ?>
  <section class="breadcrumbs-custom-inset p-0">
        <div class="breadcrumbs-custom context-dark bg-overlay-60">
          <div class="container">
            <h2 class="breadcrumbs-custom-title">Colaborador</h2>
          </div>
          
          <div
            class="box-position"
            style="background-image: url(../images/colaborador.jpg)" 
          ></div>
        </div>
      </section>
      <!-- Base typography-->
      <section class="section section-sm section-first bg-default custom-text-left">
        <div class="container">
         
            <div class="col-xl-17">
              <ul class="list-xl box-typography">
                <li>
                  <h3 style="height: 60px;">Conviértete en colaborador de Nuevos Caminos</h3>
                  <p>
                    <img src="../images/colaboradorpag.jpeg" height="500" width="500"><br><br>

                    <strong>Nuevos Caminos</strong> se creó para facilitar la vida de los inmigrantes recién llegados a Brasil, ofreciendo información fiable, consejos prácticos y apoyo para su integración. Pero para continuar con nuestra misión, <strong>¡te necesitamos!</strong>
                    <br><br>
                    Ser colaborador de Nuevos Caminos significa contribuir a un proyecto que transforma vidas, ayudando a miles de personas a sentirse acogidas e informadas.
                  </p>
                </li>
                <li>
                  <h3 style="height: 60px;">¿Cómo ayudar?</h3>
                  <p style="text-align: left">
                    <img src="../images/comoajudar.jpeg" id="ajudar"><br><br>
                    <strong>Revisar:</strong> Ayudar a revisar textos o mejorar la información para que nuestros contenidos sigan siendo de la máxima calidad.<br><br>
                    <strong>Compartir:</strong> Ayude a correr la voz para llegar a más personas que necesitan esta ayuda. <strong>¡Contamos contigo!</strong> 
                  </p>
                </li>
                <li>
                <h3 id="normas">Normas</h3>
                  <p style="text-align: left">
                    <img src="../images/regras.png" id="regras"><br><br>
                    <strong>Respeto:</strong> Todas las contribuciones deben promover un entorno acogedor y respetuoso para todas las personas, independientemente de su origen.<br><br>
                    <strong>Compromiso:</strong> Contribuir de forma coherente y transparente para garantizar que el sitio siga siendo útil y esté actualizado. 
                  </p>
                </li>
                <li id="espaco">
                  <p>
                  <a id="inscreva" href="#">Enviar solicitud</a><br><br>
                  <strong>¡Nos encantaría contar con tu ayuda!</strong> Haz clic en el botón de arriba para inscribirte y unirte a nuestro equipo.
              </ul>
            </div>
        </div>
    </div>

           <?php include 'includes/footerInf.php'; ?>
    
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="../js/core.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/empleabilidade.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollToPlugin.min.js"></script>

  </body>
</html>
