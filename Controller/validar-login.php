<?php

//Abertura do da sessão
session_start();

//Importação de outros arquivos, necessarios para ultilizar outros codigos
require_once "../Model/conexao.php";
require_once "../Model/Usuario.php";


//Criação de objetos
$con =   getConexao();
$user = new Usuario();

  //Requisitando as informações do formulario
  $Usuario =      filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
  $Senha =          filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);


    //Envio das informações pelo objeto
    $user->         setUsuario($Usuario);
    $user->             setSenha($Senha);

    
    //resgate das informações pelo objeto
    $Usuario =        $user->getUsuario();
    $Senha =            $user->getSenha();


  $query = $con->prepare("SELECT * FROM usuarios WHERE usuario = :usuario
  OR matricula = :matricula AND senha = :senha");
  
  
  $query->bindValue (":usuario", $Usuario);
  $query->bindValue(":matricula", $Usuario);
  $query->bindValue (":senha", $Senha);

  $query->execute();
  
        if($query->rowCount() != 0){


          $query = $con->prepare("SELECT * FROM usuarios WHERE senha = :senha");
          $query->bindValue(":senha", $Senha);
          $query->execute();
          
        }if($query->rowCount() != 0){
            //Manipulação de informações que foram retirados do banco
            foreach($query->fetchAll() as $valor){
          
            $_SESSION['nome'] =                   $valor['nome'];
            $_SESSION['usuario'] =             $valor['usuario'];
            $_SESSION['matricula'] =         $valor['matricula'];
            $_SESSION['senha'] =                 $valor['senha'];
            
          }

            header("location: ../View/inicio.php");
        }else{

    header("location: ../View/index.php");
}
