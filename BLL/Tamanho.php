<?php

namespace BLL;

include_once "C:/xampp/htdocs/Projeto_LojaRoupa/DAL/Tamanho.php";

use DAL;

class Tamanho{

    public function Select(){
        $dalTamanho = new \DAL\Tamanho();
        return $dalTamanho->Select();
    }

    public function SelectByDescricao(\MODEL\Tamanho $tamanho){
        $dalTamanho = new \DAL\Tamanho();
        $tamanho->setDescricao(strtolower($tamanho->getDescricao()));
        return $dalTamanho->SelectByDescricao($tamanho->getDescricao());
    }


    public function Insert(\MODEL\Tamanho $tamanho){
        $dalTamanho = new \DAL\Tamanho();
        $tamanho->setDescricao(strtoupper($tamanho->getDescricao()));
        return $dalTamanho->Insert($tamanho);

    }
}


?>