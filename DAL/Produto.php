<?php

namespace DAL;

include_once "C:/xampp/htdocs/Projeto_LojaRoupa/DAL/Conexao.php";
include_once "C:/xampp/htdocs/Projeto_LojaRoupa/MODEL/Produto.php";

class Produto
{

    public function Select()
    {
        $sql = 'Select * from produto;';
        $con = Conexao::conectar();
        $registros = $con->query($sql);
        $con = Conexao::desconectar();


        foreach ($registros as $linha) {
            $produto = new \MODEL\Produto();
            $produto->setIdProduto($linha['idProduto']);
            $produto->setIdCategoria($linha['idCategoria']);
            $produto->setIdTamanho($linha['idTamanho']);
            $produto->setDescricao($linha['descricao']);
            $produto->setCaminhoImagem($linha['caminho_imagem']);
            $produto->setDataCriacao($linha['data_criacao']);
            $produto->setValorCompra($linha['valor_compra']);
            $produto->setValorVenda($linha['valor_venda']);
            $produto->setEstoque($linha['estoque']);
            $produto->setEstoqueMinimo($linha['estoque_minimo']);

            $listaProduto[] = $produto;
        }
        return $listaProduto;
    }

    public function Insert(\MODEL\Produto $produto)
    {
        $sql = 'INSERT INTO produto (idCategoria, idTamanho, descricao, caminho_imagem, valor_compra, valor_venda, estoque, estoque_minimo) VALUE (?, ?, ?, ?, ?, ?, ?, ?);';
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute([$produto->getIdCategoria(), $produto->getIdTamanho(), $produto->getDescricao(), $produto->getCaminhoImagem(), $produto->getValorCompra(), $produto->getValorVenda(), $produto->getEstoque() , $produto->getEstoqueMinimo()]);
        $con = Conexao::desconectar();

        return $result;
    }
}
