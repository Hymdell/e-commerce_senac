<?php
session_start();
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="assets/css/cad.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registro Empresa</title>
     <?php
    if($_SESSION['erro'] == false){
        echo '<style> p{color: white;background-color: red;}</style>';
    }
    ?>
   </head>
<body>
  <div class="container">
    <div class="title">
        <a href="escolha.php"><img src="assets/images/arrow-left-circle.svg" width="30"  alt=""></a> Registro EMPRESA</div>
    <div class="content">
      <center><h3><u>!Após seu cadastro acesse seu perfil para verificar as informações e escrever seus resumos!</u></h3></center>
      <?php  
        if($_SESSION['erro'] == false){
          echo "<center><p>Verifique seus dados e tente novamente</p></center>";
        }
    ?>
      <form action="cad_verifica.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nome</span>
            <input type="text" name="nome" placeholder="Nome da empresa" required>
          </div>
          <div class="input-box">
            <span class="details">CPNJ</span>
            <input type="text" maxlength="18" minlength="18" pattern="(\d{2}\.?\d{3}\.?\d{3}/?\d{4}-?\d{2})" name="cpfcnpj" placeholder="CPNJ ex: xx.xxx.xxx/xxxx-xx" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email"  pattern="[^ @]*@[^ @]*" placeholder="Email para contato" required>
          </div>
          <div class="input-box">
            <span class="details">Telefone</span>
            <input type="tel" maxlength="13" minlength="13" name="telefone" pattern="(\([0-9]{2}\))([0-9]{9})" placeholder="Telefone Ex: (xx)xxxxxxxxx" required>
          </div>
          <div class="input-box">
            <span class="details">Senha</span>
            <input type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{6,20}$" name="senha" id="password" placeholder="Ex: 1234aA@" required>
          </div>
          <div class="input-box">
            <span class="details">Confirme a senha</span>
            <input type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{6,20}$" name="senha2" id="password" placeholder="Sua Senha novamente" required>
            <p id="mensagem"></p>
          </div>
          <div class="input-box">
            <span class="details">Estado</span>
            <input type="text" maxlength="2" minlength="2" pattern="[A-Za-z]{2}" name="estado" placeholder="Estado da empresa, Ex: SP" required>
          </div>
          <div class="input-box">
            <span class="details">Cidade</span>
            <input type="text" name="cidade" placeholder="Cidade da empresa" required>
          </div>
          <div class="input-box">
            <span class="details">Rua</span>
            <input type="text" name="rua" placeholder="Rua da empresa" required>
          </div>
          <div class="input-box">
            <span class="details">Número</span>
            <input type="number" maxlength="4" minlength="2" pattern="[0-9]" name="numero" placeholder="Número da empresa" required>
          </div>
          <div class="input-box">
            <span class="details">Bairro</span>
            <input type="text" name="bairro" placeholder="Bairro da empresa" required>
          </div>
          <div class="input-box">
            <span class="details">Complemento</span>
            <input type="text" name="complemento" placeholder="Complemento do endereço" required>
            <input type="hidden" name="tabela" value="empresas">
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
