<?php

    namespace MODEL;

    class Cidade{
        private ?int $idCidade;
        private ?string $cidade;
        private ?int $idUf;

        public function __construct(){}

        public function getIdCidade(){return $this->idCidade;}
        public function setIdCidade(int $idCidade){$this->idCidade=$idCidade;}

        public function getCidade(){return $this->cidade;}
        public function setCidade(string $cidade){$this->cidade=$cidade;}

        public function getIdUf(){return $this->idUf;}
        public function setIdUf(int $idUf){$this->idUf=$idUf;}


    }

?>