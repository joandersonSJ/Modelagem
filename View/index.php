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
        <title>Modelagem</title>
    </head>
    <body>
            <div id="login">
                <form method="POST" action="../Controller/validar-login.php">
                    <input type="text" name="usuario" placeholder="Usuário" required>
                    
                    <input type="password" name="senha" placeholder="Senha" required>
                    
                    <input class="btn-entrar" type="submit" value="Entrar">    
                </form>
            
                <a class="link-cadastro" href="cadastro.php"> Já é cadastrado? Cadastre-se!</a> <p></p>
            </div>   
    </body>
</html>


