<?php
  
  session_start();
  if(!empty($_SESSION['msg'])){
        
        echo $_SESSION['msg'];
    
    }
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
        <div id="cadastro">
            <center>
            <form method="POST" action="../Controller/validar-cadastro.php">
        
                <input type="text" name="nome" id="nome" placeholder="Nome" required> <br><br>
                <input type="text" name="usuario" id="usuario" placeholder="Usuario" required> <br><br>
                <input type="text" name="matricula" id="matricula" placeholder="Matricula" required> <br><br>
                <input type="password" name="senha1" id="senha1" placeholder="*******" required> <br><br>
                <input type="password" name="senha2" id="senha2" placeholder="*******" required> <p></p><br><br>
                <input class="btn-entrar" type="submit" value="Cadastrar"><br><br>
                <a class="link-cadastro" href="index.php"> Entrar!</a>

            </form>
        </center>        
        </div>

    </body>
</html>

