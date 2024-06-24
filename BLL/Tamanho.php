<?php

namespace BLL;

include_once "C:/xampp/htdocs/Projeto_LojaRoupa/DAL/Tamanho.php";

use DAL;

class Tamanho{

    public function Select(){
        $dalTamanho = new \DAL\Tamanho();
        return $dalTamanho->Select();
    }
}


?>