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
        <p>Calcular o valor total do salário com comissão:
        <form id="minhaForm" method="get" action="exerc_24.php">
            Salário fixo: <input type="txt_number" name="salario_fixo"><br><br> 
            Valor das vendas efetuadas: <input type="txt_number" name="valor_vendas"><br><br>
            <input type="submit" value="Calcular">
        </form>

        <?php
            
            if (!empty($_GET['salario_fixo']) 
            && !empty($_GET['valor_vendas'])) {
                
                $salario_fixo = $_GET['salario_fixo'];
                $valor_vendas = $_GET['valor_vendas'];

                calcularNovoSalario(
                    $salario_fixo,                   
                    $valor_vendas
                );                   
            }               
        ?>

        <p>
            <a href="../">Voltar</a>
        </p>
    </body>
</html>
<?php

    function calcularNovoSalario($salario_fixo, $valor_vendas)
    {
       if ($valor_vendas <= 1500) {

            $comissao = $valor_vendas * 3/100;
            $salario_total = $salario_fixo + $comissao;

            echo "<p>O valor final do salário é de R$ $salario_total.";

       } else {

            $comissao = $valor_vendas * 8/100;
            $salario_total = $salario_fixo + $comissao;

            echo "<p>O valor final do salário é de R$ $salario_total.";
       }                         
    }