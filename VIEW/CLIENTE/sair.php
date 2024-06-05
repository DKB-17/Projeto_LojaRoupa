<?php
    session_start();

    unset($_SESSION['logado']);
    unset($_SESSION['login']);

    header('location:../index.php');
?>