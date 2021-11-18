<?php
$nome = $_POST['nome'];
$cpfAdm = $_POST['cpfAdm'];
$escolaridade = $_POST['escolaridade'];
$cidade = $_POST['cidade'];
$endereco = $_POST['endereco'];
$numeroCasa = $_POST['numeroCasa'];
$senha = $_POST['senha'];
$conexao = mysqli_connect("localhost","root","","ppi");
if($conexao){
    $query = "insert into escola(nome,cpfAdm,cidade,escolaridade,endereco,numeroCasa,senha) values(?,?,?,?,?,?,?)";
    $query_tratada = mysqli_prepare($conexao,$query);
    if($query_tratada){
        echo "oi";
        mysqli_stmt_bind_param($query_tratada,"sisssis",$nome,$cpfAdm,$cidade,$escolaridade,$endereco,$numeroCasa,$senha);
        if(mysqli_stmt_execute($query_tratada)){

            if(mysqli_stmt_affected_rows($query_tratada)>0){
                echo "cadastro relizado com sucesso";
            }
        }else{
            echo "Cadastro não realizado";
        }
        mysqli_stmt_close($query_tratada);
        mysqli_close($conexao);
    }
    
    
    }else{
        mysqli_close();
    }
?>