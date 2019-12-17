<?php

    Class Usuario{
        
        private        $Nome;
        private     $Usuario;
        private   $Matricula;
        private       $Senha;

        //Metodos acessores

            //Metodos Getters
            function getNome() {
                return $this->Nome;
            }

            function getUsuario() {
                return $this->Usuario;
            }

            function getMatricula() {
                return $this->Matricula;
            }

            function getSenha() {
                return $this->Senha;
            }

            //Metodos Setters
            function setNome($Nome) {
                $this->Nome = $Nome;
            }

            function setUsuario($Usuario) {
                $this->Usuario = $Usuario;
            }

            function setMatricula($Matricula) {
                $this->Matricula = $Matricula;
            }
            
            function setSenha($Senha) {
                $this->Senha = $Senha;
            }
    }
