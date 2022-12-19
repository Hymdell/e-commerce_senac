<?php
session_start();
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
            <?php
              if($_SESSION['logado'] == true){
                echo '<a href="index_logado.php" class="logo"><h4>Tech<span>Care</span></h4></a>';
              }else{
                echo '<a href="index.php" class="logo"><h4>Tech<span>Care</span></h4></a>';
              }
            ?>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="mostra_empresas.php">Empresas</a></li>
              <li class="scroll-to-section"><a href="mostra_tecnicos.php">Técnicos</a></li>
              <?php 
              if($_SESSION['logado'] == true){
                echo '<li class="scroll-to-section"><a href="index_logado.php">Sobre Nós</a></li>';
                echo '<li class="scroll-to-section"><a href="index_logado.php">Destaques</a></li>';
              }else{
                echo '<li class="scroll-to-section"><a href="index.php">Sobre Nós</a></li>';
                echo '<li class="scroll-to-section"><a href="index.php">Destaques</a></li>';
              }
              ?>
              <li class="scroll-to-section"><a href="#contact">Contato</a></li>
              <?php
              $dados = $_SESSION['dados'];
              if($_SESSION['logado'] == true){
                echo '<li class="scroll-to-section"><div class="main-red-button"><a href="perfil_verifica.php">Perfil</a></div></li>';
              }else{
                echo '<li class="scroll-to-section"><div class="main-red-button"><a href="escolha.php">Login/Cadastro</a></div></li>';
              }
              ?>
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
                <?php
                echo "<h2>".$dados[0]."</h2>";
                echo "<h5>Estado: ".$dados[4]." | Cidade: ".$dados[5]."</h5>";
                echo "<h5>Endereço: ".$dados[6].", ".$dados[7].", ".$dados[8].", ".$dados[9]."</h5>";
                echo "<h5>Email: ".$dados[1]."<br>Telefone: (+55)".$dados[3]."</h5>";
                echo"<br>";
                echo '<p class="texto">'.$dados[12].'</p>';
                ?>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <?php echo '<img src="uploads/' . $dados[13] . '" alt="' . $dados[13] . '"';?>
              </div>
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