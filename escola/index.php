<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Escola</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <button type="button" id="voltar" onclick="voltar()"><img src="../seta.png"></button>
    <form name="form1" action="escola.php" method="POST">
        <h1>Escola</h1>
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome">
            <input type="text" name="cpfAdm" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="CPF do administrador" required>
            <input type="text" name="codEscola" placeholder="Digite o código">
        </div>
        <p>Escolaridade:<br>
            <label><input type="checkbox" name="escolaridade" value="inicial">escolaridade inicial</label><br>
            <label> <input type="checkbox" name="escolaridade" value="fundamental">escolaridade fundamental</label><br>
            <label> <input type="checkbox" name="escolaridade" value="medio">escolaridade médio</label><br> Cidade:
            <select name="cidade">             
                <option value="Cidade1">Cidade1</option>
                <option value="Cidade2">Cidade2</option>
                <option value="Cidade3" >Cidade3</option>
                <option value="Cidade4">Cidade4</option>
            </select>
        </p>
        <div>
            <input type="text" name="endereco" placeholder="Rua">
            <input type="number" name="numeroCasa" placeholder="Número da residência">
            <input type="password" name="senha" placeholder="Senha">
            <input type="password" name="confirme" placeholder="Repita a senha">
        </div>
        <button type="submit" onclick="validar()">Cadastrar</button>
        <button type="reset">Limpar</button>
        <script src="js.js"></script>
    </form>
</body>

</html>