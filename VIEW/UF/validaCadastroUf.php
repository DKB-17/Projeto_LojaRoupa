<?php

include_once "C:/xampp/htdocs/Projeto_LojaRoupa/MODEL/Uf.php";
include_once "C:/xampp/htdocs/Projeto_LojaRoupa/BLL/Uf.php";
session_start();

$u = $_POST['uf'];

if (isset($uf)) {

    $uf = new \MODEL\Uf();
    $uf->setUf($u);

    $bllUf = new \BLL\Uf();
    $find = $bllUf->SelectByUf($uf);
    if ($find == null) {
        $bllUf->Insert($uf);
        header("location:./cadastroUf.php");
    } else {
        $_SESSION["erroCadastro"] = true;
        header('location:./cadastroUf.php');
    }
} else {
    $_SESSION["erroCadastro"] = true;
    header('location:./cadastroUf.php');
}
