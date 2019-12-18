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
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="Style/main.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<center>
    <form action="../Controller/validar-produto.php" method="post">
        <input type="text" name="nome" placeholder="Nome">
        <br>
        <br>
        <input type="text" name="quantidade" placeholder="Quantidade">
        <br>
        <br>
        <input type="text" name="precoDeFabrica" placeholder="Preço de fabrica">
        <br>
        <br>
        <input type="text" name="precoDeVenda" placeholder="Preço de Venda">
        <br>
        <br>
        <input type="submit" value="Cadastrar">
    </form>
</center>
</body>
</html>