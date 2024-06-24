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

}

?>