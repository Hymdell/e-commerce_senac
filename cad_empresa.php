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
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nome</span>
            <input type="text" placeholder="Nome da empresa" required>
          </div>
          <div class="input-box">
            <span class="details">CPNJ</span>
            <input type="text" placeholder="CPNJ da Empresa" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" pattern="[^ @]*@[^ @]*" placeholder="Email para contato" required>
          </div>
          <div class="input-box">
            <span class="details">Telefone</span>
            <input type="tel" placeholder="Número para contato" required>
          </div>
          <div class="input-box">
            <span class="details">Senha</span>
            <input type="password" placeholder="Sua Senha" required>
          </div>
          <div class="input-box">
            <span class="details">Confirme a senha</span>
            <input type="password" placeholder="Sua Senha novamente" required>
          </div>
          <div class="input-box">
            <span class="details">Estado</span>
            <input type="text" placeholder="Estado da empresa, Ex: SP" required>
          </div>
          <div class="input-box">
            <span class="details">Cidade</span>
            <input type="text" placeholder="Cidade da empresa" required>
          </div>
          <div class="input-box">
            <span class="details">Rua</span>
            <input type="text" placeholder="Rua da empresa" required>
          </div>
          <div class="input-box">
            <span class="details">Número</span>
            <input type="text" placeholder="Número da empresa" required>
          </div>
          <div class="input-box">
            <span class="details">Bairro</span>
            <input type="text" placeholder="Bairro da empresa" required>
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
