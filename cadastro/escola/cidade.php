 <?php
                    $conexao= mysqli_connect("Localhost","root","","ppi");
                    $query = "select * from cidade";
                    $resultado = mysqli_query($conexao,$query);
                    $i = 0;
                    echo "<select class=\"js-select2\" name=\"Cidade\">";
                        while($registro = mysqli_fetch_array($resultado)){
                            $nome[$i] = $registro['nome'];
                            echo "<option name=\"nome\" value=\"$nome[$i]\">$nome[$i]</option>";
                            $i++;
                        }
                        mysqli_close($conexao);
                    ?>