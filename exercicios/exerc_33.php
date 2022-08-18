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
        <p>Digite dois valores:
        <form id="minhaForm" method="get" action="exerc_33.php">
            Valor 1: <input type="txt_number" name="valor_1"><br><br> 
            Valor 2: <input type="txt_number" name="valor_2"><br><br> 

            <input type="submit" value="Verificar">
        </form>
        <?php
            
            if (isset($_GET['valor_1'])
            && !empty($_GET['valor_2'])) {

                $valor_1 = $_GET['valor_1'];
                $valor_2 = $_GET['valor_2'];

                verificarValor($valor_1, $valor_2);
                
            }
        ?>
            <p>
                <a href="../">Voltar</a>
            </p>
    </body>
</html>
<?php

        function verificarValor($valor_1, $valor_2)
        {

            if ($valor_1 > $valor_2) {

                echo "<p>O primeiro é maior.";

            } elseif($valor_2 > $valor_1) {

                echo "<p>O segundo é maior.";

            } else {

                echo "<p>Números iguais.";
            }
            
        }