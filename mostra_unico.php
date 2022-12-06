<?php
    include "conexao.php";
    session_start();
    $con = new Conexao();
    $con->conecta();
    $_SESSION['dados'] = $con->busca_unica($_POST['tabela'],$_POST['email']);
    if($_POST['tabela'] == "tecnicos"){
        header("Location:mostra_tecnico.php");
    }else if($_POST['tabela'] == "empresas"){
        header("Location:mostra_empresa.php");
    }
?>