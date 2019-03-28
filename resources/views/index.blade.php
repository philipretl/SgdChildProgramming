<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SGD - Childprogramming</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('index/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{asset('index/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <link href="{{asset('index/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{asset('index/css/freelancer.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Childprogramming</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">¿De que se trata?</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Sabores</a>
          </li>
		  <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#login">Inicio-Registro</a>
      </li>

      <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{route('metodologias')}}">SGD</a>
      </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container">
      <img class="img-fluid mb-5 d-block mx-auto" src="index/img/logocp.png" alt="">
      <h1 class="text-uppercase mb-0">SGD-Childprogramming</h1>
      <hr class="star-light">
      <h2 class="font-weight-light mb-0">Sistema de gestion y diseño de metodologias para Childprogramming</h2>
    </div>
  </header>

  <!-- About Section -->
  <section id="about">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">¿De que se trata?</h2>
      <hr class="star-dark mb-5">
      <div class="row">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
		  <div class="col-lg-4 ml-auto">
          <p class="lead">ChildProgramming es una propuesta en el área de Ingenieria de Software con un enfoque educativo, en la que los niños de  instituciones educativas con formación en básica primaria entre los 8 y 10 años de edad, participan en un proceso de aprendizaje de conceptos iniciales del mundo de la programación de computadores y el desarrollo de software. </p>
        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead">Esto a través de la aplicación de prácticas colaborativas, ágiles de desarrollo y prácticas cognitivas, que les permitan despertar el interés por descubrir lo divertido que puede ser construir sus propias soluciones a problemas lógicos, mediante la aplicación de  actividades divertidas y lúdicas</p>
        </div>
      </div>
    </div>
  </section>



  <!-- Portfolio Grid Section -->
  <section class="portfolio" id="portfolio">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Sabores</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="index/img/portfolio/abstraccion.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="index/img/portfolio/game.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="index/img/portfolio/memoria.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="index/img/portfolio/genero.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="index/img/portfolio/mas.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>




  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Ubicacion</h4>
          <p class="lead mb-0">Facultad de Ingeniería Electrónica y Telecomunicaciones
            <br>Edificio de Ingenierías Sector Tulcán</p>
        </div>
        <div class="col-md-6 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Redes Sociales</h4>
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                <i class="fab fa-fw fa-facebook-f"></i>
              </a>
            </li>

            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                <i class="fab fa-fw fa-twitter"></i>
              </a>
            </li>

            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                <i class="fab fa-fw fa-dribbble"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </footer>

  <div class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Todos los Derechos Reservdos Unicauca Popayán 2019</small>
    </div>
  </div>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Portfolio Modals -->

  <!-- Portfolio Modal 1 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Abstracción</h2>
            <hr class="star-dark mb-5">
            <img class="img-fluid mb-5" src="index/img/portfolio/abstraccion.png" alt="">
            <p class="mb-5">trabajo enfocado a definir y aplicar un método incremental que facilite el análisis y diseño en el desarrollo de software en equipos en los niños de edad escolar entre los 10 y 13 años basado en la aplicación de modelos mentales compartidos como base para la organización, planificación y coordinación de las tareas de desarrollo en el contexto de la metodología ChildProgramming. Aplica un refinamiento de las practicas propuestas en Childprogramming, enfocándose en el desarrollo del pensamiento computacional, a partir de la aplicación de los mecanismos de abstracción, la incrementalidad en las misiones y el pensamiento compartido.</p>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Aceptar</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Portfolio Modal 2 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Gamificación</h2>
            <hr class="star-dark mb-5">
            <img class="img-fluid mb-5" src="index/img/portfolio/game.png" alt="">
            <p class="mb-5">Pretende extender el modelo Childprogramming incorporando mecánicas y dinámicas de juego que permitan incrementar el desempeño de los equipos de trabajo en términos de calidad productividad y comportamiento. En este trabajo se propone una caracterización de los tipos de jugador y se aplica el tema de la incrementalidad en las mecánicas y dinámicas de juego. Su evaluación se realizó en un ambiente educativo real aplicando dos estudios de caso.</p>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Aceptar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 3 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Memoria transactiva</h2>
            <hr class="star-dark mb-5">
            <img class="img-fluid mb-5" src="index/img/portfolio/memoria.png" alt="">
            <p class="mb-5">en este trabajo se presentan diversas prácticas que son ajustadas para que los equipos de niños y niñas apliquen la memoria transactiva como ejercicio de planificación y desarrollo de las actividades. Se identificaron los componentes que deberían tenerse en cuenta para desarrollar sistemas de memoria transactiva en los trabajos en grupo, la medición de la efectividad de este nuevo enfoque para Childprogramming se realizó teniendo en cuenta tres aspectos (especialización, credibilidad y coordinación).</p>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Aceptar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 4 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Género</h2>
            <hr class="star-dark mb-5">
            <img class="img-fluid mb-5" src="index/img/portfolio/genero.png" alt="">
            <p class="mb-5">su propuesta consiste en presentar ciertas prácticas orientadas a tener en cuenta aspectos de diversidad de género e inclusión cuando grupos de niños y niñas se involucran en el diseño de actividades relacionadas con la programación de computadoras. La evaluación de esta investigación busco incrementar el interés en los temas informáticos alejándolos de los estereotipos de género que se presentan en la sociedad.</p>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Aceptar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 5 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Nuevo sabor</h2>
            <hr class="star-dark mb-5">
            <img class="img-fluid mb-5" src="index/img/portfolio/mas.png" alt="">
            <p class="mb-5">Proximamente.</p>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Aceptar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('index/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('index/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{asset('index/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('index/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

  <!-- Contact Form JavaScript -->
  <script src="{{asset('index/js/jqBootstrapValidation.js')}}"></script>
  <script src="{{asset('index/js/contact_me.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('index/js/freelancer.min.js')}}"></script>

</body>

</html>
