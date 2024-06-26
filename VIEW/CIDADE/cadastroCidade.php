<?php
session_start();
if (isset($_SESSION['emailLogin']) && !empty($_SESSION['emailLogin'])) {

    if (isset($_SESSION["erroCadastro"])) {
        if ($_SESSION["erroCadastro"]) {
            echo "<script>alert('A cidade desejado ja esta registrado')</script>";
            unset($_SESSION["erroCadastro"]);
        }
    }
} else {
    header("location:../index.php");
}

include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/BLL/Uf.php';

use BLL\Cidade;

$bllUf = new \BLL\Uf();
$listaUf = $bllUf->Select();

?>

<!doctype html>
<html lang="pt-br" data-bs-theme="auto">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Be You - Cadastro Cidade</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-body-tertiary">
    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="../img/logobeyou.png" alt="" width="200" height="100">
                <h2>Cadastro de Cidade</h2>
            </div>

            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">informações da cidade</h4>

                <form class="needs-validation" method="post" action="./validaCadastroCidade.php" novalidate>
                    <div class="row">
                        <div class="col-9">
                            <label for="cidade">Cidade</label>
                            <input type="text" id="cidade" name="cidade" class="form-control" placeholder="" required>
                            <div class="invalid-feedback">
                                Necessario um nome para cadastrar a cidade
                            </div>
                        </div>
                        <div class="col">
                            <label for="uf">UF</label>
                            <select class="form-control" id="uf" name="uf" required>
                                <option selected disabled value="">UF</option>
                                <?php
                                foreach ($listaUf as $uf) {
                                    echo '<option value="' . $uf->getId() . '">' . $uf->getUf() . '</option>';
                                }
                                ?>
                            </select>
                            <div class="invalid-feedback">
                                Por favor selecione um uf valido
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">


                    <button class="w-100 btn btn-primary btn-lg" type="submit">Confirmar</button>
                </form>
            </div>

    </div>
    </div>
    </main>

    <!--FOOTER-->

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>


</body>

</html>