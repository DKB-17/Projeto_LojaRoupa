<?php

    namespace MODEL;

    class produto{
        private ?int $idProduto;
        private ?int $idCategoria;
        private ?int $idTamanho;
        private ?string $descricao;
        private ?string $imagem;
        private ?float $valor_compra;
        private ?float $valor_venda;
        private ?int $estoque;
        private ?int $estoque_minimo;

        public function __construct(){}

        public function getIdProduto(){return $this->idProduto;}
        public function setIdProduto(int $idProduto){$this->idProduto=$idProduto;}

        public function getIdCategoria(){return $this->idCategoria;}
        public function setIdCategoria(int $idCategoria){$this->idCategoria=$idCategoria;}

        public function getIdTamanho(){return $this->idTamanho;}
        public function setIdTamanho(int $idTamanho){$this->idTamanho=$idTamanho;}

        public function getDescricao(){return $this->descricao;}
        public function setDescricao(string $descricao){$this->descricao=$descricao;}

        public function getImagem(){return $this->imagem;}
        public function setImagem(string $imagem){$this->imagem=$imagem;}

        public function getValorCompra(){return $this->valor_compra;}
        public function setValorCompra(float $valor_compra){$this->valor_compra=$valor_compra;}

        public function getValorVenda(){return $this->valor_venda;}
        public function setValorVenda(float $valor_venda){$this->valor_venda=$valor_venda;}

        public function getEstoque(){return $this->estoque;}
        public function setEstoque(int $estoque){$this->estoque=$estoque;}

        public function getEstoqueMinimo(){return $this->estoque_minimo;}
        public function setEstoqueMinimo(int $estoque_minimo){$this->estoque_minimo=$estoque_minimo;}

    }

?>