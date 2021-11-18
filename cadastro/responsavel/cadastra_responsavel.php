<?php
//variaveis
$nome = $_POST['nome'];
$email=$_POST['email'];
isset($_POST['telefone'])?$telefone=$_POST['telefone']: $telefone=0;
isset($_POST['celular'])?$celular=$_POST['celular']:$celular=0;

// $notificacao = $_POST['notificacao'];
// $cidade=$_POST['cidade'];
// $rua=$_POST['rua'];
// $numero=$_POST['numero'];
$_POST['senha']=== $_POST['confirme'] ?$senha=$_POST['senha']: $senha=null;
//conexão com banco de dados
$conexao= mysqli_connect("Localhost","root","","ppi");
$query= "insert into responsavel(nome,telefone,celular,email,senha) values(?,?,?,?,?)";
$query_tratada = mysqli_prepare($conexao,$query);

if($query_tratada){
    mysqli_stmt_bind_param($query_tratada,"siiss",$nome,$telefone,$celular,$email,$senha);

    if(mysqli_stmt_execute($query_tratada)){
        if(mysqli_stmt_affected_rows($query_tratada)>0){
            echo "cadastro realizado com sucesso";
        }
    }else{
        echo "Cadastro não realizado";
    }
    mysqli_stmt_close($query_tratada);
    mysqli_close($conexao);
}else{
    mysqli_close();
}


?>