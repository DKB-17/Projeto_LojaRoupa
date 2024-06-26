<?php

include_once "C:/xampp/htdocs/Projeto_LojaRoupa/MODEL/Categoria.php";
include_once "C:/xampp/htdocs/Projeto_LojaRoupa/BLL/Categoria.php";
session_start();

$cat = $_POST['categoria'];

if(isset($cat) && !empty($cat)){
    
    $categoria = new \MODEL\Categoria();
    $categoria->setDescricao($cat);

    $bllCategoria = new \BLL\Categoria();

    $find = $bllCategoria->SelectByDescricao($categoria); 
    if($find == null){
        $bllCategoria->Insert($categoria);
        header("location:./cadastroCategoria.php");    
    }else{
        $_SESSION["erroCadastro"] = true;
        header("location:./cadastroCategoria.php");
    }
}else{
    $_SESSION["erroCadastro"] = true;
    header("location:./cadastroCategoria.php");
}

?>