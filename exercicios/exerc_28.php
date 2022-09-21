<!DOCTYPE html>
<html>
    <head>
        <style>

            *{
                margin: 0px;
                padding: 0px;
            }

            #minhaForm {
                border: 1px solid black;
                margin: 10px;
                padding: 10px;
                width: 240px;

            }

            p { 
                border: 1px solid black;
                margin: 10px;
                padding: 10px;
                width: 240px;
            }

        </style>
    </head>
    <body>
        <p>Digite três valores e veja qual é o maior:
        <form id="minhaForm" method="get" action="exerc_28.php">
            Valor 1: <input type="txt_number" name="valor_1"><br><br> 
            Valor 2: <input type="txt_number" name="valor_2"><br><br> 
            Valor 3: <input type="txt_number" name="valor_3"><br><br> 
            <input type="submit" value="Verificar">
        </form>

        <?php
            
            if (isset($_GET['valor_1'])
            && !empty($_GET['valor_2']) 
            && !empty($_GET['valor_3'])) {

                $valor_1 = $_GET['valor_1'];
                $valor_2 = $_GET['valor_2'];
                $valor_3 = $_GET['valor_3'];

                verificarMaiorValor($valor_1, $valor_2, $valor_3);                
            }
        ?>

        <p>
            <a href="../">Voltar</a>
        </p>
    </body>
</html>
<?php

    function verificarMaiorValor($valor_1, $valor_2, $valor_3)
    {

        if ($valor_1 > $valor_2 && $valor_1 > $valor_3) {

            echo '<p>O maior é: '.$valor_1;

        } elseif ($valor_2 > $valor_1 && $valor_2 > $valor_3) {

            echo '<p>O maior é: '.$valor_2;

        } else {

            echo '<p>O maior é: '.$valor_3;
        }          
    }