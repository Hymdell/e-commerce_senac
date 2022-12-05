<?php
    include "conexao.php";
    session_start();
    $con = new Conexao();
    $_SESSION['dados'] = $con->busca_empresas();
    header("Location:mostrar_empresas.php");
?>