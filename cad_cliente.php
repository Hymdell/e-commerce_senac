<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="assets/css/cad.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registro Cliente</title>
     <?php
    session_start();
    if($_SESSION['erro'] == false){
        echo '<style> p{color: white;background-color: red;}</style>';
    }
    ?>
   </head>
<body>
  <div class="container">
    <div class="title">
    <a href="escolha.php"><img src="assets/images/arrow-left-circle.svg" width="30"  alt=""></a>Registro CLIENTE</div>
    <?php  
      if($_SESSION['erro'] == false){
          echo "<center><p>Verifique seus dados e tente novamente</p></center>";
      }
    ?>
    <div class="content">
      <form action="cad_verifica.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nome Completo</span>
            <input type="text" name="nome" placeholder="Seu nome completo" required>
          </div>
          <div class="input-box">
            <span class="details">CPF</span>
            <input type="text" maxlength="14" minlength="14" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" name="cpfcnpj" placeholder="Seu CPF" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" pattern="[^ @]*@[^ @]*" placeholder="Email para contato" required>
          </div>
          <div class="input-box">
            <span class="details">Telefone</span>
            <input type="tel" maxlength="13" minlength="13" name="telefone" pattern="(\([0-9]{2}\))([0-9]{9})" placeholder="Telefone Ex:(xx)xxxxxxxxx" required>
          </div>
          <div class="input-box">
            <span class="details">Senha</span>
            <input type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{6,20}$" name="senha" id="senha" placeholder="Ex: 1234aA@" required>
          </div>
          <div class="input-box">
            <span class="details">Confirme a senha</span>
            <input type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{6,20}$" name="senha2" id="senha2" placeholder="Sua Senha novamente" required>
            <p id="mensagem"></p>
          </div>
          <div class="input-box">
            <span class="details">Estado</span>
            <input type="text" maxlength="2" minlength="2"  pattern="[A-Za-z0-9]{2}" name="estado" placeholder="Seu Estado, EX: SP" required>
          </div>
          <div class="input-box">
            <span class="details">Cidade</span>
            <input type="text" name="cidade" placeholder="Sua Cidade" required>
          </div>
          <div class="input-box">
            <span class="details">Rua</span>
            <input type="text" name="rua" placeholder="Sua Rua" required>
          </div>
          <div class="input-box">
            <span class="details">Número</span>
            <input type="number" maxlength="4" minlength="2" pattern="[0-9]" name="numero" placeholder="Número da sua casa/prédio" required>
          </div>
          <div class="input-box">
            <span class="details">Bairro</span>
            <input type="text" name="bairro" placeholder="Seu Bairro" required>
          </div>
          <div class="input-box">
            <span class="details">Complemento</span>
            <input type="text" name="complemento" placeholder="Complemento do endereço" required>
            <input type="hidden" name="tabela" value="usuarios">
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Registrar">
        </div>
      </form>
    </div>
  </div>
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
