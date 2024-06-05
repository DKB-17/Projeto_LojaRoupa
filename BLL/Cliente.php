<?php
    namespace BLL;
    include_once "C:/xampp/htdocs/Projeto_LojaRoupa/DAL/Cliente.php";
    use DAL;


    class Cliente{

        public function SelectByEmail(string $email){
            $dalCliente = new \DAL\Cliente();
            return $dalCliente->SelectByEmail($email);
    }
}
?>