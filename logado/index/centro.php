<section class="banner_part"  style="text-align:center">
        <div class="container">
            <div class="">
                <div class=""><br>
                    <div class="banner_text_iner text-center">
                        <div class="wrap-input100 validate-input ">
                            <div>
                                <?php
                                $conexao= mysqli_connect("Localhost","root","","ppi");
                                mysqli_set_charset($conexao, "utf8");
                                $query = "select * from turma";
                                $resultado = mysqli_query($conexao,$query);
                                $i = 0;
                                ?>
                                    <form action="../../bilhete/valida_bilhete.php" class="form" method='POST'>
                                            <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                                    <span class="label-input100">Turma destinatária:</span>
    
                                    <select class="js-select2" name="destinatarios">
                                    <?php
                                    while($registro = mysqli_fetch_array($resultado)){ 
                                        $nome[$i] = $registro['nome'];
                                        $id[$i] = $registro['id'];
                                    echo "<option name=\"nome\" value=\"$id[$i]\"> $nome[$i]</option>";
                                        $i++;
                                    }?>
                                    
                        </select>
                    <div class="dropDownSelect2"></div>

                </div>
                                    <label for="inputEmail" class="sr-only">Bilhete</label><br>
                                    <h6 style="font-size: 220%">Bilhete: </h6>
                                    <textarea class="form-control" placeholder="Digite seu bilhete" name="mensagem" required autofocus></textarea>
                                    </select><br>
                                    <h6 style="font-size: 220%">Data que irá ocorrer:</h6><input  style="font-size: 30px" type="date" id="data" name="data_validade"><br>
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
                                    </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>