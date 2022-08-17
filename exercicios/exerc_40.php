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
        <p>Calcular o valor do(s) produto(s):</p>
        <form id="minhaForm" method="get" action="exerc_40.php">
            Nome do produto: <input type="text" name="nome"><br><br> 
            Quantidade adquirida: <input type="text" name="quantidade"><br><br> 
            Valor unitário do produto: <input type="text" name="valor_unitario"><br><br> 

            <input type="submit" value="Calcular">
        </form>
        <?php
    
            if (!empty($_GET['nome'])
            && isset($_GET['quantidade'])
            && isset($_GET['valor_unitario'])) {
                
                $nome = $_GET['nome'];
                $quantidade = $_GET['quantidade'];
                $valor_unitario = $_GET['valor_unitario'];

                calcularValorProduto($nome, $quantidade, $valor_unitario);
                
            }
        ?>
            <p>
                <a href="../">Voltar</a>
            </p>
    </body>
</html>
<?php

        function calcularValorProduto($nome, $quantidade, $valor_unitario)
        {

            if ($quantidade <= 5) {

                $valor_total = ($quantidade * $valor_unitario) - ($quantidade * $valor_unitario * 2) / 100;

            }
            if ($quantidade > 5 && $quantidade <= 10) {

                $valor_total = ($quantidade * $valor_unitario) - ($quantidade * $valor_unitario * 3) / 100;

            }
            if ($quantidade > 10) {

                $valor_total = ($quantidade * $valor_unitario) - ($quantidade * $valor_unitario * 5) / 100;

            }

            echo "<p>O valor da compra é de R$ $valor_total.";

        }
