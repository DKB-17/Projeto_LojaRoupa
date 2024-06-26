<?php

    namespace BLL;
    include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/DAL/Uf.php';
    use DAL;

    class Uf{
        public function Select() {
            $dalUf = new \DAL\Uf();
            return $dalUf->Select();
        }

        public function SelectByUf(\MODEL\Uf $uf){
            $dalUf = new \DAL\Uf();
            $uf->setUf(strtoupper($uf->getUf()));
            return $dalUf->SelectByUf($uf);
        }

        public function Insert(\MODEL\Uf $uf){
            $dalUf = new \DAL\Uf();
            $uf->setUf(strtoupper($uf->getUf()));
            return $dalUf->Insert($uf);
        }
    }

?>