<?php

namespace BLL;

include_once "C:/xampp/htdocs/Projeto_LojaRoupa/DAL/Cliente.php";

use DAL;


class Cliente
{
    public function SelectByCpf(string $cpf){
        $dalCliente = new \DAL\Cliente();
        return $dalCliente->SelectByCpf($cpf);
    }

    public function SelectByEmail(string $email)
    {
        $dalCliente = new \DAL\Cliente();
        return $dalCliente->SelectByEmail($email);
    }

    public function Insert(\MODEL\Cliente $cliente){

        $dalCliente = new \DAL\Cliente();
        $result = $dalCliente->Insert($cliente);
        return $result;

    }
}
