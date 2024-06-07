<?php
namespace DAL;
include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/DAL/Conexao.php';
include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/MODEL/Cidade.php';

class Cidade{
    public function Select(){
        $sql = 'Select * from cidade;';
        $con = Conexao::conectar();
        $registros = $con->query($sql);
        $con = Conexao::desconectar();


        foreach($registros as $linha){
            $cidade = new \MODEL\Cidade();
            $cidade->setIdCidade($linha['idCidade']);
            $cidade->setCidade($linha['cidade']);
            $cidade->setIdUf($linha['idUF']);

            $listaCidade[] = $cidade;
        }
        return $listaCidade;
    }
}

?>