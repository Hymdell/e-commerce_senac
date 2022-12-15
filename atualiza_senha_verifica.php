<?php
    include "conexao.php";
    session_start();
    $con = new Conexao;
    $con->conecta();
    $verifica = $con->atualiza_senha($_POST['tabela'],$_POST['email'],$_POST['senha']);
    if($verifica == true){
        header("Location:escolha.php");
    }else{
        header("Location:atualiza_senha.php");
    }
?>