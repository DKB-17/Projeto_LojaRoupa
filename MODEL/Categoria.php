<?php

    namespace MODEL;

    class categoria{
        private ?int $idCategoria;
        private ?string $descricao;

        public function __construct(){}

        public function getIdCategoria(){return $this->idCategoria;}
        public function setIdCategoria(int $idCategoria){$this->idCategoria=$idCategoria;}

        public function getCategoria(){return $this->descricao;}
        public function setCategoria(string $descricao){$this->descricao=$descricao;}

    }

?>