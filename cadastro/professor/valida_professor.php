<?php
$nome=$_POST['nome'];
$email = $_POST['email'];
$turma= $_POST['turma'];
$senha = $_POST['senha'];
$conexao= mysqli_connect("Localhost","root","","ppi");
$query= "insert into professor(nome,email,idTurma,senha) values(?,?,?,?)";
$query_tratada = mysqli_prepare($conexao,$query);

if($query_tratada){
    mysqli_stmt_bind_param($query_tratada,"ssis",$nome,$email,$idTurma,$senha);

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