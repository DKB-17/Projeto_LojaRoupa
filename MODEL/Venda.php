<?php

    namespace MODEL;

    class venda{
        private ?int $idVenda;
        private ?int $idCliente;
        private ?int $idFormaPagamento;
        private ?string $data_venda;
        private ?float $valor_total;


        public function __construct(){}

        public function getIdVenda(){return $this->idVenda;}
        public function setIdVenda(int $idVenda){$this->idVenda=$idVenda;}

        public function getIdCliente(){return $this->idCliente;}
        public function setIdCliente(int $idCliente){$this->idCliente=$idCliente;}

        public function getIdFormaPagamento(){return $this->idFormaPagamento;}
        public function setIdFormaPagamento(int $idFormaPagamento){$this->idFormaPagamento=$idFormaPagamento;}

        public function getDataVenda(){return $this->data_venda;}
        public function setDataVenda(string $data_venda){$this->data_venda=$data_venda;}

        public function getValorTotal(){return $this->valor_total;}
        public function setValorTotal(float $valor_total){$this->valor_total=$valor_total;}

        
    }

?>