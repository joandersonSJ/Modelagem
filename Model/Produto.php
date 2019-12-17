<?php 

Class Produto {
    private $Nome;
    private $Quantidade;
    private $PrecoDeFabrica;
    private $PrecoDeVenda;
    private $Lucro;

        //Metodos acessores

            //Metodos Getters
                function getNome() {
                    return $this->Nome;
                }

                function getQuantidade() {
                    return $this->Quantidade;
                }

                function getPrecoDeFabrica() {
                    return $this->PrecoDeFabrica;
                }

                function getPrecoDeVenda() {
                    return $this->PrecoDeVenda;
                }

                function getLucro() {
                    return $this->Lucro;
                }

                //Metodos Setters
                function setNome($Nome) {
                    $this->Nome = $Nome;
                }

                function setQuantidade() {
                    $this->Quantidade = $Quantidade;
                }

                function setPrecoDeFabrica() {
                    $this->PrecoDeFabrica = $PrecoDeFabrica;
                }

                function setPrecoDeVenda() {
                    $this->PrecoDeVenda = $PrecoDeVenda;
                }

                function setLucro() {
                    $this->Lucro = $Lucro;
                }
}