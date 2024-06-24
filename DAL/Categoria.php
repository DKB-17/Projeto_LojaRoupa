<?php

namespace DAL;

include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/DAL/Conexao.php';
include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/MODEL/Categoria.php';

class Categoria{


    public function Select(){
        $sql = "Select * from categoria;";

        $con = Conexao::conectar();
        $registros = $con->query($sql);
        $con = Conexao::desconectar();


        foreach($registros as $linha){
            $categoria = new \MODEL\Categoria();
            $categoria->setId($linha['id']);
            $categoria->setDescricao($linha['descricao']);

            $listaCategoria[] = $categoria;
        }
        return $listaCategoria;
        
    }

}

?>