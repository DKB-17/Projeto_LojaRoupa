<?php

namespace BLL;

include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/MODEL/Categoria.php';
include_once "C:/xampp/htdocs/Projeto_LojaRoupa/DAL/Categoria.php";

use DAL;


class Categoria{
    public function Select(){
        $dalCategoria = new \DAL\Categoria();
        return $dalCategoria->Select();
    }

    public function SelectByDescricao(\MODEL\Categoria $categoria){
        $dalCategoria = new \DAL\Categoria();
        return $dalCategoria->SelectByDescricao($categoria->getDescricao());
    }

    public function Insert(\MODEL\Categoria $categoria){
        $dalCategoria = new \DAL\Categoria();
        $categoria->setDescricao(strtolower($categoria->getDescricao()));

        return $dalCategoria->Insert($categoria);
    }

}

?>