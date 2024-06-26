<!doctype html>
<html lang="pt-br" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Be You - Login cliente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="./CLIENTE/sign-in.css" rel="stylesheet">

<body class="d-flex align-items-center py-4 bg-body-tertiary">

    <main class="form-signin w-100 m-auto">
        <div>
            <form method="POST" action="validaLogin.php">
                <div class="d-flex justify-content-center">
                    <img class="mb-2" src="./img/logobeyou.png" alt="" width="200" height="100" ">
                </div>
                <?php
                  if(isset($_COOKIE['autorizado'])){
                    if($_COOKIE['autorizado'] == 'false'){
                    echo '<div class="alert alert-danger" role="alert"> Email ou senha incorreto </div>';
                    }
                }else{
                  echo '<h1 class="h5 mb-2 fw-normal">Entrar</h1>';
                }
                ?>
                <div class=" form-floating">
                    <input type="email" class="form-control" id="email-login" name="emailLogin" placeholder="name@example.com" required>
                    <label for="email">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="senha-login" name="senhaLogin" placeholder="Password" required>
                    <label for="senha">Senha</label>
                </div>

                <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" value="lembrar" id="flexCheckDefault" name="relembrar">
                    <label class="form-check-label" for="flexCheckDefault">
                        Lembre de mim
                    </label>
                </div>
                <button class="btn btn-primary w-100 py-2 m-1" type="submit" name="btn-login">Entrar</button>
            </form>
            <a href="index.php">
                <button class="btn btn-primary w-100 py-2 m-1">Voltar</button>
            </a>
            <a href="./CLIENTE/cadastroCliente.php">
                <button class="btn btn-primary w-100 py-2 m-1">Cadastra-se</button>
            </a>
        </div>

    </main>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
<?php 
    setcookie('autorizado',null);
?>