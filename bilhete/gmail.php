<?php
date_default_timezone_set('Etc/UTC');
require './PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "smadeiffar@gmail.com";
$mail->Password = "Smade2019";
$mail->setFrom('from@example.com', 'First Last');
$mail->addReplyTo('replyto@example.com', 'First Last');
$mail->addAddress('janasnicolodi@gmail.com');
$mail->addCC('janasnicolodi@gmail.com');

$mail->addAddress('janaina.nicolodi@aluno.iffar.edu.br');

$mail->Subject = 'SMADE';
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
$mail->AltBody = 'This is a plain-text message body';
//$mail->addAttachment('logo_titulo_turquesa.png');
$mail->Body = 'Este é um e-mail teste ok !!!';

//send the message, check for errors
if (!$mail->send()) {
    echo "Mensagem não enviada: " . $mail->ErrorInfo;
} else {
    echo "Messagem Enviada!";
}
