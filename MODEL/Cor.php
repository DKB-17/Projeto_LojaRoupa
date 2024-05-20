<?php

    namespace MODEL;

    class cor{
        private ?int $idCor;
        private ?string $descricao;

        public function __construct(){}

        public function getIdCor(){return $this->idCor;}
        public function setIdCor(int $idCor){$this->idCor=$idCor;}

        public function getNome(){return $this->descricao;}
        public function setNome(string $descricao){$this->descricao = $descricao;}


    }

?>