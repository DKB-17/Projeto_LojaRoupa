<?php

    namespace MODEL;

    class item_venda{
        private ?int $idVenda;
        private ?int $idProduto;
        private ?int $qtde;
        private ?float $valor;


        public function __construct(){}

        public function getIdVenda(){return $this->idVenda;}
        public function setIdVenda(int $idVenda){$this->idVenda=$idVenda;}

        public function getIdProduto(){return $this->idProduto;}
        public function setIdProduto(int $idProduto){$this->idProduto=$idProduto;}

        public function getQtde(){return $this->qtde;}
        public function setQtde(int $qtde){$this->qtde=$qtde;}

        public function getValor(){return $this->valor;}
        public function setValor(float $valor){$this->valor=$valor;}


    }

?>