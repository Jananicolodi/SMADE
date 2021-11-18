<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salvar Turma</title>
</head>
<body>
<?php
include_once("../cabecalho.php");
$id = $_POST['id'];
$nome = $_POST['nome'];
$sala= $_POST['sala'];
$ano = $_POST['ano'];
$idEscola=$_POST['idEscola'];
$conexao= mysqli_connect("Localhost","root","","ppi");
if($conexao){
    $query = "update turma set ano=?, nome=?,sala=?,idEscola=? where id=?";
    $query_tratada = mysqli_prepare($conexao,$query);
    if($query_tratada){
        mysqli_stmt_bind_param($query_tratada,"isssi",$id,$ano,$nome,$sala,$idEscola);
        if(mysqli_stmt_execute($query_tratada)){            
            if(mysqli_stmt_affected_rows($query_tratada) > 0){
                echo "<h1>Registro Gravado</h1>";
            }else{
                echo "<h1>Registro não gravado</h1>";
            }
        }
        mysqli_stmt_close($query_tratada);
        mysqli_close($conexao);        
    }        
}else{
    mysqli_close();
}

?>
    
</body>
</html>