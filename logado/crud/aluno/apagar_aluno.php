<?php

 include_once("../cabecalho.php");

$nome = (isset($_POST['nome'])?$_POST['nome']:"inexistente");
$conexao= mysqli_connect("Localhost","root","","ppi");
if($conexao){
        $query = "delete from aluno where nome=?";
        $query_tratada = mysqli_prepare($conexao,$query);
        mysqli_stmt_bind_param($query_tratada,"s",$nome);         
    
    if(mysqli_stmt_execute($query_tratada)){    
        if(mysqli_stmt_affected_rows($query_tratada) > 0){
            echo "<h1 class=\"row align-items-center\">Registro Apagado<h1>";
        }else{
            echo "<h1 class=\"row align-items-center\">Registro não Apagado<h1>";
        }
        //include_once("../../index.php");
        //header("location:../../index/index.php");
    }
    mysqli_stmt_close($query_tratada);
    mysqli_close($conexao);        
}else{
    mysqli_close();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apagar Aluno</title>
</head>
<body>
    
</body>
</html>