<?php 

Class Produto {
    private $Nome;
    private $Quantidade;
    private $PrecoDeFabrica;
    private $PrecoDeVenda;
    private $Lucro;
    private $DataCadastro;

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
                    $this->Lucro = $this->getPrecoDeVenda() - $this->getPrecoDeFabrica();
                    return $this->Lucro;
                }
                
                 function getDataCadastro() {
                 $this->DataCadastro = $this->dataAtual(2);
                 return $this->DataCadastro;
                }

                //Metodos Setters
                function setNome($Nome) {
                    $this->Nome = $Nome;
                }

                function setQuantidade($Quantidade) {
                    $this->Quantidade = $Quantidade;
                }

                function setPrecoDeFabrica($PrecoDeFabrica) {
                    $this->PrecoDeFabrica = $PrecoDeFabrica;
                }

                function setPrecoDeVenda($PrecoDeVenda) {
                    $this->PrecoDeVenda = $PrecoDeVenda;
                }
                
                function setDataCadastro($DataCadastro) {
                    $this->DataCadastro = $DataCadastro;
                }
                
                public function dataAtual($tipo){
	switch($tipo){
            case 1: $rst = date("Y-m-d"); break;
            case 2: $rst = date("Y-m-d H:i:s"); break;
            case 3: $rst = date("d/m/Y"); break;
        }
        return $rst;
    }
}