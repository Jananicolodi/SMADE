<?php 
    $nome =isset( $_POST['nome'])?$_POST['nome']: "";
    $turma =isset( $_POST['turma'])?$_POST['turma']: "";    
    $data_nascimento =isset( $_POST['nascimento'])?$_POST['nascimento']: "";    
    $cpf =isset( $_POST['cpf'])?$_POST['cpf']: "";    
    $matricula =isset( $_POST['matricula'])?$_POST['matricula']: "";
    $codigoEscola = 1;    
   // $codigoEscola =isset( $_POST['codigoEscola'])?$_POST['codigoEscola']: "";    
    $email =isset( $_POST['email'])?$_POST['email']: "";
    $senha = isset( $_POST['senha'])?$_POST['senha']: "";
    
    $conexao = mysqli_connect("localhost","root","","ppi");
if($conexao){
    $query = "insert into usuarios(nome,data_nascimento,cpfResponsável,id_Escola,codigoEscola)
    values('$nome','$ano','$turma','$data_nascimento,
    '$cpf','$matricula','$codigoEscola','$email',)";
    
}