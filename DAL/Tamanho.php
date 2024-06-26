<?php

namespace DAL;

include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/DAL/Conexao.php';
include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/MODEL/Tamanho.php';

class Tamanho{

    public function Select() {
        $sql = 'Select * from tamanho;';
        $con = Conexao::conectar();
        $registros = $con->query($sql);
        $con = Conexao::desconectar();


        foreach($registros as $linha){
            $tamanho = new \MODEL\Tamanho();
            $tamanho->setId($linha['id']);
            $tamanho->setDescricao($linha['descricao']);

            $listaTamanho[] = $tamanho;
        }
        return $listaTamanho;
    }

    public function SelectByDescricao(string $descricao){
        $sql = 'select * from tamanho where descricao like ?;';
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute([$descricao]);
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        $con = Conexao::desconectar();

        if($linha != 0){

            $tamanho = new \MODEL\Tamanho();
            $tamanho->setId($linha['id']);
            $tamanho->setDescricao($linha['descricao']);

            return $tamanho;
        }
        return null;

    }


    public function Insert(\MODEL\Tamanho $tamanho){
        $sql = "INSERT INTO tamanho (descricao) VALUE (?);";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute([$tamanho->getDescricao()]);
        $con = Conexao::desconectar();

        return $result;
    }

}

?>