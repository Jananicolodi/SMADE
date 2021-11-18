<?php
$conexao= mysqli_connect("Localhost","root","","ppi");
$query = "select * from escola";
$resultado = mysqli_query($conexao,$query);
$i = 0;
echo "<form action=\"apagar_escola.php\" method='POST'>Escola<select name='nome'>";
while($registro = mysqli_fetch_array($resultado)){ 
    $nome[$i] = $registro['nome'];
    echo "<option name=\"nome\" value=\"$nome[$i]\">$nome[$i]</option>";
    $i++;
}
echo "</select><input type=\"submit\" value=\"Excluir\"></form>";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Remover Escola</title>
</head>
<body>
    
</body>
</html>