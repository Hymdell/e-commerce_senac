<?php
    include "conexao.php";
    session_start();
    $con = new Conexao();
    $_SESSION['dados'] = $con->busca_tecnicos();
    header("Location:mostrar_tecnicos.php");
?>