<?php
    namespace DAL;

    include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/DAL/Conexao.php';
    include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/MODEL/Cliente.php';

    class Cliente{
        public function SelectByEmail(string $email){
            //recuperar do banco de dados
            $sql = 'Select * from cliente where email like ?';
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute([$email]);
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            $cliente = new \MODEL\Cliente();
            $cliente->setId($linha['id']);
            $cliente->setNome($linha['nome']);
            $cliente->setCpf($linha['cpf']);
            $cliente->setEmail($linha['email']);
            $cliente->setSenha($linha['senha']);
            $cliente->setDdd($linha['ddd']);
            $cliente->setContato($linha['contato']);
            $cliente->setDataNascimento($linha['data_nascimento']);
            $cliente->setIdcidade($linha['idCidade']);
           
            return $cliente;
        }
    }
?>