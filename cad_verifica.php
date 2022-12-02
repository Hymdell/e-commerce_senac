<?php
    $con = new Conexao;
    $valida = $con->registro($_POST['tabela'],$_POST['nome'],$_POST['cpfcnpj'],$_POST['email'],$_POST['telefone'],$_POST['senha'],$_POST['estado'],$_POST['cidade'],$_POST['rua'],$_POST['numero'],$_POST['bairro'],$_POST['complemento']);
    if($valida == true){
        header("Location:http://localhost/e-commerce_senac/index_logado.php");
    }else if($valida == false && $_POST['tabela'] == 'clientes'){
        header("Location:http://localhost/e-commerce_senac/cad_cliente.php");
    }else if($valida == false && $_POST['tabela'] == 'empresas'){
        header("Location:http://localhost/e-commerce_senac/cad_empresa.php");
    }else if($valida == false && $_POST['tabela'] == 'tecnicos'){
        header("Location:http://localhost/e-commerce_senac/cad_tecnico.php");
    }
?>