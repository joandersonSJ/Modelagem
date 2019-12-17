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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Busca</title>
</head>
<body>

    <form action="../Controller/efetuar-busca.php" method="post">
        <!--Label linkada com o input de busca-->
        <label for="busca">Insira o nome do produto:</label>
        
        <!--Input responsavel pela busca-->
        <input type="text" name="busca" id="busca">
        <input type="submit" value="Buscar">
    </form>

</body>
</html>
