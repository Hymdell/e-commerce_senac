<?php
    include "conexao.php";
    $con = new Conexao;
    $valida = $con->atualiza_perfil($_POST['tabela'],$_POST['nome'],$_POST['cpfcnpj'],$_POST['email'],$_POST['telefone'],$_POST['senha'],$_POST['estado'],$_POST['cidade'],$_POST['rua'],$_POST['numero'],$_POST['bairro'],$_POST['complemento'],$_POST['resumo']);
    if($valida == true && $_POST['tabela'] == 'clientes'){
        header("Location:http://localhost/e-commerce_senac/perfil_cliente.php");
    }else if($valida == true && $_POST['tabela'] == 'empresas'){
        header("Location:http://localhost/e-commerce_senac/perfil_empresa.php");
    }else if($valida == true && $_POST['tabela'] == 'tecnicos'){
        header("Location:http://localhost/e-commerce_senac/perfil_tecnico.php");
    }else if($valida == false && $_POST['tabela'] == 'clientes'){
        header("Location:http://localhost/e-commerce_senac/perfil_cliente.php");
    }else if($valida == false && $_POST['tabela'] == 'empresas'){
        header("Location:http://localhost/e-commerce_senac/perfil_empresa.php");
    }else if($valida == false && $_POST['tabela'] == 'tecnicos'){
        header("Location:http://localhost/e-commerce_senac/perfil_tecnico.php");
    }
?>