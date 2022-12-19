<?php
    include "conexao.php";
    session_start();
    $con = new Conexao();
    $con->conecta();
    $_SESSION['tabela']=$_POST['tabela'];
    $_SESSION['email']=$_POST['email'];
    $verifica = $con->login($_POST['tabela'],$_POST['email'],$_POST['senha']);
    if($verifica == true){
        $_SESSION['logado'] = true;
        $_SESSION['existe'] = true;
        header("Location:index_logado.php");
    }else if($verifica == false && $_POST['tabela'] == "usuarios"){
        $_SESSION['logado'] = false;
        $_SESSION['existe'] = false;
        header("Location:login_cliente.php");
    }else if($verifica == false && $_POST['tabela'] == "empresas"){
        $_SESSION['logado'] = false;
        $_SESSION['existe'] = false;
        header("Location:login_empresa.php");
    }else if($verifica == false && $_POST['tabela'] == "tecnicos"){
        $_SESSION['logado'] = false;
        $_SESSION['existe'] = false;
        header("Location:login_tecnico.php");
    }
?>