<?php

include_once "C:/xampp/htdocs/Projeto_LojaRoupa/BLL/Produto.php";
include_once "C:/xampp/htdocs/Projeto_LojaRoupa/MODEL/Produto.php";
session_start();

if (isset($_FILES['imagem']) && (isset($_POST['descricao'])) && (isset($_POST['valor_compra'])) && (isset($_POST['valor_venda'])) && (isset($_POST['estoque_minimo'])) && (isset($_POST['estoque'])) && (isset($_POST['categoria'])) && (isset($_POST['tamanho']))) {

    //echo "enviados com sucesso";
    // var_dump($_FILES['imagem']);
    // echo $_POST['descricao'] . '</br>';
    // echo $_POST['valor_compra'] . '</br>';
    // echo $_POST['valor_venda'] . '</br>';
    // echo $_POST['estoque_minimo'] . '</br>';
    // echo $_POST['estoque'] . '</br>';
    // echo $_POST['categoria'] . '</br>';
    // echo $_POST['tamanho'] . '</br>';

    $imagem = $_FILES['imagem'];
    if ($imagem['error']) {
        $_SESSION["erroCadastro"] = true;
        header('location:./cadastroProduto.php');
    }
    $pasta = "./img/imgProdutos/";
    $nomeDaImage = $imagem['name'];
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDaImage, PATHINFO_EXTENSION));

    if ($extensao != 'jpg' && $extensao != 'png') {
        $_SESSION["erroCadastro"] = true;
        header('location:./cadastroProduto.php');
    }

    $caminho = $pasta . $novoNomeDoArquivo . "." . $extensao;
    $deu_certo = move_uploaded_file($imagem["tmp_name"], "." . $caminho);
    if ($deu_certo) {
        $bllProduto = new \BLL\Produto();
        $produto = new \MODEL\Produto();

        $produto->setIdCategoria($_POST['categoria']);
        $produto->setIdTamanho($_POST['tamanho']);
        $produto->setDescricao(ucfirst($_POST['descricao']));
        $produto->setCaminhoImagem($caminho);
        $produto->setValorCompra(((float) str_replace(',','.', $_POST['valor_compra'])));
        $produto->setValorVenda(((float) str_replace(',','.', $_POST['valor_venda'])));
        $produto->setEstoque($_POST['estoque']);
        $produto->setEstoqueMinimo($_POST['estoque_minimo']);

        // echo $produto->getIdCategoria() . "</br>";
        // echo $produto->getIdTamanho() . "</br>";
        // echo $produto->getDescricao() . "</br>";
        // echo $produto->getCaminhoImagem() . "</br>";
        // echo $produto->getValorCompra() . "</br>";
        // echo $produto->getValorVenda() . "</br>";
        // echo $produto->getEstoque() . "</br>";
        // echo $produto->getEstoqueMinimo() . "</br>";

        $result = $bllProduto->Insert($produto);
        if ($result == 1){
            $_SESSION["sucessoCadastro"] = true;
            header('location:./cadastroProduto.php'); 
        }else{
            $_SESSION["erroCadastro"] = true;
            header('location:./cadastroProduto.php'); 
        }

    } else {
        $_SESSION["erroCadastro"] = true;
        header('location:./cadastroProduto.php');
    }
}
