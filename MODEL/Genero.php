<?php

    namespace MODEL;

    class genero{
        private ?int $id;
        private ?string $genero;
 

        public function __construct(){}

        public function getId(){return $this->id;}
        public function setId(int $id){$this->id=$id;}

        public function getGenero(){return $this->genero;}
        public function setGenero(string $genero){$this->genero=$genero;}


    }

?>