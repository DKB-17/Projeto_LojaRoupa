<?php

include_once "C:/xampp/htdocs/Projeto_LojaRoupa/MODEL/Cliente.php";
include_once "C:/xampp/htdocs/Projeto_LojaRoupa/BLL/Cliente.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$bllCliente = new BLL\Cliente();
$cliente = $bllCliente->SelectByEmail($email);

    if($cliente->getEmail() == $email && $cliente->getSenha() == md5($senha)) {
        session_start();
        $_SESSION['login'] = $cliente->getNome();
        $_SESSION['logado'] = true;
        header('location:../index.php');
    }else{header('location:login.php');}

?>