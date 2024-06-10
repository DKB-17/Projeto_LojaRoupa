<?php

    namespace BLL;
    include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/DAL/Uf.php';
    use DAL;

    class Uf{
        public function Select() {
            $dalUf = new \DAL\Uf();
            return $dalUf->Select();
        }
    }

?>