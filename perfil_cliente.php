<?php
  session_start();
  if($_SESSION['logado'] != true){
    header("Location:index.php");
  }
  $dados = $_SESSION['dados'];
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

    <title>TECHCARE Perfil</title>

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
            <a href="index_logado.php" class="logo">
              <h4>Tech<span>Care</span></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="mostra_empresas.php">Empresas</a></li>
              <li class="scroll-to-section"><a href="mostra_tecnicos.php">Técnicos</a></li>
              <li class="scroll-to-section"><a href="index_logado.php">Destaques</a></li>
              <li class="scroll-to-section"><a href="index_logado.php">Sobre Nós</a></li>
              <li class="scroll-to-section"><a href="index_logado.php">Contato</a></li>
              <li class="scroll-to-section"><a href="desloga.php">Sair</a></li>
              <li class="scroll-to-section"><div class="main-red-button"><a href="perfil_verifica.php">Perfil</a></div></li>
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

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-20 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="perfil_att_del.php" method="post">
            <div class="row">
            <div class="col-lg-12">
                <fieldset>
                <h1>Seu Perfil(Cliente)</h1>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="nome">Nome: </label>
                  <input type="name" name="nome" id="nome" placeholder="Nome" autocomplete="on" <?php echo 'value ="' . $dados[0] . '"'; ?> required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="cpf">CPF: </label>
                  <input type="text" maxlength="15" minlength="15" name="cpfcnpj" id="cpf" placeholder="CPF" autocomplete="on" <?php echo 'value ="' . $dados[1] . '"'; ?> required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="email">Email: </label>
                  <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Seu Email" <?php echo 'value ="' . $dados[2] . '"'; ?> required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="telefone">Telefone: </label>
                  <input type="tel" maxlength="13" minlength="13" name="telefone" pattern="(\([0-9]{2}\))([0-9]{9})" placeholder="Telefone ex:(xx)xxxxxxxxx" <?php echo 'value ="' . $dados[3] . '"'; ?> required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="estado">Estado: </label>
                  <input type="text" maxlength="2" minlength="2"  pattern="[A-Za-z]{2}" name="estado" id="estado" placeholder="Seu Estado" <?php echo 'value ="' . $dados[4] . '"'; ?> required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="cidade">Cidade: </label>
                  <input type="text" name="cidade" id="cidade" placeholder="Sua Cidade" <?php echo 'value ="' . $dados[5] . '"'; ?> required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="rua">Rua: </label>
                  <input type="text" name="rua" id="rua" placeholder="Sua Rua" <?php echo 'value ="' . $dados[6] . '"'; ?> required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="numero">Numero: </label>
                  <input type="number" maxlength="4" minlength="2" pattern="[0-9]" name="numero" id="numero" placeholder="Número da rua" <?php echo 'value ="' . $dados[7] . '"'; ?> required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="bairro">Bairro: </label>
                  <input type="text" name="bairro" id="bairro" placeholder="Seu Bairro" <?php echo 'value ="' . $dados[8] . '"'; ?> required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="complemento">Complemento: </label>
                  <input type="text" name="complemento" id="complemento" placeholder="Complemento do endereço" <?php echo 'value ="' . $dados[9] . '"'; ?> required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="senha">Senha: </label>
                  <input type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{6,20}$" name="senha" id="senha" placeholder="Sua senha" <?php echo 'value ="' . $dados[10] . '"'; ?> required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="foto">Foto de Perfil: </label>
                  <input type="file" name="foto" id="foto" placeholder="Foto de Perfil">
                </fieldset>
              </div>
              <div class="col-lg-1">
                <fieldset>
                <input type="hidden" name="tabela" value="usuarios">
                <input type="hidden" name="resumo" value="">
                  <button type="submit" id="form-submit" class="main-button ">Salvar</button>
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