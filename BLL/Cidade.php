<?php

    namespace BLL;
    include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/DAL/Cidade.php';
    use DAL;

    class Cidade{
        public function Select(){
            $dalCidade = new \DAL\Cidade();
            return $dalCidade->Select();
        }

        public function SelectByCidade(\MODEL\Cidade $cidade){
            $dalCidade = new \DAL\Cidade();
            $cidade->setCidade(strtolower($cidade->getCidade()));
            return $dalCidade->SelectByCidade($cidade);
        }

        public function Insert(\MODEL\Cidade $cidade){
            $dalCidade = new \DAL\Cidade();
            $cidade->setCidade(strtolower($cidade->getCidade()));
            return $dalCidade->Insert($cidade);
        }
    }
?>