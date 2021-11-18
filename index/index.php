<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="icon" href="logo_titulo_turquesa.png">
    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap1.min.css" rel="stylesheet">
    <!-- Estilos customizados para esse template -->
    <link href="css/signin1.css" rel="stylesheet">
</head>
<body class="text-center">
    <form class="form-signin" action="verifica.php" method="POST">
        <img class="mb-4" src="logo.png" alt="" width="200vh">
        <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>
        <label for="inputEmail" class="sr-only">Usuário</label><br>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Seu email" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required>        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <!-- <a href="../cadastro/escola/index.php">Realizar cadastro de escola</a> -->
            <?php
        if(isset($_GET['erro'])){
            ?><br><div name= "erro" class="h5 mb-3 font-weight-normal" >Dados incorretos preencha novamente</div>
            <?php
            usleep(10);
           ?> 
       <?php }
        ?>
    </form>
</body>
</html>