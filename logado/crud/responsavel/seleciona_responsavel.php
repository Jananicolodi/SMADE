<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="cssResponsavel/util.css">
    <link rel="stylesheet" type="text/css" href="cssResponsavel/main.css">
</head>
<body style="background-color: #add4cc">
<?php
    include_once("../cabecalho.php");
$conexao= mysqli_connect("Localhost","root","","ppi");
$query = "select * from responsavel order by nome";
$resultado = mysqli_query($conexao,$query);
$i = 0;?>
<div class="container-contact100">
        <div class="wrap-contact100">
            <form class="contact100-form validate-form" action="editar_responsavel.php" method="Post">
                <span class="contact100-form-title">
                        Responsáveis Cadastrados
                    </span>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <span class="label-input100">Responsável</span>
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