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
        <p>Calcular o valor do salário total com horas extras:
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
        $horas_extras = ($horas_mes - 160) * ($salario_hora) + ($salario_hora * 50/100);

        $salario_total = 160 * $salario_hora + $horas_extras;

        echo "O novo salário é de $salario_total.";

    }
            
