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
        <p>Escolha o(os) produto(s):
        <form id="minhaForm" method="get" action="exerc_37.php">
            Quantidade de morangos(kg): <input type="text" name="quantidade_morangos"><br><br> 
            Quantidade de maçãs(kg): <input type="text" name="quantidade_macas"><br><br> 
            <input type="submit" value="Calcular">
        </form>

        <?php
    
            if (isset($_GET['quantidade_morangos'])
            && isset($_GET['quantidade_macas'])) {
                
                $quantidade_morangos = $_GET['quantidade_morangos'];
                $quantidade_macas = $_GET['quantidade_macas'];

                calcularValorFrutas($quantidade_morangos, $quantidade_macas);
                
            }
        ?>

        <p>
            <a href="../">Voltar</a>
        </p>
    </body>
</html>
<?php

    function calcularValorFrutas($quantidade_morangos, $quantidade_macas)
    {

        $preco_morangos = 2.50;
        $preco_macas = 1.80;
        
        if ($quantidade_morangos > 5) {
        
        $preco_morangos = 2.20;

        }

        if ($quantidade_macas > 5) {
        
        $preco_macas = 1.50;        

        }
    
        $total_frutas = $quantidade_morangos + $quantidade_macas;

        $valor_venda = ($quantidade_morangos * $preco_morangos) + ($quantidade_macas * $preco_macas);

        if ($total_frutas > 8 || $preco_morangos + $preco_macas > 25) {
            
            $valor_venda -= ($valor_venda * 10) / 100;

        }
    
        echo "<p>O valor da compra é: R$ $valor_venda.";
    }
