<?php
class Conexao{
    var $con;
    function conecta(){
        $servername = "localhost";
        $database = "rodoviaria";
        $username = "root";
        $password = "root";

        $this->con = mysqli_connect($servername,$username,$password,$database);
        if(empty($this->con)){
            die("Conexão falhou: " . mysqli_connect_error());
        }
    }

    function login($tabela,$email,$senha){
        $dados = array();
        if($tabela == "empresas"){
            $result = $this->con->query("SELECT `Email`, `Senha` FROM `empresas` WHERE `Email` = $email AND `Senha` = $senha");
            while($aux_query = $result->fetch_assoc()){
                $dados[0] = $aux_query['Email'];
                $dados[1] = $aux_query['Senha'];
            }
        }elseif($tabela == "tecnicos"){
            $result = $this->con->query("SELECT `Email`, `Senha` FROM `tecnicos` WHERE `Email` = $email AND `Senha` = $senha");
            while($aux_query = $result->fetch_assoc()){
                $dados[0] = $aux_query['Email'];
                $dados[1] = $aux_query['Senha'];
            }
        }elseif($tabela == "usuarios"){
            $result = $this->con->query("SELECT `Email`, `Senha` FROM `usuarios` WHERE `Email` = $email AND `Senha` = $senha");
            while($aux_query = $result->fetch_assoc()){
                $dados[0] = $aux_query['Email'];
                $dados[1] = $aux_query['Senha'];
            }
        }

        if($dados[0] == $email && $dados[1] == $senha){
            $this->con->close();
            return true;
        }else{
            $this->con->close();
            return false;
        } 
    }

    function registro($tabela,$nome,$cpfcnpj,$email,$telefone,$senha,$estado,$cidade,$rua,$numero,$bairro,$complemento){
        if($tabela == "empresas"){
            $sql = "INSERT INTO `empresas`(`Nome`, `CNPJ`, `Email`, `Telefone`, `Senha`, `Estado`, `Cidade`, `Rua`, `Numero`, `Bairro`, `Complemento`) VALUES ('$nome','$cpfcnpj','$email','$telefone','$senha','$estado','$cidade','$rua','$numero','$bairro','$complemento')";
        }elseif($tabela == "tecnicos"){
            $sql = "INSERT INTO `tecnicos`(`Nome`, `CPFtec`, `Email`, `Telefone`, `Senha`, `Estado`, `Cidade`, `Rua`, `Numero`, `Bairro`, `Complemento`) VALUES ('$nome','$cpfcnpj','$email','$telefone','$senha','$estado','$cidade','$rua','$numero','$bairro','$complemento');";
        }elseif($tabela == "usuarios"){
            $sql = "INSERT INTO `usuarios`(`Nome`, `CPFuser`, `Email`, `Telefone`, `Senha`, `Estado`, `Cidade`, `Rua`, `Numero`, `Bairro`, `Complemento`) VALUES ('$nome','$cpfcnpj','$email','$telefone','$senha','$estado','$cidade','$rua','$numero','$bairro','$complemento');";
        }

        if($this->con->query($sql) == TRUE){
            $this->con->close();
            return true;
        }else{
            $this->con->close();
            return false;
        } 
    }

    function atualiza_perfil($tabela,$nome,$cpfcnpj,$email,$telefone,$senha,$estado,$cidade,$rua,$numero,$bairro,$complemento,$resumo){
        if($tabela == "empresas"){
            $sql = "UPDATE `empresas` SET `Nome`='$nome',`CNPJ`='$cpfcnpj',`Email`='$email',`Telefone`='$telefone',`Senha`='$senha',`Estado`='$estado',`Cidade`='$cidade',`Rua`='$rua',`Numero`='$numero',`Bairro`='$bairro',`Complemento`='$complemento',`Resumo`='$resumo' WHERE `CPNJ` = $cpfcnpj";
        }elseif($tabela == "tecnicos"){
            $sql = "UPDATE `tecnicos` SET `Nome`='$nome',`CPFtec`='$cpfcnpj',`Email`='$email',`Telefone`='$telefone',`Senha`='$senha',`Estado`='$estado',`Cidade`='$cidade',`Rua`='$rua',`Numero`='$numero',`Bairro`='$bairro',`Complemento`='$complemento',`Resumo`='$resumo' WHERE `CPFtec` = $cpfcnpj";
        }elseif($tabela == "usuarios"){
            $sql = "UPDATE `usuarios` SET `Nome`='$nome',`CPFuser`='$cpfcnpj',`Email`='$email',`Telefone`='$telefone',`Senha`='$senha',`Estado`='$estado',`Cidade`='$cidade',`Rua`='$rua',`Numero`='$numero',`Bairro`='$bairro',`Complemento`='$complemento' WHERE `CPFuser` = $cpfcnpj";
        }

        if($this->con->query($sql) == TRUE){
            $this->con->close();
            return true;
        }else{
            $this->con->close();
            return false;
        } 
    }

