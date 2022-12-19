<?php
    session_start();
    include "conexao.php";
    $con = new Conexao;
    $con->conecta();
    //$imagem = 0;
    if(isset($_FILES['imagem'])){
        $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
        $imagem = md5(time()) . $extensao;
        $diretorio = "uploads/";
        move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$imagem);
    }
    $valida = $con->atualiza_perfil($_POST['tabela'],$_POST['nome'],$_POST['cpfcnpj'],$_POST['email'],$_POST['telefone'],$_POST['senha'],$_POST['estado'],$_POST['cidade'],$_POST['rua'],$_POST['numero'],$_POST['bairro'],$_POST['complemento'],$_POST['resumo'],$_POST['resumolinha'],$imagem);
    $_SESSION['tabela']=$_POST['tabela'];
    $_SESSION['email']=$_POST['email'];
    if($valida == true && $_POST['tabela'] == 'usuarios'){
        header("Location:perfil_atualiza_dados.php");
    }else if($valida == true && $_POST['tabela'] == 'empresas'){
        header("Location:perfil_atualiza_dados.php");
    }else if($valida == true && $_POST['tabela'] == 'tecnicos'){
        header("Location:perfil_atualiza_dados.php");
    }else if($valida == false && $_POST['tabela'] == 'usuarios'){
        header("Location:perfil_cliente.php");
    }else if($valida == false && $_POST['tabela'] == 'empresas'){
        header("Location:perfil_empresa.php");
    }else if($valida == false && $_POST['tabela'] == 'tecnicos'){
        header("Location:perfil_tecnico.php");
    }
?>