<?php

    namespace MODEL;

    class produto_do_genero{
        private ?int $idProduto;
        private ?int $idGenero;


        public function __construct(){}

        public function getIdProduto(){return $this->idProduto;}
        public function setIdProduto(int $idProduto){$this->idProduto=$idProduto;}
        public function getIdVenda(){return $this->idGenero;}
        public function setIdVenda(int $idGenero){$this->idGenero=$idGenero;}



    }

?>