<?php

include_once "C:/xampp/htdocs/Projeto_LojaRoupa/BLL/Cliente.php";
session_start();

if(isset($_POST['emailLogin']) && isset($_POST['senhaLogin'])){
    $bllCliente = new BLL\Cliente();
    $cliente = $bllCliente->SelectByEmail($_POST['emailLogin']);

    if($cliente != null && (md5($_POST['senhaLogin']) == $cliente->getSenha())){
        setcookie('autorizado','true',time() + (86400 * 30));
        header("Location:./index.php");
    }else{
        setcookie('autorizado','false',time() + (86400 * 30));
        header("Location:./login.php");
    }
}else if(isset($_SESSION['emailLogin']) && isset( $_SESSION['senhaLogin'])){
    $bllCliente = new BLL\Cliente();
    $cliente = $bllCliente->SelectByEmail($_SESSION['emailLogin']);

    if($cliente != null && (md5($_SESSION['senhaLogin']) == $cliente->getSenha())){
        setcookie('autorizado','true',time() + (86400 * 30));
        header("Location:./index.php");
    }else{
        setcookie('autorizado','false',time() + (86400 * 30));
        header("Location:./login.php");
    }

}else{
    setcookie('autorizado','false',time() + (86400 * 30));
    header("Location:./login.php");
}
?>