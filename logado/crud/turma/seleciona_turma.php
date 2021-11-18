<?php
include_once("../cabecalho.php");
require("./conexao.php");
$query = "select * from turma  order by nome";
$resultado = mysqli_query($conexao,$query);
$i = 0;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seleciona Aluno</title>
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
    <link rel="stylesheet" type="text/css" href="cssTurma/util.css">
    <link rel="stylesheet" type="text/css" href="cssTurma/main.css">
    <!--===============================================================================================-->

</head>
<body style="background-color: #a2d8ae">
<div class="container-contact100">
        <div class="wrap-contact100">
            <form class="contact100-form validate-form" action="editar_turma.php" method="Post">
                <span class="contact100-form-title">
                        Turmas Cadastradas
                    </span>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <span class="label-input100">Turmas</span>
                    <select  class=js-select2 name='nome'>";                         
                    <?php
                    while($registro = mysqli_fetch_array($resultado)){ 
                        $nome[$i] = $registro['nome'];
                        echo "<option name=\"nome\" value=\"$nome[$i]\">$nome[$i]</option>";
                        $i++;
                    }
                    // echo "</select><input type=\"submit\" value=\"Editar\"></form>";
                    ?>
                    </select>    
                 <div class="dropDownSelect2"></div>
                </div>
                <div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Editar
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
        </form>
</body>
</html>