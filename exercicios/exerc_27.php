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
        <p>Digite um valor:
        <form id="minhaForm" method="get" action="exerc_27.php">
            Valor: <input type="txt_number" name="valor"><br><br> 
            
            <input type="submit" value="Verificar">
        </form>
        <?php
            
            if (isset($_GET['valor'])){
                $valor = $_GET['valor'];

                verificarValor($valor);

            }

                    
        ?>
            <p>
                <a href="../">Voltar</a>
            </p>
    </body>
</html>
<?php

        function verificarValor($valor)

        {    
           
            if($valor > 0) {

                echo '<p>O valor é positivo.';

            }elseif($valor < 0) {

                echo '<p>O valor é negativo.';

            }else {

                echo '<p>O valor é igual a zero.';
            }                       
            
        }

       