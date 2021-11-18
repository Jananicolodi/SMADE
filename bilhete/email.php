<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    <form name="contactform" method="POST" action="enviar-email.php">
        Nome:<input type="text" name="nome"><br><br>
        Telefone: <input type="number" name="telefone"><br>
        Assunto:<input type="text" name="assunto"><br><br>
        E-mail: <input type="email" name="email"><br><br>
        Mensagem: <textarea name="mensagem">
</textarea>    
        <br>
        <input type="submit" value="Enviar">
</form>
<?php
if(isset($_GET['status'])){
if($_GET['status'] == "sucesso"){
    echo"<script>Materialize.toast('Enviado com sucesso!',4000);</script>";
}else{
    echo "<script>Materialize.toast('Erro ao enviar!',4000);</script>";
}
}
?>
</body>
</html>