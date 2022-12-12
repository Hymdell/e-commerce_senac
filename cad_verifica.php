<?php
    include "conexao.php";
    session_start();
    $con = new Conexao;
    $con->conecta();
    $_SESSION['tabela']=$_POST['tabela'];
    $_SESSION['email']=$_POST['email'];
    $_SESSION['logado']=true;
    $valida = $con->registro($_POST['tabela'],$_POST['nome'],$_POST['cpfcnpj'],$_POST['email'],$_POST['telefone'],$_POST['senha'],$_POST['estado'],$_POST['cidade'],$_POST['rua'],$_POST['numero'],$_POST['bairro'],$_POST['complemento']);
    if($valida == true){
        $_SESSION['erro'] = true;
        header("Location:http://localhost/e-commerce_senac/index_logado.php");
    }else if($valida == false && $_POST['tabela'] == 'clientes'){
        $_SESSION['erro'] = false;
        header("Location:http://localhost/e-commerce_senac/cad_cliente.php");
    }else if($valida == false && $_POST['tabela'] == 'empresas'){
        $_SESSION['erro'] = false;
        header("Location:http://localhost/e-commerce_senac/cad_empresa.php");
    }else if($valida == false && $_POST['tabela'] == 'tecnicos'){
        $_SESSION['erro'] = false;
        header("Location:http://localhost/e-commerce_senac/cad_tecnico.php");
    }
?>