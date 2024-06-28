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

    public function SelectById(int $id){
        $sql = 'select * from produto where idProduto like ?;';
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute([$id]);
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        $con = Conexao::desconectar();

        if($linha != 0){

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
        
            return $produto;
        }
        return null;



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

    public function Delete(int $idProduto){
        $sql = 'DELETE FROM produto WHERE produto . idProduto = ?;';

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute([$idProduto]);
        $con = Conexao::desconectar();

        return $result;
    }

    public function Update(\MODEL\Produto $produto){
        $sql = 'UPDATE produto SET idCategoria = ?, idTamanho = ?, descricao = ?, caminho_imagem = ?, data_criacao = ?, valor_compra = ?, valor_venda = ?, estoque = ?, estoque_minimo = ? WHERE id = ?;';

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute([$produto->getIdCategoria(), $produto->getIdTamanho(), $produto->getDescricao(), $produto->getCaminhoImagem(), $produto->getDataCriacao(), $produto->getValorCompra(), $produto->getValorVenda(), $produto->getEstoque(), $produto->getEstoqueMinimo(), $produto->getIdProduto()]);
        $con = Conexao::desconectar();


        return $result;
    }
}

?>