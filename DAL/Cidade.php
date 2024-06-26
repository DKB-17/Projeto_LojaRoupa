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

    public function SelectByCidade(\MODEL\Cidade $cidade){
        $sql = 'Select * from cidade where cidade like ? and idUf = ?;';
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute([$cidade->getCidade(), $cidade->getIdUf()]);
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        $con = Conexao::desconectar();

        if($linha != 0){
            $cidade = new \MODEL\Cidade();
            $cidade->setIdCidade($linha['idCidade']);
            $cidade->setCidade($linha['cidade']);
            $cidade->setIdUf($linha['idUF']);

            return $cidade;
        }
        return null;
    }

    public function Insert(\MODEL\Cidade $cidade){
        $sql = 'INSERT INTO cidade (cidade, idUF) VALUE (?, ?);';
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute([$cidade->getCidade(), $cidade->getIdUf()]);
        $con = Conexao::desconectar();

        return $result;
    }
}

?>