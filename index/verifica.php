<?php
$email = $_POST['email'];
$senha = $_POST['senha'];
$conexao = mysqli_connect("Localhost","root","","ppi");
if($conexao){
    $query = "select * from professor where email=? and senha=?";
    $query_tratada = mysqli_prepare($conexao,$query);
    if($query_tratada){
        echo("oi");
        mysqli_stmt_bind_param($query_tratada,"ss",$email,$senha);
        mysqli_stmt_execute($query_tratada);
        mysqli_stmt_bind_result($query_tratada,$id,$nome);
        echo $telefone;
        mysqli_stmt_store_result($query_tratada);
       // echo $endereco;
        if(mysqli_stmt_num_rows($query_tratada)> 0){
            echo "oi";
            mysqli_stmt_fetch($query_tratada);
            session_start();
            echo $nome;
            $_SESSION['idLogado'] = $id;
            $_SESSION['nomeLogado'] = $nome;
            $_SESSION['emailLogado'] = $email;
            $_SESSION['senhaLogado'] = $senha;
            mysqli_stmt_close($query_tratada);
            mysqli_close($conexao);
            header("Location:../logado/index/index.php");
        }else{
            header("Location:../index/index.php?erro=1");
 
        }
    }
}else{
    mysqli_close();
}
?>