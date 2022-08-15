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
        <p>Valor do combustível:
        <form id="minhaForm" method="get" action="exerc_35.php">
            Número de litros: <input type="text" name="litros"><br><br> 
            <select name="combustivel">
                <option value="a">Álcool</option>
                <option value="g" selected>Gasolina</option>
            </select>

            <input type="submit" value="Calcular">
        </form>
        <?php
    
            if (isset($_GET['litros'])
            && isset($_GET['combustivel'])) {
                
                $litros = $_GET['litros'];
                $combustivel = $_GET['combustivel'];


                calcularValorCombustivel($litros, $combustivel);
                
            }
        ?>
            <p>
                <a href="../">Voltar</a>
            </p>
    </body>
</html>
<?php

        function calcularValorCombustivel($litros, $combustivel)
        {
          
          
            $valor = 2.90;
            $porcentagem_abaixo_20 = 3;
            $porcentagem_acima_20 = 5;

            if ($combustivel == 'g') {
                
                $valor = 3.30;
                $porcentagem_abaixo_20 = 4;
                $porcentagem_acima_20 = 6;

            } 
               
            if ($litros <= 20) {
                
                $valor_combustivel = ($litros * $valor) - (($litros * $valor) * $porcentagem_abaixo_20) / 100;
                echo '<p>R$'." ".  $valor_combustivel;

            } else {

                $valor_combustivel = ($litros * $valor) - (($litros * $valor) * $porcentagem_acima_20) / 100;
                echo '<p>R$'." ".  $valor_combustivel;
            }

        }
      