<?php

include_once "C:/xampp/htdocs/Projeto_LojaRoupa/MODEL/Tamanho.php";
include_once "C:/xampp/htdocs/Projeto_LojaRoupa/BLL/Tamanho.php";
session_start();

$t = $_POST["tamanho"];

if(isset($t) && !empty($t)){
    $tamanho = new \MODEL\Tamanho();
    $bllTamanho = new \BLL\Tamanho();

    $tamanho->setDescricao($t);

    $find = $bllTamanho->SelectByDescricao($tamanho);

    if($find != null){
        $_SESSION["erroCadastro"] = true; 
        header("location:./cadastroTamanho.php");
    }else{
        $result = $bllTamanho->Insert($tamanho);
        header('location:./cadastroTamanho.php');
    }

}else{
    header('location:./cadastroTamanho');
}


?>