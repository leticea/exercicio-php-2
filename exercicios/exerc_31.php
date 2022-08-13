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
        <p>Digite três valores e veja qual o tipo do triângulo:
        <form id="minhaForm" method="get" action="exerc_31.php">
            Valor A: <input type="txt_number" name="A"><br><br> 
            Valor B: <input type="txt_number" name="B"><br><br> 
            Valor C: <input type="txt_number" name="C"><br><br> 

            <input type="submit" value="Verificar">
        </form>
        <?php
            
            if (isset($_GET['A'])
            && !empty($_GET['B']) 
            && !empty($_GET['C']) 

            ){

                $A = $_GET['A'];
                $B = $_GET['B'];
                $C = $_GET['C'];

                verificarTriangulo($A, $B, $C);
                
            }
        ?>
            <p>
                <a href="../">Voltar</a>
            </p>
    </body>
</html>
<?php

        function verificarTriangulo($A, $B, $C)
        {
           
            
            if($A != $B && $B != $C && $C != $A) {
                
                echo "<p>O triângulo é escaleno.";

            }elseif($A == $B > $C || $A == $C > $B || $B == $C > $A) {

                echo "<p>O triângulo é isósceles.";         
               
            }elseif($A == $B && $B = $C && $A == $C) {

                echo "<p>O triângulo é equilátero.";

            }else{

                echo "<p>O triângulo não existe.";
            }     

        }