    function deleta_perfil($tabela,$cpfcnpj,$email){
        if($tabela == "empresas"){
            $sql = "DELETE FROM `empresas` WHERE `CPNJ` = $cpfcnpj AND `Email` = $email;";
        }elseif($tabela == "tecnicos"){
            $sql = "DELETE FROM `tecnicos` WHERE `CPNJ` = $cpfcnpj AND `Email` = $email;";
        }elseif($tabela == "usuarios"){
            $sql = "DELETE FROM `usuarios` WHERE `CPNJ` = $cpfcnpj AND `Email` = $email;";
        }

        if($this->con->query($sql) == TRUE){
            $this->con->close();
            return true;
        }else{
            $this->con->close();
            return false;
        } 
    }

    function busca_empresas(){
        $x=0;
        $empresas = array();
        $result = $this->con->query("SELECT * FROM `empresas` WHERE 1");
        while($aux_query = $result->fetch_assoc()){
            $empresas[$x][0] = $aux_query['Nome'];
            $empresas[$x][1] = $aux_query['CNPJ'];
            $empresas[$x][2] = $aux_query['Email'];
            $empresas[$x][3] = $aux_query['Telefone'];
            $empresas[$x][4] = $aux_query['Estado'];
            $empresas[$x][5] = $aux_query['Cidade'];
            $empresas[$x][6] = $aux_query['Rua'];
            $empresas[$x][7] = $aux_query['Numero'];
            $empresas[$x][8] = $aux_query['Bairro'];
            $empresas[$x][9] = $aux_query['Complemento'];
            $empresas[$x][10] = $aux_query['Resumo'];
            $x++;
        }

        $this->con->close();
        return $empresas;
    }

    function busca_tecnicos(){
        $x=0;
        $tecnicos = array();
        $result = $this->con->query("SELECT * FROM `tecnicos` WHERE 1");
        while($aux_query = $result->fetch_assoc()){
            $tecnicos[$x][0] = $aux_query['Nome'];
            $tecnicos[$x][1] = $aux_query['CPFtec'];
            $tecnicos[$x][2] = $aux_query['Email'];
            $tecnicos[$x][3] = $aux_query['Telefone'];
            $tecnicos[$x][4] = $aux_query['Estado'];
            $tecnicos[$x][5] = $aux_query['Cidade'];
            $tecnicos[$x][6] = $aux_query['Rua'];
            $tecnicos[$x][7] = $aux_query['Numero'];
            $tecnicos[$x][8] = $aux_query['Bairro'];
            $tecnicos[$x][9] = $aux_query['Complemento'];
            $tecnicos[$x][10] = $aux_query['Resumo'];
            $x++;
        }

        $this->con->close();
        return $tecnicos;
    }

    function busca_unica($tabela,$nome,$cpfcnpj){
        $x=0;
        $dados = array();
        $result = $this->con->query("SELECT * FROM `$tabela` WHERE 1");
        if($tabela == "tecnicos"){
            while($aux_query = $result->fetch_assoc()){
                $dados[$x][0] = $aux_query['Nome'];
                $dados[$x][1] = $aux_query['CPFtec'];
                $dados[$x][2] = $aux_query['Email'];
                $dados[$x][3] = $aux_query['Telefone'];
                $dados[$x][4] = $aux_query['Estado'];
                $dados[$x][5] = $aux_query['Cidade'];
                $dados[$x][6] = $aux_query['Rua'];
                $dados[$x][7] = $aux_query['Numero'];
                $dados[$x][8] = $aux_query['Bairro'];
                $dados[$x][9] = $aux_query['Complemento'];
                $dados[$x][10] = $aux_query['Resumo'];
                $x++;
            }
        }else{
            while($aux_query = $result->fetch_assoc()){
                $dados[$x][0] = $aux_query['Nome'];
                $dados[$x][1] = $aux_query['CNPJ'];
                $dados[$x][2] = $aux_query['Email'];
                $dados[$x][3] = $aux_query['Telefone'];
                $dados[$x][4] = $aux_query['Estado'];
                $dados[$x][5] = $aux_query['Cidade'];
                $dados[$x][6] = $aux_query['Rua'];
                $dados[$x][7] = $aux_query['Numero'];
                $dados[$x][8] = $aux_query['Bairro'];
                $dados[$x][9] = $aux_query['Complemento'];
                $dados[$x][10] = $aux_query['Resumo'];
                $x++;
            }
        }

        $this->con->close();
        return $dados;
    }
}
?>