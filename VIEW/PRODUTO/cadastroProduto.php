<?php

include_once "C:/xampp/htdocs/Projeto_LojaRoupa/BLL/Categoria.php";
include_once "C:/xampp/htdocs/Projeto_LojaRoupa/BLL/Tamanho.php";

session_start();
if (isset($_SESSION['emailLogin']) && !empty($_SESSION['emailLogin'])) {
    if(isset($_SESSION["erroCadastro"]) && $_SESSION["erroCadastro"]){
        echo "<script>alert('Falha ao cadastrar produto')</script>";
        unset($_SESSION["erroCadastro"]);
    }
} else {
    header("location:../index.php");
}

if(isset($_SESSION["sucessoCadastro"]) && $_SESSION["sucessoCadastro"]){
    echo "<script>alert('Cadastro do produto realizado com sucesso')</script>";
    unset($_SESSION["sucessoCadastro"]);
}

$tamanhos = new \BLL\Tamanho();
$listaTamanho = $tamanhos->Select();

$categorias = new \BLL\Categoria();
$listaCategoria = $categorias->Select();

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
    <title>Be You - Cadastro Produto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="./Validação/checkout.css" rel="stylesheet">
    <link href="./style.css" rel="stylesheet">
</head>

<body class="bg-body-tertiary">

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="../img/logobeyou.png" alt="" width="200" height="100">
                <h2>Cadastro de produto</h2>
            </div>

            <form enctype="multipart/form-data" method="post" class="needs-validation" action="./validaCadastroProduto.php" novalidate>
                <div class="row g-5">
                    <div class="col-md-5 col-lg-4 order-md-last">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-primary">imagem do produto</span>
                        </h4>
                        <div class="card d-flex">
                            <!-- <img class="m-3" src="../img/padrao.png" alt="imagem produto"> -->
                            <div class=" p-2 justify-content-center">
                                <label for="picture__input" class="form-label picture" tabindex="0">
                                    <input id="picture__input" type="file" accept="image/*" name="imagem" class="form-control picture__input">
                                    <span class="picture__image"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7 col-lg-8">
                        <h4 class="mb-3">informações do produto</h4>

                        <div class="row g-3 mb-3">
                            <div class="col-12 mb-2">
                                <label for="descricao" class="form-label">Descrição</label>
                                <input type="text" class="form-control" id="descricao" maxlength="100" placeholder="" name="descricao" required>
                                <div class="invalid-feedback">
                                    E necessario a descricao do produto.
                                </div>
                            </div>

                            <div class="row g-1 d-flex justify-content-between">
                                <div class="col-sm-2">
                                    <label for="valor" class="form-label">Valor Compra</label>
                                    <input type="text" class="form-control" id="valor" maxlength="9" name="valor_compra" onkeypress="$(this).mask('R$ #.##0,00', {reverse: true});" required>
                                    <div class="invalid-feedback">
                                        E necessario um valor de compra do produto.
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <label for="valor" class="form-label">Valor Venda</label>
                                    <input type="text" class="form-control" id="valor" maxlength="9" name="valor_venda" onkeypress="$(this).mask('R$ #.##0,00', {reverse: true});" required>
                                    <div class="invalid-feedback">
                                        E necessario um valor de venda do produto.
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <label for="estoque" class="form-label">Estoque minimo</label>
                                    <input type="number" class="form-control" id="estoque" max="99" min="1" name="estoque_minimo" required>
                                    <div class="invalid-feedback">
                                        E necessario uma quantidade diferente de 0.
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <label for="estoque" class="form-label">Estoque</label>
                                    <input type="number" class="form-control" id="estoque" max="999" min="0" name="estoque">

                                </div>
                            </div>


                            <div class="col-md-5">
                                <label for="categoria" class="form-label">Categoria</label>
                                <select name="categoria" class="form-select" id="categoria" required>
                                    <option value="">Escolha</option>
                                    <?php
                                    foreach ($listaCategoria as $categoria) {
                                        echo '<option value="' . $categoria->getId() . '">' .  $categoria->getDescricao() . '</option>';
                                    } ?>
                                </select>
                                <div class="invalid-feedback">
                                    Por favor escolha uma categoria valida
                                </div>
                            </div>
                        </div>

                        <h4 class="mb-3">tamanho</h4>

                        <div class="my-3">

                            <?php
                            foreach ($listaTamanho as $tamanho) {
                                echo '  <div class="form-check">
                                            <input id="tamanho" name="tamanho" type="radio" class="form-check-input" value="'.$tamanho->getId().'" required>
                                            <label class="form-check-label" for="tamanho">' . $tamanho->getDescricao() . '</label>
                                        </div>';
                            } ?>
                        </div>

                        <hr class="my-4">


                        <button class="w-50 btn btn-primary btn-lg" type="submit">Confirmar</button>
            </form>

    </div>
    </div>
    </main>

    <!--FOOTER-->

    </div>

    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="./Validação/checkout.js"></script>
    <script src="./script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</body>

</html>
<?php
