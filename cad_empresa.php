<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="assets/css/cad.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registro Empresa</title>
   </head>
<body>
  <div class="container">
    <div class="title">
        <a href="escolha.php"><img src="assets/images/arrow-left-circle.svg" width="30"  alt=""></a> Registro EMPRESA</div>
    <div class="content">
      <center><h3><u>!Após seu cadastro acesse seu perfil para verificar as informações e escrever seus resumos!</u></h3></center>
      <form action="cad_verifica.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nome</span>
            <input type="text" name="nome" placeholder="Nome da empresa" required>
          </div>
          <div class="input-box">
            <span class="details">CPNJ</span>
            <input type="text" name="cpfcnpj" placeholder="CPNJ da Empresa" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email"  pattern="[^ @]*@[^ @]*" placeholder="Email para contato" required>
          </div>
          <div class="input-box">
            <span class="details">Telefone</span>
            <input type="tel" name="telefone" placeholder="Número para contato" required>
          </div>
          <div class="input-box">
            <span class="details">Senha</span>
            <input type="password" name="senha" placeholder="Sua Senha" required>
          </div>
          <div class="input-box">
            <span class="details">Confirme a senha</span>
            <input type="password" name="senha2" placeholder="Sua Senha novamente" required>
          </div>
          <div class="input-box">
            <span class="details">Estado</span>
            <input type="text" name="estado" placeholder="Estado da empresa, Ex: SP" required>
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
            <input type="text" name="numero" placeholder="Número da empresa" required>
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
