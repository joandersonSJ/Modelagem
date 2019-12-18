<?php 

//Limpeza e destruição da sessão
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./estilo/style_loginCadastro.css">
        <link href="Style/main.css" rel="stylesheet" type="text/css"/>
        <title>Modelagem</title>
    </head>
    <body>
    <center>
            <div id="login">
                <form method="POST" action="../Controller/validar-login.php">
                    <input type="text" name="usuario" placeholder="Usuário" required>
                    <br>
                    <br>
                    <br>
                    <input type="password" name="senha" placeholder="Senha" required>
                    <br>
                    <br>
                    <br>
                    <br>
                    <input class="btn-entrar" type="submit" value="Entrar"> 
                    <br>
                    
                    <a class="link-cadastro" href="cadastro.php"> Já é cadastrado? Cadastre-se!</a> <p></p>
                </form>
            

            </div>   
    </center>
    </body>
</html>


