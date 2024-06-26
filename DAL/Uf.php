<?php
    namespace DAL;
    include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/DAL/Conexao.php';
    include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/MODEL/Uf.php';

    class Uf{

        public function Select(){
            $sql = 'Select * from uf;';
            $con = Conexao::conectar();
            $registros = $con->query( $sql );
            $con = Conexao::desconectar();
            
            foreach ($registros as $linha){
                $uf = new \MODEL\Uf();
                $uf->setId($linha['id']);
                $uf->setUf($linha['UF']);

                $listaUf[] = $uf;
            }
            return $listaUf;
        }

        public function SelectByUf(\MODEL\Uf $uf){
            $sql = 'Select * from uf where uf like ?;';
            $con = Conexao::conectar();
            $query = $con->query($sql);
            $query->execute([$uf->getUf()]);
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            $con = Conexao::desconectar();

            if($linha != 0){
                $u = new \MODEL\Uf();
                $u->setId($linha['id']);
                $u->setUf($linha['UF']);

                return $u;
            }
            return null;

        }

        public function Insert(\MODEL\Uf $uf){
            $sql = 'INSERT INTO uf (uf) VALUE (?);';
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $result = $query->execute([$uf->getUf()]);
            $con = Conexao::desconectar();

            return $result;
        }


    }
?>