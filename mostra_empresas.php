<?php
    include "conexao.php";
    session_start();
    $con = new Conexao();
    $con->conecta();
    $_SESSION['dados'] = $con->busca_empresas();
    header("Location:mostrar_empresas.php");
?>