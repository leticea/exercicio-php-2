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
        <p>Calcular a <b>soma</b> da idade do homem mais velho com a mulher mais nova
            e o <b>produto</b> da idade do homem mais novo com a mulher mais velha:
        <form id="minhaForm" method="get" action="exerc_36.php">
            Idade homem mais velho: <input type="text" name="homem_velho"><br><br> 
            Idade homem mais novo: <input type="text" name="homem_novo"><br><br> 
            Idade mulher mais velha: <input type="text" name="mulher_velha"><br><br> 
            Idade mulher mais nova: <input type="text" name="mulher_nova"><br><br> 

            <input type="submit" value="Calcular">
        </form>
        <?php
    
            if (isset($_GET['homem_velho'])
            && isset($_GET['homem_novo'])
            && isset($_GET['mulher_velha']) 
            && isset($_GET['mulher_nova'])) {
                    
                
                $homem_velho = $_GET['homem_velho'];
                $homem_novo = $_GET['homem_novo'];
                $mulher_velha = $_GET['mulher_velha'];
                $mulher_nova = $_GET['mulher_nova'];


                calcularValorIdades($homem_velho, $homem_novo, $mulher_velha, $mulher_nova);
                
            }
        ?>
            <p>
                <a href="../">Voltar</a>
            </p>
    </body>
</html>
<?php

        function calcularValorIdades($homem_velho, $homem_novo, $mulher_velha, $mulher_nova)
        {

          if(($homem_velho > $homem_novo) && ($mulher_velha > $mulher_nova)) {

            $soma = $homem_velho + $mulher_nova;

            $produto = $homem_novo * $mulher_velha;

            echo "<p>A soma das idades é: $soma.";
            echo "<p>O produto das idades é: $produto.";

          } else {

          }

        }