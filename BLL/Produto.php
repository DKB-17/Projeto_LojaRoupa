<?php

namespace BLL;

include_once "C:/xampp/htdocs/Projeto_LojaRoupa/DAL/Produto.php";

use DAL;

class Produto{

    public function Select(){
        $dalProduto = new \DAL\Produto();
        return $dalProduto->Select();
    }

    public function Insert(\MODEL\Produto $produto){
        $dalProduto = new \DAL\Produto();
        return $dalProduto->Insert($produto);
    }

}
?>