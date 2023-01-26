<?php
    session_start();
    require 'vendor/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    $mail= new PHPMailer(true);
    $mensagem = "Entrar em contato com <b>" . $_POST['nome'] . "</b> no Email <b>" . $_POST['email'] . "</b> com o assunto <b>" . $_POST['assunto'] . "</b>.<br>Mensagem do cliente: <b>". $_POST['mensagem'] . "</b>";
        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = '';
            $mail->Password   = '';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;
            
            $mail->setFrom('', 'Contato TECHCARE');
            $mail->addAddress('', 'Contato TECHCARE');
            $mail->addReplyTo('', 'Contato TECHCARE');
            $mail->isHTML(true); 
            $mail->Subject = 'Contato com Cliente';
            $mail->Body    = $mensagem;
            $mail->AltBody = $mensagem;
            $mail->send();
            header("Location:index_logado.php");
        } catch (Exception $e) {
            header("Location:index_logado.php");
        }
?>
