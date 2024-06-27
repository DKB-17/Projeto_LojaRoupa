<?php

include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/BLL/Produto.php';
include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/BLL/Cliente.php';
include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/BLL/Categoria.php';
include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/BLL/Tamanho.php';
include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/BLL/Cidade.php';
include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/BLL/Uf.php';


$bllProduto = new \BLL\Produto();
$lstProduto = $bllProduto->Select();

$bllCliente = new \BLL\Cliente();
$lstCliente = $bllCliente->Select();

$bllCategoria = new \BLL\Categoria();
$lstCategoria = $bllCategoria->Select();

$bllTamanho = new \BLL\Tamanho();
$lstTamanho = $bllTamanho->Select();

$bllCidade = new \BLL\Cidade();
$lstCidade = $bllCidade->Select();

$bllUf = new \BLL\Uf();
$lstUf = $bllUf->Select();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be You - Controle Sistema</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>


<body class="d-flex align-items-center py-4 bg-body-tertiary">

    <main class="form-signin w-100 m-auto">
        <div>
            <div class="d-flex justify-content-center">
                <img class="mb-2" src="./img/logobeyou.png" alt="" width="200" height="100" ">
            </div>
            <div class=" card m-5">
                <form method=" POST" action="">

                    <div class="row">
                        <div class="col-4">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action active" id="list-home-list"
                                    data-toggle="list" href="#list-home" role="tab" aria-controls="home">Produtos</a>
                                <a class="list-group-item list-group-item-action" id="list-profile-list"
                                    data-toggle="list" href="#list-profile" role="tab"
                                    aria-controls="profile">Cliente</a>
                                <a class="list-group-item list-group-item-action" id="list-messages-list"
                                    data-toggle="list" href="#list-messages" role="tab"
                                    aria-controls="messages">Categoria</a>
                                <a class="list-group-item list-group-item-action" id="list-settings-list"
                                    data-toggle="list" href="#list-settings" role="tab"
                                    aria-controls="settings">Tamanho</a>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                                    aria-labelledby="list-home-list">



                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">idProduto</th>
                                                <th scope="col">Imagem</th>
                                                <th scope="col">Descricao</th>
                                                <th scope="col">IdCategoria</th>
                                                <th scope="col">Idtamanho</th>
                                                <th scope="col">Valor Compra</th>
                                                <th scope="col">Valor Venda</th>
                                                <th scope="col">Estoque</th>
                                                <th scope="col">Estoque minimo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td colspan="2">Larry the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>




                                </div>
                                <div class="tab-pane fade" id="list-profile" role="tabpanel"
                                    aria-labelledby="list-profile-list">...</div>
                                <div class="tab-pane fade" id="list-messages" role="tabpanel"
                                    aria-labelledby="list-messages-list">...</div>
                                <div class="tab-pane fade" id="list-settings" role="tabpanel"
                                    aria-labelledby="list-settings-list">...</div>
                            </div>
                        </div>
                    </div>


                </form>
            </div>

        </div>

    </main>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>