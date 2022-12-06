<?php
    include "conexao.php";
    session_start();
    $con = new Conexao();
    $con->conecta();
    $_SESSION['dados'] = $con->busca_unica($_SESSION['tabela'],$_SESSION['email']);
    if($_SESSION['tabela'] == "tecnicos"){
        header("Location:perfil_tecnico.php");
    }else if($_SESSION['tabela'] == "empresas"){
        header("Location:perfil_empresa.php");
    }else if($_SESSION['tabela'] == "usuarios"){
        header("Location:perfil_cliente.php");
    }
?>