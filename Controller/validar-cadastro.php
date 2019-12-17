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
    $nome =             filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $usuario =       filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
    $matricula =           filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_SPECIAL_CHARS);
    $senha1 =         filter_input(INPUT_POST, 'senha1', FILTER_SANITIZE_SPECIAL_CHARS);
    $senha2 =         filter_input(INPUT_POST, 'senha2', FILTER_SANITIZE_SPECIAL_CHARS);

    if($senha1 == $senha2){

      //Comunicação com o SGBD
      $query = $con->prepare("SELECT * FROM usuarios WHERE
      usuario = :usuario OR matricula = :matricula AND senha = :senha");
    
      //Substituição dos parametros 
      $query->bindValue (":nome",       $nome);
      $query->bindValue (":usuario", $usuario);
      $query->bindValue (":matricula",     $matricula);
      $query->bindValue (":senha",    $senha1);
    
      //Execução da query
      $query->execute();
      
    //Opção caso os itens acima não executem
    }else{
        $_SESSION["msg"] = "As senhas não são as mesmas";
        
        header("location: ../View/Cadastro.php");
      }
      
      //Verificação se o número de tabelas foi diferente de 0 ou seja se algo foi encontrado
      if($query->rowCount() == 0){

        //Criação das sessões e atribuições dos sus respectivos valores
        $_SESSION['nome'] =                   $nome;
        $_SESSION['usuario'] =             $usuario;
        $_SESSION['matricula'] =         $matricula;
        $_SESSION['senha'] =                $senha1;


        //Envio das informações pelo objeto
        $user->           setNome($_SESSION['nome']);
        $user->     setUsuario($_SESSION['usuario']);
        $user-> setMatricula($_SESSION['matricula']);
        $user->         setSenha($_SESSION['senha']);

        
        //Resgate das informações pelo objeto    
        $Nome =                    $user->getNome();
        $Usuario =              $user->getUsuario();
        $Matricula =          $user->getMatricula();
        $Senha =                  $user->getSenha();


        //Query reponsavel por preparar o codigo que insere as informações no banco
        $query = $con->prepare("INSERT INTO usuarios
        (nome,usuario,matricula,senha)VALUES (:nome,:usuario,
        :matricula,:senha)");


        $query->                   bindValue(":nome",$Nome);
        $query->             bindValue(":usuario",$Usuario);
        $query->         bindValue(":matricula",$Matricula);
        $query->                 bindValue(":senha",$Senha);
        

        $query->execute();

        header("location: ../View/inicio.php");
        }else{
          $_SESSION["msg"] = "Os valores inseridos já estão cadastrados.";
          header("location: ../View/Cadastro.php");
      }