<?php

    namespace MODEL;

    class cor_do_produto{
        private ?int $idProduto;
        private ?int $idCor;
        public function __construct(){}


        public function getNome(){return $this->idProduto;}
        public function setNome(int $idProduto){$this->idProduto = $idProduto;}
        public function getIdCor(){return $this->idCor;}
        public function setIdCor(int $idCor){$this->idCor=$idCor;}

    }

?>