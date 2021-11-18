<?php
$mensagem = $_POST['mensagem'];
$destinatarios = $_POST['destinatarios'];
$data_criacao = date('Ymd');
$data_validade = $_POST['data_validade'];
$mensagem .= " Que irá ocorrer em: $data_validade";
$data_validade = str_replace("-","",$data_validade);
$command = "C:\adb\adb.exe shell am startservice --user 0 -n com.android.shellms/.sendSMS -e contact 55991345102 -e msg \"'$mensagem'\"";
$out = shell_exec($command);
echo $out;
$conexao= mysqli_connect("Localhost","root","","ppi");
$query = "SELECT responsavel.celular, responsavel.email FROM responsavel INNER JOIN aluno ON responsavel.id = aluno.idResponsavel INNER JOIN turma ON turma.id = aluno.idTurma INNER JOIN escola ON aluno.idEscola = escola.id where turma.id=? and escola.id = 1";
$query_tratada = mysqli_prepare($conexao,$query);        
session_start();
if($query_tratada){
   mysqli_stmt_bind_param($query_tratada,"i",$destinatarios);
   mysqli_stmt_execute($query_tratada);
   mysqli_stmt_bind_result($query_tratada,$numero_celular,$email);
    $celular = $numero_celular;
    mysqli_stmt_store_result($query_tratada);
    $resultado = mysqli_query($conexao,$query);
    echo $numero_celular;
    echo $out;
    while( mysqli_stmt_fetch($query_tratada)){
      echo $numero_celular;
      if($numero_celular != null){
        echo "oi";
       // $command = "C:\adb\adb.exe shell am startservice --user 0 -n com.android.shellms/.sendSMS -e contact +991345102 -e msg \"'$mensagem'\"";
       // $out = shell_exec($command);        
      }    
    }
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
   while($email){
    $mail->addCC($email);
}
$mail->Subject = 'SMADE';
$mail->AltBody = 'This is a plain-text message body';
$mail->Body = $mensagem;
if (!$mail->send()) {
    echo "Mensagem não enviada: " . $mail->ErrorInfo;
} else {
    echo "Messagem Enviada!";
}

            //     }catch(Exception $e){
  //                  echo "Erro ao enviar mensagem!";
    //                 echo $e;
    $status = 'enviado';
    $query = "insert into bilhete(descricao,data_criacao,data_validade,status) values('$mensagem',$data_criacao, $data_validade,'$status')";
    //$resultado = mysqli_query($conexao,$query);
    echo $query;
    if(mysqli_num_rows($resultado) > 0){
      echo "Mensagem salva";
      mysqli_free_result($resultado);
      
    }
                //} 
}mysqli_close($conexao);



?>