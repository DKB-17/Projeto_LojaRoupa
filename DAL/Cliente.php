<?php

namespace DAL;

include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/DAL/Conexao.php';
include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/MODEL/Cliente.php';

class Cliente
{

    public function Insert(\MODEL\Cliente $cliente)
    {
        $sql = "INSERT INTO cliente (nome, cpf, email, senha, prefixo, contato, data_nascimento, idCidade) VALUE (?,?,?,?,?,?,?,?);";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute([$cliente->getNome(),$cliente->getCpf(),$cliente->getEmail(),$cliente->getSenha(),$cliente->getPrefixo(),$cliente->getContato(),$cliente->getDataNascimento(),$cliente->getIdcidade()]);
        $con = Conexao::desconectar();

        return $result;
    }
    public function SelectByEmail(string $email)
    {
        $sql = 'Select * from cliente where email like ?';
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute([$email]);
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        $con = Conexao::desconectar();


        if ($linha != 0) {
            $cliente = new \MODEL\Cliente();
            $cliente->setId($linha['id']);
            $cliente->setNome($linha['nome']);
            $cliente->setCpf($linha['cpf']);
            $cliente->setEmail($linha['email']);
            $cliente->setSenha($linha['senha']);
            $cliente->setPrefixo($linha['prefixo']);
            $cliente->setContato($linha['contato']);
            $cliente->setDataNascimento($linha['data_nascimento']);
            $cliente->setIdcidade($linha['idCidade']);
            return $cliente;
        }
        return null;
    }
    public function SelectByCpf(string $cpf){
        $sql = 'Select * from cliente where cpf like ?';
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute([$cpf]);
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        $con = Conexao::desconectar();

        if ($linha != 0) {
            $cliente = new \MODEL\Cliente();
            $cliente->setId($linha['id']);
            $cliente->setNome($linha['nome']);
            $cliente->setCpf($linha['cpf']);
            $cliente->setEmail($linha['email']);
            $cliente->setSenha($linha['senha']);
            $cliente->setPrefixo($linha['prefixo']);
            $cliente->setContato($linha['contato']);
            $cliente->setDataNascimento($linha['data_nascimento']);
            $cliente->setIdcidade($linha['idCidade']);
            return $cliente;
        }
        return null;
    }
}
