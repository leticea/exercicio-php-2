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
        <p>Digite três valores e veja-os em ordem crescente:
        <form id="minhaForm" method="get" action="exerc_30.php">
            Valor 1: <input type="txt_number" name="num_1"><br><br> 
            Valor 2: <input type="txt_number" name="num_2"><br><br> 
            Valor 3: <input type="txt_number" name="num_3"><br><br> 
            <input type="submit" value="Verificar">
        </form>

        <?php
            
            if (isset($_GET['num_1'])
            && !empty($_GET['num_2']) 
            && !empty($_GET['num_3'])) {

                $num_1 = $_GET['num_1'];
                $num_2 = $_GET['num_2'];
                $num_3 = $_GET['num_3'];

                verificarPosicaoDosValores($num_1, $num_2, $num_3);
            }          
        ?>

        <p>
            <a href="../">Voltar</a>
        </p>
    </body>
</html>
<?php

    function verificarPosicaoDosValores($num_1, $num_2, $num_3)
    {              

        if ($num_1 >= $num_2 && $num_1 >= $num_3 && $num_2 >= $num_3) {

            echo '<p>'.$num_3, " ". $num_2, " ". $num_1;

        } elseif ($num_1 >= $num_2 && $num_1 >= $num_3 && $num_3 >= $num_2) {

            echo '<p>'.$num_2, " ". $num_3, " ". $num_1;

        } elseif ($num_2 >= $num_1 && $num_2 >= $num_3 && $num_1 >= $num_3) {

            echo '<p>'.$num_3, " ". $num_1, " ". $num_2;

        } elseif ($num_2 >= $num_1 && $num_2 >= $num_3 && $num_3 >= $num_1) {

            echo '<p>'.$num_1, " ". $num_3, " ". $num_2;

        } elseif ($num_3 >= $num_1 && $num_3 >= $num_2 && $num_1 >= $num_2){

            echo '<p>'.$num_2, " ". $num_1, " ". $num_3;

        } elseif (($num_3 >= $num_1 && $num_3 >= $num_2 && $num_2 >= $num_1)) {

            echo '<p>'.$num_1, " ". $num_2, " ". $num_3;
        }           
    }