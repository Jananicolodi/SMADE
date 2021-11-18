<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="cssAluno/util.css">
    <link rel="stylesheet" type="text/css" href="cssAluno/main.css">
    
    <title>Salvar Aluno</title>
</head>
<body>
<?php
    include_once("../cabecalho.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$ano = $_POST['ano'];
$turma= $_POST['turma'];
$dataNascimento = $_POST['data_nascimento'];
if(isset($_POST['codigoEscola'])){
    $idEscola = $_POST['codigoEscola'];
}else{ $idEscola = 1;}
$idTurma = $_POST['turma'];
isset($_POST['id'])?$idResponsavel=$_POST['id']:$idResponsavel=1;
$senha = $_POST['senha'];
$conexao = mysqli_connect("localhost","root","","ppi");
echo $dataNascimento;
if($conexao){
    echo "oi";
    $query = "update aluno set nome=?,ano=\"pré\",data_nascimento=?, senha=\"123\", idEscola=1,idTurma=1 ,idResponsavel=1 where id=?";
    $query_tratada = mysqli_prepare($conexao,$query);
    if($query_tratada){
        mysqli_stmt_bind_param($query_tratada,"ssi",$nome,$dataNascimento,$id);
        // mysqli_stmt_bind_param($query_tratada,"ssssiiii",$nome,$ano,$dataNascimento,$senha,$idEscola,$idTurma,$idResponsavel,$id);
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