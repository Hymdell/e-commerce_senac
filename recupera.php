<?php
session_start();
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="ptBR" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="assets/css/senhas.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <title>TECHCARE Redefinição</title>
   <?php
    if($_SESSION['existe'] == false){
        echo '<style> p{color: white;background-color: red;}</style>';
    }
    ?>
<body>
  <div class="container">
    <div class="title"><a href="escolha.php"><img src="assets/images/arrow-left-circle.svg" width="30"  alt=""></a>Redefinição de senha</div>
    <?php  
     if($_SESSION['existe'] == false){
        echo "<center><p>Esse email não está cadastrado!</p></center>";
        }
    ?>
    <div class="content">
      <form action="recupera_verifica.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" pattern="[^ @]*@[^ @]*" placeholder="Email" class="input" name="email" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="tabela" value="empresas" id="dot-1">
          <input type="radio" name="tabela" value="tecnicos" id="dot-2">
          <input type="radio" name="tabela" value="usuarios" id="dot-3">
          <span class="gender-title">Tipo de Conta:</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Empresa</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Técnico</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Cliente</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Enviar">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
