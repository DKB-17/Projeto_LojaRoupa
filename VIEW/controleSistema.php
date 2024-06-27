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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

</head>


<body class="d-flex align-items-center py-4 bg-body-tertiary">

<?php
  include "./cabecalho.php";
  ?>

    <main class="form-signin w-100 mt-5">
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

                                    <table class="table table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Imagem</th>
                                                <th scope="col">Descricao</th>
                                                <th scope="col">Categoria</th>
                                                <th scope="col">Tamanho</th>
                                                <th scope="col">Valor Compra</th>
                                                <th scope="col">Valor Venda</th>
                                                <th scope="col">Estoque</th>
                                                <th scope="col">Estoque minimo</th>
                                                <th scope="col">Update</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="text-center align-items-center">
                                            <th scope="row" class="align-middle">1</th>
                                            <td class="align-middle"><img src="./img/Feminino/Blusa/blusa1f.png" style="height: 150px; width: 100px;" alt="a"></td>
                                            <td class="align-middle">Blusa branca</td>
                                            <td class="align-middle">Blusa</td>
                                            <td class="align-middle">M</td>
                                            <td class="align-middle">R$50,00</td>
                                            <td class="align-middle">R$65,00</td>
                                            <td class="align-middle">60</td>
                                            <td class="align-middle">10</td>
                                            <td class="align-middle"><a href="."><i class="bi bi-cloud-upload-fill" style="font-size: 40px;"></i></a></td>
                                            <td class="align-middle"><a href="."><i class="bi bi-trash3-fill" style="font-size: 40px;"></a></i></td>
                                        </tr>

                                        </tbody>
                                    </table>




                                </div>
                                <div class="tab-pane fade" id="list-profile" role="tabpanel"
                                    aria-labelledby="list-profile-list">
                                
                                

                                    <table class="table table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Nome</th>
                                                <th scope="col">CPF</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Senha</th>
                                                <th scope="col">Prefixo</th>
                                                <th scope="col">Contato</th>
                                                <th scope="col">Data Nascimento</th>
                                                <th scope="col">Cidade</th>
                                                <th scope="col">Update</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="text-center align-items-center">
                                            <th scope="row" class="align-middle">1</th>
                                            <td class="align-middle"><img src="./img/Feminino/Blusa/blusa1f.png" style="height: 150px; width: 100px;" alt="a"></td>
                                            <td class="align-middle">3</td>
                                            <td class="align-middle">Cleiton</td>
                                            <td class="align-middle">666.666.666-66</td>
                                            <td class="align-middle">18</td>
                                            <td class="align-middle">1899999-9999</td>
                                            <td class="align-middle"></td>
                                            <td class="align-middle">10</td>
                                            <td class="align-middle"><a href="."><i class="bi bi-cloud-upload-fill" style="font-size: 40px;"></i></a></td>
                                            <td class="align-middle"><a href="."><i class="bi bi-trash3-fill" style="font-size: 40px;"></a></i></td>
                                        </tr>

                                        </tbody>
                                    </table>
                                
                                
                                
                                
                                </div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>