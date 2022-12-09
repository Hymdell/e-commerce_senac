<?php
session_start();
$_SESSION['existe'] = true;
?>
<!DOCTYPE html>
<html lang="pt-BR">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>TECHARE Escolha</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    
    <!-- 
    TemplateMo 562 Space Dynamic
    https://templatemo.com/tm-562-space-dynamic
    -->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <h4>Tech<span>Care</span></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#">Empresas</a></li>
              <li class="scroll-to-section"><a href="#">Técnicos</a></li>
              <li class="scroll-to-section"><a href="#highlights">Sobre Nós</a></li>
              <li class="scroll-to-section"><a href="#about">Destaques</a></li>
              <li class="scroll-to-section"><a href="#contact">Contato</a></li>
              <li class="scroll-to-section"><div class="main-red-button"><a href="escolha.php">Login/Cadastro</a></div></li>
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>

  <div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2>Escolha como quer <em>Logar</em> no site</h2>
          </div>
        </div>
      </div>
      <div class="row text-center ">
        <div class="col-lg-10 col-sm-6">
        </div>
        <div class="col-lg-4 col-sm-6">
          <a href="login_empresa.php">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="hidden-content">
                <h4>Empresa</h4>
                <p>Entrar como empresa para oferecer seus serviços.</p>
              </div>
              <div class="showed-content">
                <img src="assets/images/building-up.svg" alt="">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a href="login_tecnico.php">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
              <div class="hidden-content">
                <h4>Técnico</h4>
                <p>Entrar como técnico para oferecer seus serviços.</p>
              </div>
              <div class="showed-content">
                <img src="assets/images/wrench-up.png" alt="">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a href="login_cliente.php">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="hidden-content">
                <h4>Cliente</h4>
                <p>Entrar como Cliente para procurar serviços de Empresas/Técnicos.</p>
              </div>
              <div class="showed-content">
                <img src="assets/images/person-up.svg" alt="">
              </div>
            </div>
            </a>
        </div>
      </div>
      <br><br><br><br>
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2>Não Possui uma conta?<br>Escolha como quer se <span>Registrar</span> no site</h2>
          </div>
        </div>
      </div>
      <div class="row text-center ">
        <div class="col-lg-10 col-sm-6">
        </div>
        <div class="col-lg-4 col-sm-6">
          <a href="cad_empresa.php">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="hidden-content">
                <h4>Empresa</h4>
                <p>Se registre como empresa para oferecer seus serviços.</p>
              </div>
              <div class="showed-content">
                <img src="assets/images/building-add.svg" alt="">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a href="cad_tecnico.php">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
              <div class="hidden-content">
                <h4>Técnico</h4>
                <p>Se registrar como técnico para oferecer seus serviços.</p>
              </div>
              <div class="showed-content">
                <img src="assets/images/wrench-add.png" alt="">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a href="cad_cliente.php">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="hidden-content">
                <h4>Cliente</h4>
                <p>Se registrar para procurar serviços de Empresas/Técnicos.</p>
              </div>
              <div class="showed-content">
                <img src="assets/images/person-add.svg" alt="">
              </div>
            </div>
            </a>
        </div>
      </div>
    </div>
  </div>

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>Contate-nos!</h2>
            <p>Caso necessite de auxilio para registro da sua empresa, registro como técnico, registro como cliente, algo relacionado ao site ou alguma sugestão fique a vontade de enviar um email.</p>
            <div class="phone-info">
              <h4>Para assuntos mais urgentes: <span><i class="fa fa-phone"></i> +55 (51) 4002-8922</span></h4>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="mailto:email@email.com">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input autocomplete="off" type="name" name="name" id="name" placeholder="Nome" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input autocomplete="off" type="surname" name="surname" id="surname" placeholder="Sobrenome" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input autocomplete="off" type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Seu Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea autocomplete="off" name="message" type="text" class="form-control" id="message" placeholder="Mensagem" required=""></textarea>  
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Enviar Mensagem</button>
                </fieldset>
              </div>
            </div>
            <div class="contact-dec">
              <img src="assets/images/contact-decoration.png" alt="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
          <p>© Copyright 2022 Hymdell. Todos Direitos Reservados. 
          
          <br>Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a> | 
          <a rel="nofollow" href="404.php">404</a></p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/templatemo-custom.js"></script>

</body>
</html>