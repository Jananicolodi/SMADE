<?php
$nome=$_POST['nome'];
$emailAdm=$_POST['emailAdm'];
$cidade=$_POST['cidade'];
$escolaridade=$_POST['escolaridade'];
$endereco =$_POST['rua'];
$senha=$_POST['senha'];

$conexao= mysqli_connect("Localhost","root","","ppi");
$query= "insert into escola(nome,cpfAdm,cidade,escolaridade,endereco,senha) values(?,?,?,?,?,?)";
$query_tratada = mysqli_prepare($conexao,$query);
if($query_tratada){
    mysqli_stmt_bind_param($query_tratada,"sissss",$nome,$emailAdm,$cidade,$escolaridade,$endereco,$senha);

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