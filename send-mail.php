<?php

use PHPMailer\PHPMailer\PHPMailer;
session_start();

require_once 'helpers/root-dir.php'; 
require 'config-mail.php';
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recaptchaSecret = CONTACTFORM_RECAPTCHA_SECRET_KEY;
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecret&response=$recaptchaResponse");
    $responseKeys = json_decode($response, true);

    if (intval($responseKeys["success"]) !== 1) {
        $_SESSION['message'] = 'Por favor, verifique o reCAPTCHA.';
        $_SESSION['message_type'] = 'error';
        header("Location: https://baixada-web-studio.great-site.net/");
        exit();
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->SMTPDebug = CONTACTFORM_PHPMAILER_DEBUG_LEVEL;
    $mail->Host = CONTACTFORM_SMTP_HOSTNAME;
    $mail->SMTPAuth = true;
    $mail->Username = CONTACTFORM_SMTP_USERNAME;
    $mail->Password = CONTACTFORM_SMTP_PASSWORD;
    $mail->SMTPSecure = CONTACTFORM_SMTP_ENCRYPTION;
    $mail->Port = CONTACTFORM_SMTP_PORT;

    $mail->setFrom(CONTACTFORM_FROM_ADDRESS, CONTACTFORM_FROM_NAME);
    $mail->addAddress(CONTACTFORM_TO_ADDRESS, CONTACTFORM_TO_NAME);

    $mail->isHTML(true);

    $mail->Subject = "Novo contato de $name";
    $mail->Body = "
        <h2>Detalhes do Contato</h2>
        <p><strong>Nome:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Telefone:</strong> $phone</p>
        <p><strong>Mensagem:</strong><br/>$message</p>
    ";

    if ($mail->send()) {
        $_SESSION['message'] = 'Sua mensagem foi enviada com sucesso!';
        $_SESSION['message_type'] = 'success'; 
    } else {
        $_SESSION['message'] = 'Ocorreu um erro ao enviar sua mensagem. Por favor, tente novamente mais tarde.';
        $_SESSION['message_type'] = 'error';
    }

    header("Location: https://baixada-web-studio.great-site.net/");
    exit();
}
?>
