<?php

session_start();
if (isset($_SESSION['emailLogin']) && !empty($_SESSION['emailLogin'])) {

    if(isset($_SESSION["erroCadastro"])){
        if($_SESSION["erroCadastro"]){
            echo "<script>alert('O tamanho desejado ja esta registrado')</script>";
            unset($_SESSION["erroCadastro"]);
        }

    }
    
} else {
    header("location:../index.php");
}
?>

<!doctype html>
<html lang="pt-br" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Be You - Cadastro Tamanho</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-body-tertiary">
    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="../img/logobeyou.png" alt="" width="200" height="100">
                <h2>Cadastro de Tamanhos</h2>
            </div>

            <form class="needs-validation" method="post" action="validaCadastroTamanho.php" novalidate>

                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">informações do tamanho</h4>

                    <div class="row g-3 mb-3">
                        <div class="col-12 mb-2">
                            <label for="tamanho" class="form-label">Tamanho</label>
                            <input type="text" class="form-control" id="tamanho" maxlength="1" size="1" placeholder=""
                                name="tamanho" required>
                            <div class="invalid-feedback">
                                E necessario um tamanho.
                            </div>
                        </div>


                        <hr class="my-4">


                        <button class="w-100 btn btn-primary btn-lg" type="submit">Confirmar</button>
            </form>

    </div>
    </div>
    </main>

    <!--FOOTER-->

    </div>

    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</body>

</html>