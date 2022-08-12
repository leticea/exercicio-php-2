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
        <p>Saber o valor do salário com as horas extras:
        <form id="minhaForm" method="get" action="exerc_22.php">
            Horas trabalhadas por mês: <input type="txt_number" name="horas_mes"><br><br> 
            Salário por hora: <input type="txt_number" name="salario_hora"><br><br>
           
            <input type="submit" value="Calcular">
        </form>
        <?php
            
            if (!empty($_GET['horas_mes']) 
            && !empty($_GET['salario_hora']) 
            ) {
                $horas_mes = $_GET['horas_mes'];
                $salario_hora = $_GET['salario_hora'];

                calcularNovoSalario(
                    $horas_mes,                   
                    $salario_hora
                );                   
            }               
        ?>
            <p>
                <a href="../">Voltar</a>
            </p>
    </body>
</html>
<?php

    function calcularNovoSalario($horas_mes, $salario_hora)
    {
        if($horas_mes <= 160) {

            $salario = $horas_mes * $salario_hora;
            echo "<p>Não tem horas extras.";

        }else {

            $salario = 160 * $salario_hora;

            $horas_extras = $horas_mes - 160;

            $valor_normal = $salario_hora + ($salario_hora * 50/100);

            $salario_extras = $valor_normal * $horas_extras;

            $total = $salario + $salario_extras;

            echo "<p>O salário total com as horas extras é de R$ $total.";
        }
                 
    }
            
