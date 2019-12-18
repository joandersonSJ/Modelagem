<?php

//Inicio da sessão
session_start();
include "../Model/conexao.php";
require_once "../Model/Produto.php";
//Criação do objeto responsa
$con = getConexao();
$user = new Produto();

$DataCadastro =              $user->getDataCadastro();

    //Verificação se a sessão de nome "senha" não foi iniciado
    if(!isset($_SESSION["senha"])){
        
        //Redirecionamento da url no navegador        
        header("location: index.php");
    }

//$variavel =   $Usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);

    $nomeBusca =  filter_input(INPUT_POST, 'busca', FILTER_SANITIZE_SPECIAL_CHARS); 

    $query = $con->prepare("SELECT * FROM produto WHERE nome = :nome"); 
    $query->bindValue(":nome",$nomeBusca);
    
    $query->execute();

    if($query->rowCount() != 0){
        echo"<table>";
            
                echo"<tr>";
                    
                    echo             "<th>Nome</th>";
                    echo       "<th>Quantidade</th>";
                    echo "<th>Preço de fabrica</th>";
                    echo   "<th>Preço de venda</th>";
                    echo            "<th>Lucro</th>";
                    echo     "<th>DataCadastro</th>";
                
                echo"</tr>";

            foreach($query as $produtos){
                echo "<tr>";

                    echo"<td>".          $produtos["nome"]."</td>";
                    echo"<td>".    $produtos["quantidade"]."</td>";
                    echo"<td>".$produtos["precoDeFabrica"]."</td>";
                    echo"<td>".  $produtos["precoDeVenda"]."</td>";
                    echo"<td>".         $produtos["lucro"]."</td>";
                   echo "<td>".             $DataCadastro ."</td>";
                    
                echo "<tr>";
            }
            
        echo"</table>";
    }else{
        $_SESSION["msg"] = "Produto não encontrado";
        header("location: ../View/busca.php");
    }
