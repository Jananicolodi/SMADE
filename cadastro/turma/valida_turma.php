<?php
$nome = $_POST['nome'];
$ano = $_POST['ano'];
isset($_POST['codigoEscola'])?$idEscola = $_POST['codigoEscola']: $idEscola = 1;
$sala = $_POST['sala'];
isset($_POST['id'])?$idResponsavel=$_POST['id']:$idResponsavel=1;
$conexao = mysqli_connect("localhost","root","","ppi");
if($conexao){
    $query = "insert into turma(ano,nome,sala,idEscola) values(?,?,?,?)";
    $query_tratada = mysqli_prepare($conexao,$query);
    
    if($query_tratada){
    mysqli_stmt_bind_param($query_tratada,"sssi",$ano,$nome,$sala,$idEscola);
    if(mysqli_stmt_execute($query_tratada)){
        if(mysqli_stmt_affected_rows($query_tratada)>0){
            echo "cadastro realizado com sucesso";
            header("Location:../../logado/index.php");
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