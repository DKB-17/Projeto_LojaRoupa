<?php

namespace VIEW\PRODUTO;
include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/BLL/Produto.php';

$id = $_GET['id'];

$bllProduto = new \BLL\Produto();

$result = $bllProduto->Delete($id);

header("location:../controleSistema.php");

?>