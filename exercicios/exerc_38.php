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
        <p>Login:</p>
        <form id="minhaForm" method="post" action="exerc_38.php">
            Digite o código do usuário: <input type="text" name="codigo"><br><br> 
            Digite a senha do usuário: <input type="password" name="senha"><br><br> 
            <input type="submit" value="Entrar">
        </form>

        <?php
    
            if (isset($_POST['codigo'])
            && isset($_POST['senha'])) {
                
                $codigo = $_POST['codigo'];
                $senha = $_POST['senha'];

                permitirAcesso($codigo, $senha);
            }
        ?>
        
        <p>
            <a href="../">Voltar</a>
        </p>
    </body>
</html>
<?php

    function permitirAcesso($codigo, $senha)
    {
    
        if ($codigo != 1234) {

            echo "<p>Usuário inválido.";
        }

        if ($senha != 9999) {

            echo "<p>Senha incorreta.";
        }

        if ($codigo == 1234 && $senha == 9999) {

            echo "<p>Acesso permitido.";
        }          
    }