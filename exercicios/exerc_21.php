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
                width: 200px;

            }

            p { 
                border: 1px solid black;
                margin: 10px;
                padding: 10px;
                width: 200px;
            }

        </style>
    </head>
    <body>
        <p>Verifique a duração de um jogo de xadrez:</p>
        <form id="minhaForm" method="get" action="exerc_21.php">
            Início do jogo: <input type="time" name="inicio"><br><br>
            Término do jogo: <input type="time" name="termino"><br><br>
            <input type="submit" value="Verificar">
        </form>

        <?php
            
          
            if (!empty($_GET['inicio'])
            && !empty($_GET['termino'])) {

                $inicio = $_GET['inicio'];
                $termino = $_GET['termino'];


                verificarTempo($inicio, $termino);             

            }
        ?>
        <p>
            <a href="../">Voltar</a>
        </p>
    </body>
</html>
<?php

    function verificarTempo($inicio, $termino)
    {

        list($hora_inicio) = explode(':', $inicio);
        list($hora_termino) = explode(':', $termino);

        $tempo = 24;

        if($hora_inicio <= $hora_termino) {
          
            $tempo = $hora_termino - $hora_inicio;

            echo "<p>O tempo de duração do jogo foi de: $tempo hs.";
        }
        else {
            
            $tempo = (24 - $hora_inicio) + $hora_termino;

            echo "<p>O tempo de duração do jogo foi de: $tempo hs.";
        }
        
    }      
        
 
    