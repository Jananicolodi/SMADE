<?php
    include_once("../cabecalho.php");
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!--===============================================================================================-->
 <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
    
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="cssAluno/util.css">
    <link rel="stylesheet" type="text/css" href="cssAluno/main.css">
    <title>Listar Aluno</title>
</head>
<body>
<h3 style="text-align:center"> Listar Professor</h3>
<table class="table table-striped">
  <thead> 
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome </th>
      <th scope="col">Email</th>
      <th scope="col">ID Turma</th>
      <!-- <th scope="col">Senha</th> -->
    </tr>
  </thead>
  <tbody>
  <?php
  $conexao = mysqli_connect("localhost","root","","ppi");
  if($conexao){
      $query = "select * from professor";
      $query_tratada = mysqli_prepare($conexao,$query);
      if($query_tratada){
          mysqli_stmt_execute($query_tratada);
          mysqli_stmt_bind_result($query_tratada,$id,$nome,$email,$idTurma,$senha);
          mysqli_stmt_store_result($query_tratada);
          while (mysqli_stmt_fetch($query_tratada)) {
           // printf("%s - %s - %s- %s - %d - %d - %d - %d",$nome,$ano,$data_nascimento,$senha,$idEscola,$idTurma,$idResponsavel,$id);
           echo " <tr>";
           echo " <td scope=\"row\">$id</td>";
      echo "<th >$nome</th>";
     echo " <td>$email</td>";
     echo " <td>$idTurma</td>";
    //  echo " <td>$senha</td>";

     echo "</tr>";

    
     
            // echo "<br>";            
        }
        mysqli_stmt_close($query_tratada);
        mysqli_close($conexao);
    }
}else{
    mysqli_close();
}
?>
   
  </tbody>
</table>
</body>
</html>
