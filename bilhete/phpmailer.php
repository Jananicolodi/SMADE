<?php
 //Incluir PHPMailer
 require("./PHPMailer/PHPMailerAutoload.php");
 //criar instancia do PHPMailer
$mail = new PHPMailer();

//habilitar SMTP, o que é SMTP
$mail->isSMTP();

$mail->SMTPOptions = array(
    'ssl'=> array(
        'verify_peer'=> false,
        'verify_peer_name' => false,
        'allow_self_signed'=> true
    )
);
//debug
$mail->SMTPDebug=3;
//Host 
$mail->Host='smtp@gmail.com';
//tipo de proteção
$mail->STMTSecure = "tsl";
//porta
$mail->Port = 587;
//autenticação
$mail->SMTPAuth = true;
//detalhes da conta de email
$mail->Username='smadeiffar@gmail.com';
$mail->Password = 'Smade2019';
//detalhes do email
$mail->setFrom ('smadeiffar@gmail.com','Site');
$mail->addAddress('janasnicolodi@gmail.com');
$mail->Subject = 'email de teste';
$mail->Body = 'Este é um e-mail teste ok !!!';
//mensagem de envio ou erro
if($mail->send())
    echo "email enviado com sucesso";
    else echo "Deu algum erro";

// $Mailer = new PHPMailer();
// $Mailer->IsSMTP();
// $Mailer->isHTML(true);
//  $Mailer->Charset = 'UTF-8';
//  $Mailer->SMTPAuth = true;
//  $Mailer->SMTPDebug = false;
//  $Mailer->SMTPSecure = 'ssl';
//  $Mailer->Host = 'smtp.live.com';
//  $Mailer->Port = 465;
//  $Mailer->Username = 'Smade2019@gmail.com';
//  $Mailer->Password = 'Smade2019';
//  $Mailer->From = 'Smade2019@gmail.com';
//  $Mailer->FromName = 'Seu Nome';
//  $Mailer->Subject = 'Teste';
//  $Mailer->Body = 'Mensagem em HTML';
//  $Mailer->AltBody = 'Mensagem em texto';
//  $Mailer->AddAddress('janasnicolodi@gmail.com');
 
//  if ($Mailer->Send())
//  {
//      echo "Enviado com sucesso";
//     }
?>

