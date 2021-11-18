
<?php
session_start();
//variaveis
$idTurma= $_GET['turma'];
$idEscola = 1;
require './PHPMailer/src/Exception.php'; 
require './PHPMailer/src/PHPMailer.php'; 
require './PHPMailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// $idEscola=$_SESSION['idLogado'];
// $conexao= mysqli_connect("Localhost","root","","ppi");
// $query = "SELECT responsavel.email FROM responsavel INNER JOIN aluno ON responsavel.id = aluno.idResponsavel INNER JOIN turma ON turma.id = aluno.idTurma INNER JOIN escola ON aluno.idEscola = escola.id where turma.id=? and escola.id=?";
// $query_tratada = mysqli_prepare($conexao,$query);        
//         if($query_tratada){
//             mysqli_stmt_bind_param($query_tratada,"ii",$idTurma,$idEscola);
//             mysqli_stmt_execute($query_tratada);
//             mysqli_stmt_bind_result($query_tratada,$destinatario);
//             mysqli_stmt_store_result($query_tratada);
//             // $query = "select email from us where email =$destinatario";
//             $query = "SELECT responsavel.email FROM responsavel INNER JOIN aluno ON responsavel.id = aluno.idResponsavel INNER JOIN turma ON turma.id = aluno.idTurma INNER JOIN escola ON aluno.idEscola = escola.id where turma.id='$idTurma' and escola.id='$idEscola'";

//             $resultado = mysqli_query($conexao,$query);
//             $i = 0;
//             // echo $query_tratada;
//             // echo $resultado['nome'];
//              echo $destinatario;
//              $DESTINATARIOS = [];
//              while($registro = mysqli_fetch_array($resultado)){                

//                 // print_r($registro);

//                 array_push($DESTINATARIOS, $registro['email']);

//                 // $email = $registro[$i];      
                
                
//             }
            //print_r($DESTINATARIOS);
            //mysqli_free_result($resultado);
            
            // envia email para todos os destinatários
            // $i++;
          //  foreach ($DESTINATARIOS as $Destinario){  
                    try{
                    $mail  =  new  PHPMailer ( true );
                    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
                    $mail->isSMTP();                                            // Set mailer to use SMTP
                    $mail->Host= 'smtp.gmail.com';  // Specify main and backup SMTP servers
                    $mail->SMTPAuth= true;                                   // Enable SMTP authentication
                    $mail->Username= 'janasnicolodi@gmail.com';                     // SMTP username
                    $mail->Password= 'janaina2000';                               // SMTP password
                    $mail->SMTPSecure= 'tls';                                  // Enable TLS encryption, `ssl` also accepted
                    $mail->Port= 587; 
                    $mail->SMTPOptions = array(
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        )
                    );

                    
                    //remetente
                    $mail->setFrom('janasnicolodi@gmail.com');
                    //destinatario
                    // $destinatario = $_POST['email'];
                    $mail->addAddress('janaina.nicolodi@aluno.iffar.edu.br'); 
                    //foreach ($DESTINATARIOS as $Destinario){
                    //    $mail->addBCC($Destinario);  
                    //}
                    //    $mail->addAddress('joe@example.net'); 
                    //resposta
                    $mail->addReplyTo('info@example.com', 'Information');
                    // //copia
                    $mail->addCC('cc@example.com');
                    //    $mail->addAddress('joe@example.net'); 
                    //resposta
                    //$mail->addReplyTo('info@example.com', 'Information');
                    // //copia
                    //$mail->addCC('cc@example.com');
                    // //copia carbono
                   // $mail->addBCC("janaina.nicolodi@aluno.iffar.edu.br");
                    
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = 'teste de email aula';
                    //upload->diretorio->nome
                    // $email-> addAttachment('./imagem/imagem.php');
                    $mensagem = $_GET['mensagem'];
                    $mail->Body    = $mensagem;
                    $mail->AltBody = 'mensagem sem html';
                    
                    $mail->send();
                    echo 'Mensagem enviada';
                    
                }catch(Exception $e){
                    echo "Erro ao enviar mensagem!";
                     echo $e;
                }    
            //}
        //}mysqli_close($conexao);      
                //Server settings
?>