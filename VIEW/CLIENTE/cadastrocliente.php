<?php

include_once "C:/xampp/htdocs/Projeto_LojaRoupa/BLL/Cliente.php";
include_once "C:/xampp/htdocs/Projeto_LojaRoupa/MODEL/Cliente.php";
session_start();

if (isset($_POST['nome']) && (isset($_POST['cpf'])) && (isset($_POST['email'])) && (isset($_POST['senha'])) && (isset($_POST['prefixo'])) && (isset($_POST['contato'])) && (isset($_POST['dataNascimento'])) && (isset($_POST['cidade']))) {

    // echo $_POST['nome'] . '</br>';    
    // echo $_POST['cpf'] . '</br>';    
    // echo $_POST['email'] . '</br>';    
    // echo md5($_POST['senha']) . '</br>';    
    // echo $_POST['prefixo'] . '</br>';    
    // echo $_POST['contato'] . '</br>';    
    // echo $_POST['dataNascimento'] . '</br>';    
    // echo $_POST['cidade'] . '</br>';    
    $bllCliente = new \BLL\Cliente();
    $existe = $bllCliente->SelectByCpf($_POST['cpf']);
    if ($existe == null){

        $cliente = new \MODEL\Cliente();
        $cliente->setNome($_POST['nome']);
        $cliente->setCpf($_POST['cpf']);
        $cliente->setEmail($_POST['email']);
        $cliente->setSenha(md5($_POST['senha']));
        $cliente->setPrefixo($_POST['prefixo']);
        $cliente->setContato($_POST['contato']);
        $cliente->setDataNascimento($_POST['dataNascimento']);
        $cliente->setIdcidade($_POST['cidade']);

        $result = $bllCliente->Insert($cliente);

    }else{
        $_SESSION['registro-ja-existe'] = 'true';
        header('location:./cadastro.php');
    }    
    // echo $cliente->getNome() . '</br>';
    // echo $cliente->getCpf() . '</br>';
    // echo $cliente->getEmail() . '</br>';
    // echo $cliente->getSenha() . '</br>';
    // echo $cliente->getPrefixo() . '</br>';
    // echo $cliente->getContato() . '</br>';
    // echo $cliente->getDataNascimento() . '</br>';
    // echo $cliente->getIdcidade() . '</br>';

    

    

    // if ($result->errorCode() == '00000') {
    //     $_SESSION['emailLogin'] = $cliente->getEmail();
    //     $_SESSION['senhaLogin'] = $cliente->getSenha();
    //     header('location:../validaLogin.php');
    // }else{
    //     $result->errorCode();
    // }
}
