<?php

namespace VIEW\PRODUTO;
include_once "C:/xampp/htdocs/Projeto_LojaRoupa/BLL/Produto.php";
include_once "C:/xampp/htdocs/Projeto_LojaRoupa/MODEL/Produto.php";

$produto = new \MODEL\Produto();

$id = $_POST['idProduto'];

$produto->setIdProduto(intval($id));
$produto->setIdCategoria($_POST['categoria']);
$produto->setIdTamanho($_POST['tamanho']);
$produto->setDescricao($_POST['descricao']);
$produto->setCaminhoImagem($_POST['imagem']);
$produto->setDataCriacao($_POST['data_criacao']);
$produto->setValorCompra($_POST['valor_compra']);
$produto->setValorVenda($_POST['valor_venda']);
$produto->setEstoque($_POST['estoque']);
$produto->setEstoqueMinimo($_POST['estoque_minimo']);

$bllProduto = new \BLL\Produto();
$result  = $bllProduto->Update($produto);

header("location:../controleSistema.php");

?>