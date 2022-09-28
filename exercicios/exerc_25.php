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
        <p>Calcule o seu saldo:
        <form id="minhaForm" method="get" action="exerc_25.php">
            Numero da conta: <input type="txt_number" name="conta"><br><br> 
            Saldo: <input type="txt_number" name="saldo"><br><br>
            Débito: <input type="txt_number" name="debito"><br><br>
            Crédito: <input type="txt_number" name="credito"><br><br>         
            <input type="submit" value="Calcular">
        </form>

        <?php
            
            if (!empty($_GET['conta']) 
            && !empty($_GET['saldo']) 
            && !empty($_GET['debito']) 
            && !empty($_GET['credito'])) {

                $conta = $_GET['conta'];
                $saldo = $_GET['saldo'];
                $debito = $_GET['debito'];
                $credito = $_GET['credito'];

                calcularSaldo(
                    $conta,                   
                    $saldo,
                    $debito,
                    $credito
                );                   
            }               
        ?>

        <p>
            <a href="../">Voltar</a>
        </p>
    </body>
</html>
<?php

    function calcularSaldo($conta, $saldo, $debito, $credito)
    {
        $saldo_atual = $saldo - $debito + $credito;           

        if ($saldo_atual >= 0) {

            echo '<p>Valor: R$ '.$saldo_atual.'.'.' Saldo positivo.'; 

        } else {
        
            echo '<p>Valor: R$ '.$saldo_atual.'.'.' Saldo negativo.'; 
        }           
    }