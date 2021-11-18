<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SMADE</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <!-- <link rel="stylesheet" href="css/animate.css"> -->
    <!-- owl carousel CSS -->
    <!-- <link rel="stylesheet" href="css/owl.carousel.min.css"> -->
    <!-- themify CSS -->
    <!-- <link rel="stylesheet" href="css/themify-icons.css"> -->
    <!-- flaticon CSS -->
    <!-- <link rel="stylesheet" href="css/flaticon.css"> -->
    <!-- font awesome CSS -->
    <!-- <link rel="stylesheet" href="css/magnific-popup.css"> -->
    <!-- swiper CSS -->
    <!-- <link rel="stylesheet" href="css/slick.css"> -->
    <!-- <link rel="stylesheet" href="css/all.css"> -->
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo" width="100vh"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Cadastrar
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="../../cadastro/aluno/">Aluno</a>
                                        <a class="dropdown-item" href="../../cadastro/professor/">Professor</a>
                                        <a class="dropdown-item" href="../../cadastro/responsavel/">Responsável</a>
                                        <a class="dropdown-item" href="../../cadastro/turma/">Turma</a>


                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Editar
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="../crud/aluno/seleciona_aluno.php">Aluno</a>
                                        <a class="dropdown-item" href="../crud/escola/editar_escola.php">Escola</a>
                                        <a class="dropdown-item" href="../crud/professor/seleciona_professor.php">Professor</a>
                                        <a class="dropdown-item" href="../../crud/responsavel/seleciona_responsavel.php">Responsável</a>

                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Listar
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="../crud/aluno/listar_aluno.php">Aluno</a>
                                        <a class="dropdown-item" href="../crud/professor/listar_professor.php">Professor</a>
                                        <a class="dropdown-item" href="../crud/responsavel/listar_responsavel.php">Responsável</a>

                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Remover
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="../crud/aluno/remover_aluno.php">Aluno</a>
                                        <a class="dropdown-item" href="../crud/escola/remover_escola.php">Escola</a>
                                        <a class="dropdown-item" href="../crud/professor/remover_professor.php">Professor</a>
                                        <a class="dropdown-item" href="../crud/responsavel/remover_responsavel.php">Responsável</a>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="col-xl-6 col-md-6">
                <div class="banner_text">
                    <div class="banner_text_iner text-center">
                        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
                            <div style="text-align: center">
                                <?php
                                $conexao= mysqli_connect("Localhost","root","","ppi");
                                $query = "select * from turma";
                                $resultado = mysqli_query($conexao,$query);
                                $i = 0;
                                ?>
                                    <form action="envia_bilhete.php" class="form" method='POST'>Turma<select class="select" name="turma">
                                    <?php
                                    while($registro = mysqli_fetch_array($resultado)){ 
                                        $nome[$i] = $registro['nome'];
                                    echo "<option name=\"nome\" value=\"$nome[$i]\"> $nome[$i]</option>";
                                        $i++;
                                    }?>
                                    ?>
                                    <br><br>
                                    <textarea class="textarea" placeholder="Digite seu bilhete"></textarea>
                                    </select>
                                        <button class="contact100-form-btn" type="submit" value="Enviar">Enviar</button>
                                    </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </footer>
        <!-- footer part end-->

        <!-- jquery plugins here-->
        <!-- jquery -->
        <script src="js/jquery-1.12.1.min.js"></script>
        <!-- popper js -->
        <script src="js/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- easing js -->
        <script src="js/jquery.magnific-popup.js"></script>
        <!-- swiper js -->
        <script src="js/swiper.min.js"></script>
        <!-- swiper js -->
        <script src="js/masonry.pkgd.js"></script>
        <!-- particles js -->
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/owl.carousel2.thumbs.min.js"></script>
        <!-- swiper js -->
        <script src="js/slick.min.js"></script>
        <!-- custom js -->
        <script src="js/custom.js"></script>
</body>

</html>