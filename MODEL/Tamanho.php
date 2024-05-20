<?php

    namespace MODEL;

    class tamanho{
        private ?int $id;
        private ?string $descricao;

        public function __construct(){}

        public function getId(){return $this->id;}
        public function setId(int $id){$this->id=$id;}

        public function getNome(){return $this->descricao;}
        public function setNome(string $descricao){$this->descricao=$descricao;}


    }

?>