<?php
  session_start();
  if($_SESSION['logado'] != true){
    header("Location:index.php");
  }
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
              <li class="scroll-to-section"><a href="#">Empresas</a></li>
              <li class="scroll-to-section"><a href="#">Técnicos</a></li>
              <li class="scroll-to-section"><a href="#highlights">Destaques</a></li>
              <li class="scroll-to-section"><a href="#about">Sobre Nós</a></li>
              <li class="scroll-to-section"><a href="#contact">Contato</a></li>
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
                  <input type="name" name="nome" id="nome" placeholder="Nome" autocomplete="on" <?php echo $_SESSION['dados'][0]; ?> required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="cpf">CPF: </label>
                  <input type="text" name="cpfcnpj" id="cpf" placeholder="CPF" autocomplete="on" <?php echo $_SESSION['dados'][1]; ?> required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="email">Email: </label>
                  <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Seu Email" <?php echo $_SESSION['dados'][2]; ?> required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="telefone">Telefone: </label>
                  <input type="tel" name="telefone" id="telefone" placeholder="Seu Telefone" <?php echo $_SESSION['dados'][3]; ?> required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="estado">Estado: </label>
                  <input type="text" name="estado" id="estado" placeholder="Seu Estado" <?php echo $_SESSION['dados'][4]; ?> required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="cidade">Cidade: </label>
                  <input type="text" name="cidade" id="cidade" placeholder="Sua Cidade" <?php echo $_SESSION['dados'][5]; ?> required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="rua">Rua: </label>
                  <input type="text" name="rua" id="rua" placeholder="Sua Rua" <?php echo $_SESSION['dados'][6]; ?> required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="numero">Numero: </label>
                  <input type="number" name="numero" id="numero" placeholder="Número da rua" <?php echo $_SESSION['dados'][7]; ?> required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="bairro">Bairro: </label>
                  <input type="text" name="bairro" id="bairro" placeholder="Seu Bairro" <?php echo $_SESSION['dados'][8]; ?> required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="complemento">Complemento: </label>
                  <input type="text" name="complemento" id="complemento" placeholder="Complemento do endereço" <?php echo $_SESSION['dados'][9]; ?> required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="senha">Complemento: </label>
                  <input type="password" name="senha" id="senha" placeholder="Sua senha" <?php echo $_SESSION['dados'][10]; ?> required="">
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
  <script>
        const forms = document.querySelector(".forms"),
        pwShowHide = document.querySelectorAll(".eye-icon"),
        links = document.querySelectorAll(".link");
        pwShowHide.forEach(eyeIcon => {
            eyeIcon.addEventListener("click", () => {
                let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
                pwFields.forEach(password => {
                    if (password.type === "password") {
                        password.type = "text";
                        eyeIcon.classList.replace("bx-hide", "bx-show");
                        return;
                    }
                    password.type = "password";
                    eyeIcon.classList.replace("bx-show", "bx-hide");
                })
            })
        })
        links.forEach(link => {
            link.addEventListener("click", e => {
                e.preventDefault(); //preventing form submit
                forms.classList.toggle("show-signup");
            })
        })
    </script>
</body>
</html>