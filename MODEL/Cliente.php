<?php

    namespace MODEL;

    class cliente{
        private ?int $id;
        private ?string $nome;
        private ?string $cpf;
        private ?string $email;
        private ?string $senha;
        private ?string $contato;
        private ?string $data_nascimento;
        private ?int $idCidade;

        public function __construct(){}

        public function getId(){return $this->id;}
        public function setId(int $id){$this->id=$id;}

        public function getNome(){return $this->nome;}
        public function setNome(string $nome){$this->nome=$nome;}

        public function getCpf(){return $this->cpf;}
        public function setCpf(string $cpf){$this->cpf=$cpf;}

        public function getEmail(){return $this->email;}
        public function setEmail(string $email){$this->email=$email;}

        public function getsenha(){return $this->senha;}
        public function setsenha(string $senha){$this->senha=$senha;}

        public function getcontato(){return $this->contato;}
        public function setcontato(string $contato){$this->contato=$contato;}

        public function getDataNascimento(){return $this->data_nascimento;}
        public function setDataNascimento(string $data_nascimento){$this->data_nascimento=$data_nascimento;}

        public function getCidade(){return $this->idCidade;}
        public function setCidade(int $idCidade){$this->idCidade=$idCidade;}

    }

?>