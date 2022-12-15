<?php
  session_start();
  $_SESSION['logado'] = false;
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

    <title>TECHCARE</title>

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
              <li class="scroll-to-section"><a href="mostra_empresas.php">Empresas</a></li>
              <li class="scroll-to-section"><a href="mostra_tecnicos.php">Técnicos</a></li>
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
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <h6>Bem vindo/a a TECHCARE</h6>
                <h2>Seu local para <em>Contratar</em> e <span>Prestar</span> Serviços de manutenção</h2>
                <p>Procure aqui empresas e técnicos na sua cidade para que possa solucionar seu problema atual ou fazer contratos.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/mascote.png" alt="team meeting">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <img src="assets/images/servicos.png" alt="person graphic">
          </div>
        </div>
        <div class="col-lg-8 align-self-center">
          <div class="services">
            <div class="row">
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                    <img src="assets/images/buildings.svg" width="100" height="100" alt="reporting">
                  </div>
                  <div class="right-text">
                    <h4>Empresas</h4>
                    <p>Ofereça seus serviços de forma rápida e eficiente.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                  <div class="icon">
                    <img src="assets/images/person-fill-gear.svg" width="100" height="100" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Técnicos</h4>
                    <p>Ofereça serviços de acordo com seu método de trabalho.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                  <div class="icon">
                    <img src="assets/images/person-circle.svg" width="100" height="100" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Clientes</h4>
                    <p>Encontre empresas ou técnicos de acordo com seu problema.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                  <div class="icon">
                    <img src="assets/images/clipboard-data.svg"  width="100" height="100" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Praticidade</h4>
                    <p>Consulte localizações, serviços oferecidos e viabilidade de contratos.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="highlights" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2>Veja aqui <a href="mostra_empresas.php"><em>Empresas</em></a> e <a href="mostra_tecnicos.php"><span>Técnicos</span></a> Em destaque</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="hidden-content">
                <h4>Mojotech</h4>
                <p>Empresa para Empresas faça seu contrato.</p>
              </div>
              <div class="showed-content">
                <img src="assets/images/building.svg" alt="">
              </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
              <div class="hidden-content">
                <h4>Cybertech</h4>
                <p>Empresa atendimentos para todos.</p>
              </div>
              <div class="showed-content">
                <img src="assets/images/building.svg" alt="">
              </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="hidden-content">
                <h4>Julio Tech</h4>
                <p>Atendimentos remotos e a domicílio.</p>
              </div>
              <div class="showed-content">
                <img src="assets/images/wrench.png" alt="">
              </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
              <div class="hidden-content">
                <h4>Ademir dos santos</h4>
                <p>Atendimentos apenas no meu local.</p>
              </div>
              <div class="showed-content">
                <img src="assets/images/wrench.png" alt="">
              </div>
            </div>
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
          <form id="contact" action="envia_email.php" method="post">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input autocomplete="off" type="name" name="nome" id="name" placeholder="Nome" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input autocomplete="off" type="surname" name="assunto" id="surname" placeholder="Assunto" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input autocomplete="off" type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Seu Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea autocomplete="off" name="mensagem" type="text" class="form-control" id="message" placeholder="Mensagem" required=""></textarea>  
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