<?php
    session_start();
    include "conexao.php";
    require 'vendor/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    $mail= new PHPMailer(true);
    $con = new Conexao;
    $con->conecta();
    $existe = $con->email_existente($_POST['tabela'],$_POST['email']);
    if($existe == true){
        try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'cursocristopher@gmail.com';
        $mail->Password   = 'lbwkemijkrxzyjzv';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
        
        $mail->setFrom('cursocristopher@gmail.com', 'Suporte TECHCARE');
        $mail->addAddress($_POST['email'], 'Cliente');
        $mail->addReplyTo('cursocristopher@gmail.com', 'Suporte TECHCARE');

        $mail->isHTML(true); 
        $mail->Subject = 'Redefinicao de Senha';
        $mail->Body    = '<p>Clique no link para redefinir a sua senha no site da TECHCARE.</p><br><a href="https://techcaresenac.000webhostapp.com/atualiza_senha.php" class="logo">Redefinir</a>';
        $mail->AltBody = 'Clique no link para redefinir a sua senha no site da TECHCARE. https://techcaresenac.000webhostapp.com/atualiza_senha.php';
        $mail->send();
        $_SESSION['existe'] = true;
        header("Location:escolha.php");
        } catch (Exception $e) {
        }
    }else{
        $_SESSION['existe'] = false;
        header("Location:recupera.php");
    }
?>