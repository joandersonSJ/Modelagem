<?php

//Inicio da sessão
session_start();

    //Verificação se a sessão de nome "senha" não foi iniciado
    if(!isset($_SESSION["senha"])){
        
        //Redirecionamento da url no navegador        
        header("location: index.php");
    }

    if((isset($_SESSION["msg"])) && ($_SESSION["msg"] != "")){
        echo $_SESSION["msg"];
        $_SESSION["msg"] = "";
    }

?>



<!DOCTYPE html>
<html lang=pt-br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="Style/style-inicio.css" rel="stylesheet" type="text/css"/>
    <title>Document</title>
</head>
<body>
<center>
    <div class="form">
        <form action="cadastro-produto.php" method="post">
            <input type="submit" value="Cadastrar Produto">
        </form>
        <br><br><br>
        <form action="../View/busca.php" method="post">
            <input type="submit" value="Buscar Produto">
        </form>
    </div>
    </center>
</body>
</html>