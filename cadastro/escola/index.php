<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro Escola</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
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
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>


    <div class="container-contact100">
        <div class="wrap-contact100">
            <form class="contact100-form validate-form" action="cadastra.php" method="POST">
                <span class="contact100-form-title" >
					Cadastro da Escola:
				</span>

                <div class="wrap-input100 validate-input bg1" data-validate="Por favor digite seu nome">
                    <span class="label-input100">Nome*</span>
                    <input class="input100" type="text" name="nome" placeholder="Digite seu nome">
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="Por favor digite seu Email (e@a.x)">
                    <span class="label-input100">Email *</span>
                    <input class="input100" type="text" name="emailAdm" placeholder="Digite seu Email ">
                </div>

                <div class="wrap-input100 bg1 rs1-wrap-input100">
                    <span class="label-input100">Escolaridade</span><br>
                    <label><input type="checkbox" name="escolaridade" value="inicial">escolaridade inicial</label><br>
                    <label> <input type="checkbox" name="escolaridade" value="fundamental">escolaridade fundamental</label><br>
                    <label> <input type="checkbox" name="escolaridade" value="medio">escolaridade médio</label><br>
                </div>
                <div class="wrap-input100 bg1 rs1-wrap-input100">
                    <span class="label-input100">Cidade</span>
                    <?php
                    $conexao= mysqli_connect("Localhost","root","","ppi");
                    $query = "select * from cidade";
                    $resultado = mysqli_query($conexao,$query);
                    $i = 0;
                    echo "<select class=\"js-select2\" name=\"cidade\">";
                        while($registro = mysqli_fetch_array($resultado)){
                            $nome[$i] = $registro['nome'];
                            echo "<option name=\"nome\" value=\"$nome[$i]\">$nome[$i]</option>";
                            $i++;
                        }
                        mysqli_close($conexao);
                    ?>
                        </select>

                        <div class="dropDownSelect2"></div>
                </div>
                <div class="wrap-input100 bg1 rs1-wrap-input100">
                    <span class="label-input100">Rua</span>
                    <input class="input100" type="text" name="rua" placeholder="Digite o nome da rua onde mora">
                </div>
                <div class="wrap-input100 bg1 rs1-wrap-input100">
                    <span class="label-input100">Número</span>
                    <input class="input100" type="text" name="numero" placeholder="Digite o número da moradia">
                </div>
                <div class="wrap-input100 validate-input bg1" data-validate="Por favor digite sua senha">
                    <span class="label-input100">Senha*</span>
                    <input class="input100" type="password" name="senha" placeholder="Digite sua senha">
                </div>
                <div class="wrap-input100 validate-input bg1" data-validate="Por favor repita a senha ">
                    <span class="label-input100">Confirme a senha*</span>
                    <input class="input100" type="password" onblur="valida_senha()" name="confirme" placeholder="Digite a senha novamente">
                </div>
                <!-- <div class="wrap-input100 validate-input bg1" id="senha_incorreta"> -->


                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
						<span>
                            Cadastrar
                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
                </div>
            </form>
        </div>
    </div>



    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
        function valida_senha() {

            var senha = document.getElementsByName("senha")
            var confirme = document.getElementsByName("confirme")
            if (senha !== confirme) {
                innerHTML.document.getElementById("senha_incorreta") = "Senhas diferentes";
            }

        }
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });


            $(".js-select2").each(function() {
                $(this).on('select2:close', function(e) {
                    if ($(this).val() == "Please chooses") {
                        $('.js-show-service').slideUp();
                    } else {
                        $('.js-show-service').slideUp();
                        $('.js-show-service').slideDown();
                    }
                });
            });
        })
    </script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/noui/nouislider.min.js"></script>
    <script>
        var filterBar = document.getElementById('filter-bar');

        noUiSlider.create(filterBar, {
            start: [1500, 3900],
            connect: true,
            range: {
                'min': 1500,
                'max': 7500
            }
        });

        var skipValues = [
            document.getElementById('value-lower'),
            document.getElementById('value-upper')
        ];

        filterBar.noUiSlider.on('update', function(values, handle) {
            skipValues[handle].innerHTML = Math.round(values[handle]);
            $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
            $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
        });
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

</body>

</html>