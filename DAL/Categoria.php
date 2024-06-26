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
    public function SelectByDescricao(string $descricao){
        $sql = "Select * from categoria where descricao like ?;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute([$descricao]);
        $result = $query->fetch(\PDO::FETCH_ASSOC);
        $con = Conexao::desconectar();

        if($result != 0){        
            $categoria = new \MODEL\Categoria();
            $categoria->setId($result['id']);
            $categoria->setDescricao($result['descricao']);
    
            return $categoria;
        }
        return null;
        
    }

    public function Insert(\MODEL\Categoria $categoria){
        $sql = "INSERT INTO categoria (descricao) VALUE (?);";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute([$categoria->getDescricao()]);
        $con = Conexao::desconectar();

        return $result;

    }

}

?>