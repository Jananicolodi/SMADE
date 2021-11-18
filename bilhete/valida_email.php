<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <?php
    $nome= $_POST['nome'];
    $assunto=$_POST['assunto'];
    $mensagem=$_POST['mensagem'];
    $email = $_POST['email'];

    $to= "janaina.nicolodi@aluno.iffar.edu.br";
    $subject = $assunto;
    $message= "Nome: $nome <br>Assunto: $assunto<br> Mensagem:$mensagem";
    $header = "MIME-Version:1.0 \n ";
    $header .= "Content-type:text/html/charset=iso-8859-1\n";
    $header .= "From: $email\n";
    mail($to,$subject,$message,$header);
    echo "email enviado"; 
    ?>
</body>
</html>