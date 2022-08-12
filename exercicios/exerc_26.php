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
        <p>Verificar estoque:
        <form id="minhaForm" method="get" action="exerc_26.php">
            Quantidade atual: <input type="txt_number" name="atual"><br><br> 
            Quantidade máxima: <input type="txt_number" name="maxima"><br><br>
            Quantidade mínima: <input type="txt_number" name="minima"><br><br>
            
            <input type="submit" value="Verificar">
        </form>
        <?php
            
            if (!empty($_GET['atual']) 
            && !empty($_GET['maxima']) 
            && !empty($_GET['minima']) 

            ) {
                $atual = $_GET['atual'];
                $maxima = $_GET['maxima'];
                $minima = $_GET['minima'];

                calcularEstoque(
                    $atual,                   
                    $maxima,
                    $minima                 
                );                   
            }               
        ?>
            <p>
                <a href="../">Voltar</a>
            </p>
    </body>
</html>
<?php

        function calcularEstoque($atual, $maxima, $minima)
        {

            $media = ($maxima + $minima) / 2;

            if($atual >= $media) {
                
                echo '<p>Não efetuar compra de produtos.';

            }else {

                echo '<p>Efetuar compra de produtos.';
            }

        }
