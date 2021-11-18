<?php
// Recebendo dados do formulário
$name = $_POST['nome'];
$email = $_POST['email'];
$phone = $_POST['telefone'];
$message = $_POST['mensagem'];
$subject = "Mensagem do Site";

$headers = "Content-Type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Dados que serão enviados
$corpo = "Formulário da página de contato <br>";
$corpo .= "Nome: " . $name . " <br>";
$corpo .= "Telefone: " . $phone . " <br>";
$corpo .= "Email: " . $email . " <br>";
$corpo .= "Mensagem: " . $message . " <br>";

// Email que receberá a mensagem (Não se esqueça de substituir)
$email_to = 'janaina.nicolodi@aluno.iffar.edu.br';

// Enviando email
$status = mail($email_to, mb_encode_mimeheader($subject, "utf-8"), $corpo, $headers);

if ($status):
  // Enviada com sucesso
  header('location:email.php?status=sucesso');
else:
  // Se der erro
  header('location:email.php?status=erro');
endif;
?>