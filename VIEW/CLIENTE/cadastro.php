<?php
include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/BLL/Cidade.php';
include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/BLL/Uf.php';
session_start();

use BLL\Cidade;

$bllCidade = new \BLL\Cidade();
$listaCidade = $bllCidade->Select();
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
    <title>Be You - Cadastro cliente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="sign-in.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">

    <main class="form-signin w-100 m-auto">
        <form method="POST" action="cadastrocliente.php">
            <div class="d-flex justify-content-center">
                <img class="mb-1" src="../img/logobeyou.png" alt="" width="200" height="100">
            </div>
            <?php
                  if(isset($_SESSION['registro-ja-existe'])){
                    if($_SESSION['registro-ja-existe'] == 'true'){
                    echo '<div class="alert alert-danger" role="alert"> Este CPF ja possui conta no site </div>';
                    }
                }else{
                  echo '<h1 class="h5 mb-1 fw-normal">Criar conta</h1>';
                }
                ?>

            <div class="form-floating">
                <input type="text" class="form-control mb-1" id="floatingInput" name="nome" placeholder="Seu nome" required>
                <label for="floatingInput">Nome:</label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control mb-1" id="floatingInput" name="cpf" maxlength="14" size="14" placeholder="000.000.000-00" required>
                <label for="floatingInput">CPF:</label>
            </div>


            <div class="input-group mb-1">
                <div class="input-group-prepend">
                    <div class="form-floating">
                        <input type="tel" maxlength="2" size="2" value="55" class="form-control" id="floatingInputGroup1" name="prefixo" required>
                        <label for="floatingInputGroup1">Prefixo:</label>
                    </div>
                </div>
                <div class="form-floating">
                    <input type="tel" class="form-control" id="floatingInputGroup" name="contato" maxlength="12" size="12" pattern="([0-9]{2})[0-9]{5}-[0-9]{4}" required>
                    <label for="floatingInputGroup1">Telefone:</label>
                </div>
            </div>

            <div class="form-floating">
                <input type="date" class="form-control mb-1" id="floatingInput" name="dataNascimento" required>
                <label for="floatingInput">Data nascimento</label>
            </div>

            <div class="form-floating mb-1">
                <select class="form-control p-2" onChange="selectCidade()" id="cidade" name="cidade" required>
                    <option>Cidade</option>
                    <?php
                    foreach ($listaCidade as $cidade) {
                        echo '<option value="' . $cidade->getIdCidade() . '">' .  $cidade->getCidade() . ' - ' . $listaUf[$cidade->getIdUf() - 1]->getUf() . '</option>';
                    } ?>
                </select>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control mb-1" id="floatingInput" name="email" placeholder="name@example.com" required>
                <label for="floatingInput">Email:</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control mb-1" id="floatingPassword" name="senha" placeholder="Password" required>
                <label for="floatingPassword">Senha:</label>
            </div>

            <button class="btn btn-outline-primary w-100 py-3 mb-1" type="submit">Confirmar</button>

        </form>
        <a href="../login.php">
            <button class="btn btn-primary w-100 py-3">Voltar</button>
        </a>

        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
<?php 
    $_SESSION['registro-ja-existe'] = null;
?>