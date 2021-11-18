<?php
$nome = $_POST['nome'];
$ano = $_POST['ano'];
$dataNascimento=$_POST['nascimento'];
isset($_POST['codigoEscola'])?$idEscola = $_POST['codigoEscola']: $idEscola = 1;
$idTurma = $_POST['turma'];
// $idTurma=1;
isset($_POST['id'])?$idResponsavel=$_POST['id']:$idResponsavel=1;
$senha = $_POST['senha'];
$conexao = mysqli_connect("localhost","root","","ppi");
echo $nome.$ano.$dataNascimento.$senha.$idEscola.$idTurma.$idResponsavel;
if($conexao){
    $query = "insert into aluno(nome,data_nascimento,idEscola,idTurma,idResponsavel) values(?,?,?,?,?)";
    $query_tratada = mysqli_prepare($conexao,$query);    
    if($query_tratada){
        mysqli_stmt_bind_param($query_tratada,"ssiii",$nome,$dataNascimento,$idEscola,$idTurma,$idResponsavel);
        if(mysqli_stmt_execute($query_tratada)){
            if(mysqli_stmt_affected_rows($query_tratada)>0){
                include_once("../cabecalho.php");
                echo "cadastro realizado com sucesso";
            }
        }else{
            echo "Cadastro não realizado";
        }
    }
    mysqli_stmt_close($query_tratada);
    mysqli_close($conexao);
}else{
    mysqli_close();
}
?>