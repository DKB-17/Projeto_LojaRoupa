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


    }

?>