<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$idTurma=$_POST['idTurma'];
$senha = $_POST['senha'];
$conexao= mysqli_connect("Localhost","root","","ppi");
if($conexao){
    $query = "update professor set nome=?, email=?,idTurma=?, senha=? where id=?";
    $query_tratada = mysqli_prepare($conexao,$query);
    if($query_tratada){
        mysqli_stmt_bind_param($query_tratada,"ssisi",$nome,$email,$idTurma,$senha,$id);
        if(mysqli_stmt_execute($query_tratada)){            
            echo "oi";
            if(mysqli_stmt_affected_rows($query_tratada) > 0){
                echo "Registro Gravado";
            }else{
                echo "Registro não gravado";
            }
        }
        mysqli_stmt_close($query_tratada);
        mysqli_close($conexao);        
    }        
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
    <title>Document</title>
</head>
<body>
    
</body>
</html>