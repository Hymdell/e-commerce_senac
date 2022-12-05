<?php
    include "conexao.php";
    session_start();
    $con = new Conexao();
    $_SESSION['dados'] = $con->busca_unica($_POST['tabela'],$_POST['nome'],$_POST['cpfcnpj']);
    if($_POST['tabela'] == "tecnicos"){
        header("Location:perfil_tecnico.php");
    }else if($_POST['tabela'] == "empresas"){
        header("Location:perfil_empresa.php");
    }else if($_POST['tabela'] == "usuarios"){
        header("Location:perfil_cliente.php");
    }
?>