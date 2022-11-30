<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="assets/css/cad.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registro Técnico</title>
   </head>
<body>
  <div class="container">
    <div class="title">
    <a href="escolha.php"><img src="assets/images/arrow-left-circle.svg" width="30"  alt=""></a>Registro TÉCNICO</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nome Completo</span>
            <input type="text" placeholder="Seu nome completo" required>
          </div>
          <div class="input-box">
            <span class="details">CPF</span>
            <input type="text" placeholder="Seu CPF" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" pattern="[^ @]*@[^ @]*" placeholder="Email para contato" required>
          </div>
          <div class="input-box">
            <span class="details">Telefone</span>
            <input type="text" placeholder="Número para contato" required>
          </div>
          <div class="input-box">
            <span class="details">Senha</span>
            <input type="text" placeholder="Sua Senha" required>
          </div>
          <div class="input-box">
            <span class="details">Confirme a senha</span>
            <input type="text" placeholder="Sua Senha novamente" required>
          </div>
          <div class="input-box">
            <span class="details">Estado</span>
            <input type="text" placeholder="Seu Estado, Ex: SP" required>
          </div>
          <div class="input-box">
            <span class="details">Cidade</span>
            <input type="text" placeholder="Sua Cidade" required>
          </div>
          <div class="input-box">
            <span class="details">Rua</span>
            <input type="text" placeholder="Seu endereço de atendimento" required>
          </div>
          <div class="input-box">
            <span class="details">Número</span>
            <input type="text" placeholder="Número do local" required>
          </div>
          <div class="input-box">
            <span class="details">Bairro</span>
            <input type="text" placeholder="Bairro do local" required>
          </div>
          <div class="input-box">
            <span class="details">Complemento</span>
            <input type="text" placeholder="Complemento do endereço" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Registrar">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
