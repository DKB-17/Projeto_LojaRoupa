<?php

    namespace MODEL;

    class uf{
        private ?int $id;
        private ?string $uf;
        

        public function __construct(){}

        public function getId(){return $this->id;}
        public function setId(int $id){$this->id=$id;}

        public function getUf(){return $this->uf;}
        public function setUf(string $uf){$this->uf=$uf;}

        
    }

?>