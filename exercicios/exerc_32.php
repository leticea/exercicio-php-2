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
        <p>Verificar resultado da partida de um jogo:
        <form id="minhaForm" method="get" action="exerc_32.php">
            Número de gols do time A: <input type="txt_number" name="time_a"><br><br> 
            Número de gols do time B: <input type="txt_number" name="time_b"><br><br> 

            <input type="submit" value="Verificar">
        </form>
        <?php
            
            if (isset($_GET['time_a'])
            && !empty($_GET['time_b'])) {

                $time_a = $_GET['time_a'];
                $time_b = $_GET['time_b'];

                verificarResultadoJogo($time_a, $time_b);
                
            }
        ?>
            <p>
                <a href="../">Voltar</a>
            </p>
    </body>
</html>
<?php

        function verificarResultadoJogo($time_a, $time_b)

        {
       
            if ($time_a > $time_b) {

                echo "<p>O time A é o vencedor.";

            } elseif ($time_b > $time_a) {

                echo "<p>O time B é o vencedor.";

            } else {

                echo "<p>Empate.";
            }

        }
      