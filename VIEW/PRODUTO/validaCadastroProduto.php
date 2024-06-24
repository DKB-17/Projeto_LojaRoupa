<?php

include_once "C:/xampp/htdocs/Projeto_LojaRoupa/BLL/Produto.php";
include_once "C:/xampp/htdocs/Projeto_LojaRoupa/MODEL/Produto.php";
session_start();

if (isset($_POST['imagem']) && (isset($_POST['descricao'])) && (isset($_POST['valor_compra'])) && (isset($_POST['valor_venda'])) && (isset($_POST['estoque_minimo'])) && (isset($_POST['estoque'])) && (isset($_POST['categoria'])) && (isset($_POST['tamanho']))) {

    echo $_POST['imagem'] . '</br>';
    echo $_POST['descricao'] . '</br>';
    echo $_POST['valor_compra'] . '</br>';
    echo $_POST['valor_venda'] . '</br>';
    echo $_POST['estoque_minimo'] . '</br>';
    echo $_POST['estoque'] . '</br>';
    echo $_POST['categoria'] . '</br>';
    echo $_POST['tamanho'] . '</br>';
}

echo $_POST['imagem'] . '</br>';
echo $_POST['descricao'] . '</br>';
echo $_POST['valor_compra'] . '</br>';
echo $_POST['valor_venda'] . '</br>';
echo $_POST['estoque_minimo'] . '</br>';
echo $_POST['estoque'] . '</br>';
echo $_POST['categoria'] . '</br>';
echo $_POST['tamanho'] . '</br>';

?>