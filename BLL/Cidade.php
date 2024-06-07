<?php

    namespace BLL;
    include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/DAL/Cidade.php';
    use DAL;

    class Cidade{
        public function Select(){
            $dalCidade = new \DAL\Cidade();
            return $dalCidade->Select();
        }
    }
?>