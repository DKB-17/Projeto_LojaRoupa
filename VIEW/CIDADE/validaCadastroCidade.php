<?php

include_once "C:/xampp/htdocs/Projeto_LojaRoupa/MODEL/Cidade.php";
include_once "C:/xampp/htdocs/Projeto_LojaRoupa/BLL/Cidade.php";
session_start();

$cid = $_POST['cidade'];
$uf = $_POST['uf'];

if (isset($cid) && isset($uf)) {

    $cidade = new \MODEL\Cidade();
    $cidade->setCidade($cid);
    $cidade->setIdUf($uf);

    $bllCidade = new \BLL\Cidade();
    $find = $bllCidade->SelectByCidade($cidade);
    if ($find == null) {
        $bllCidade->Insert($cidade);
        header("location:./cadastroCidade.php");
    } else {
        $_SESSION["erroCadastro"] = true;
        header('location:./cadastroCidade.php');
    }
} else {
    $_SESSION["erroCadastro"] = true;
    header('location:./cadastroCidade.php');
}
