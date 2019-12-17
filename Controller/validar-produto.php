<?php

//Importação de outros arquivos, necessarios para ultilizar outros codigos
    require_once "../Model/conexao.php";
    require_once "../Model/Produto.php";


//Criação de objetos
    $con =   getConexao();
    $user = new Produto();

 //Requisitando as informações do formulario
 $nome =                       filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
 $quantidade =           filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_SPECIAL_CHARS);
 $precoDeFabrica =   filter_input(INPUT_POST, 'precoDeFabrica', FILTER_SANITIZE_SPECIAL_CHARS);
 $precoDeVenda =        filter_input(INPUT_POST, 'precoDeVenda',FILTER_SANITIZE_SPECIAL_CHARS);

//Envio das informações pelo objeto
$user->                            setNome('nome');
$user->                setQuantidade('quantidade');
$user->        setPrecoDeFabrica('precoDeFabrica');
$user->            setPrecoDeVenda('precoDeVenda');

//Resgate das informações pelo objeto    
$Nome =                              $user->getNome();
$Quantidade =                  $user->getQuantidade();
$PrecoDeFabrica =          $user->getPrecoDeFabrica();
$PrecoDeVenda =              $user->getPrecoDeVenda();
$Lucro =                            $user->getLucro();

//Query reponsavel por preparar o codigo que insere as informações no banco
$query = $con->prepare("INSERT INTO venda
(nome,quantidade,precoDeFabrica,precoDeVenda,lucro)VALUES (:nome,:quantidade,
:precoDeFabrica,:precoDeVenda,:lucro)");


$query->                             bindValue(":nome",$Nome);
$query->                 bindValue(":quantidade",$Quantidade);
$query->         bindValue(":precoDeFabrica",$PrecoDeFabrica);
$query->             bindValue(":precoDeVenda",$PrecoDeVenda);
$query->                           bindValue(":lucro",$Lucro);

$query->execute();